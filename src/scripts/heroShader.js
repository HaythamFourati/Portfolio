// ===== HERO · LIQUID GLASS SHADER =====
// One fullscreen triangle, all work in the fragment shader: an fbm height field
// acts as a sheet of glass that refracts (with RGB dispersion) a slow tilted
// gradient scene. Pointer drives a chained spring so the glass "follows" with weight.

const VERT = `#version 300 es
void main() {
  vec2 p = vec2((gl_VertexID << 1) & 2, gl_VertexID & 2);
  gl_Position = vec4(p * 2.0 - 1.0, 0.0, 1.0);
}`;

const FRAG = `#version 300 es
precision highp float;
out vec4 fragColor;
uniform vec2 uRes;
uniform float uTime;
uniform vec2 uMouse;
uniform float uEnergy;
uniform vec3 uBg, uC1, uC2, uC3, uLime;

vec2 hash2(vec2 p) {
  p = vec2(dot(p, vec2(127.1, 311.7)), dot(p, vec2(269.5, 183.3)));
  return -1.0 + 2.0 * fract(sin(p) * 43758.5453);
}
float snoise(vec2 p) {
  const float K1 = 0.366025404, K2 = 0.211324865;
  vec2 i = floor(p + (p.x + p.y) * K1);
  vec2 a = p - i + (i.x + i.y) * K2;
  vec2 o = a.x > a.y ? vec2(1.0, 0.0) : vec2(0.0, 1.0);
  vec2 b = a - o + K2, c = a - 1.0 + 2.0 * K2;
  vec3 h = max(0.5 - vec3(dot(a, a), dot(b, b), dot(c, c)), 0.0);
  vec3 n = h * h * h * h * vec3(dot(a, hash2(i)), dot(b, hash2(i + o)), dot(c, hash2(i + 1.0)));
  return dot(n, vec3(70.0));
}
float fbm(vec2 p) {
  float v = 0.0, a = 0.5;
  for (int i = 0; i < 3; i++) { v += a * snoise(p); p *= 2.05; a *= 0.45; }
  return v;
}

float T;
vec2 M;
// Glass surface height; the pointer presses a soft dent into it.
float surf(vec2 p) {
  float h = fbm(p * 0.8 + vec2(T * 0.16, -T * 0.11)) * 0.85;
  vec2 d = p - M;
  return h + (0.35 + 0.25 * uEnergy) * exp(-dot(d, d) / 0.3);
}
// What sits behind the glass: a tilted ramp with two drifting lobes + faint slats.
float scene(vec2 q) {
  vec2 dir = vec2(sin(0.55), -cos(0.55));
  float s = 0.42 + dot(q, dir) * 0.7;
  vec2 l1 = vec2(cos(T * 0.61), sin(T * 0.43)) * 0.4;
  vec2 l2 = vec2(cos(2.1 - T * 0.37), sin(1.3 + T * 0.53)) * 0.5;
  s -= 0.28 * exp(-dot(q - l1, q - l1) * 1.8);
  s += 0.2 * exp(-dot(q - l2, q - l2) * 1.3);
  float sa = 1.05 + T * 0.05;
  s += 0.12 * sin(dot(q, vec2(cos(sa), sin(sa)) * 4.2));
  return s;
}
vec3 ramp(float t) {
  vec3 c = mix(uBg, uC1, smoothstep(0.0, 0.4, t));
  c = mix(c, uC2, smoothstep(0.35, 0.75, t));
  return mix(c, uC3, smoothstep(0.7, 1.0, t));
}

void main() {
  vec2 uv = (gl_FragCoord.xy - 0.5 * uRes) / uRes.y;
  T = uTime * 0.14;
  vec2 p = (uv - uMouse * 0.06) * 1.05;
  M = uMouse * 0.94 * 1.05;

  float e = 0.055;
  float h0 = surf(p);
  float hx1 = surf(p + vec2(e, 0.0)), hx0 = surf(p - vec2(e, 0.0));
  float hy1 = surf(p + vec2(0.0, e)), hy0 = surf(p - vec2(0.0, e));
  vec2 grad = vec2(hx1 - hx0, hy1 - hy0) / (2.0 * e);
  float lap = (hx1 + hx0 + hy1 + hy0 - 4.0 * h0) / (e * e * 32.0);
  float curv = lap / (1.0 + abs(lap));

  // Refraction with per-channel offset = chromatic dispersion on the edges.
  vec2 off = grad * 0.07;
  float sg = scene(p + off);
  float sr = scene(p + off * 1.45);
  float sb = scene(p + off * 0.55);

  vec3 n = normalize(vec3(-grad, 1.0));
  float sheen = pow(max(dot(n, normalize(vec3(-0.5, 0.85, 0.85))), 0.0), 6.0);
  float gain = curv * 0.22 + h0 * 0.1 - sheen * 0.12;
  float tg = clamp((sg + gain - 0.46) * 1.15 + 0.5, 0.0, 1.0);
  float tr = clamp((sr + gain - 0.46) * 1.15 + 0.5, 0.0, 1.0);
  float tb = clamp((sb + gain - 0.46) * 1.15 + 0.5, 0.0, 1.0);
  float win = 4.0 * tg * (1.0 - tg);
  vec3 col = vec3(ramp(mix(tg, tr, win)).r, ramp(tg).g, ramp(mix(tg, tb, win)).b);

  // Lime only where caustics pile up: the "live signal" catching light.
  col += uLime * smoothstep(0.55, 1.0, curv) * 0.22;
  col = mix(uBg, col, smoothstep(0.0, 0.16, tg) * 0.9 + 0.1);
  col *= 1.0 - 0.18 * dot(uv, uv);
  // Grain + triangular dither (kills banding on the dark gradient).
  col += (fract(sin(dot(gl_FragCoord.xy + uTime, vec2(12.9898, 78.233))) * 43758.5453) - 0.5) * 0.012;
  float da = fract(sin(dot(gl_FragCoord.xy, vec2(12.9898, 78.233))) * 43758.5453);
  float db = fract(sin(dot(gl_FragCoord.xy + 17.0, vec2(12.9898, 78.233))) * 43758.5453);
  col += (da + db - 1.0) / 255.0 * 1.35;
  fragColor = vec4(clamp(col, 0.0, 1.0), 1.0);
}`;

const hex = (h) => [1, 3, 5].map((i) => parseInt(h.slice(i, i + 2), 16) / 255);
const PALETTE = {
  uBg: hex('#0b0b12'),
  uC1: hex('#17142a'),
  uC2: hex('#3b2a78'),
  uC3: hex('#9a6bff'),
  uLime: hex('#b6f23d'),
};

export function initHeroShader(canvas, { still = false } = {}) {
  const gl = canvas.getContext('webgl2', { alpha: false, antialias: false, depth: false, stencil: false });
  if (!gl) return;

  const prog = gl.createProgram();
  for (const [type, src] of [[gl.VERTEX_SHADER, VERT], [gl.FRAGMENT_SHADER, FRAG]]) {
    const s = gl.createShader(type);
    gl.shaderSource(s, src);
    gl.compileShader(s);
    gl.attachShader(prog, s);
  }
  gl.linkProgram(prog);
  if (!gl.getProgramParameter(prog, gl.LINK_STATUS)) {
    console.error('[hero-shader]', gl.getProgramInfoLog(prog));
    return;
  }
  gl.useProgram(prog);
  gl.bindVertexArray(gl.createVertexArray());
  const loc = (n) => gl.getUniformLocation(prog, n);
  for (const [k, v] of Object.entries(PALETTE)) gl.uniform3fv(loc(k), v);
  const uRes = loc('uRes'), uTime = loc('uTime'), uMouse = loc('uMouse'), uEnergy = loc('uEnergy');

  // Pointer rig: target -> lead (lerp) -> body (spring) -> lag (softer spring).
  // ponytail: 3-stage chain; getlayers runs 5 stages + a trail buffer, add if it feels too stiff.
  const rig = { tx: 0, ty: 0, lx: 0, ly: 0, bx: 0, by: 0, vx: 0, vy: 0, gx: 0, gy: 0, wx: 0, wy: 0, energy: 0 };
  const step = (k) => {
    rig.lx += (rig.tx - rig.lx) * 0.105 * k;
    rig.ly += (rig.ty - rig.ly) * 0.105 * k;
    rig.vx += ((rig.lx - rig.bx) * 0.03 - rig.vx * 0.19) * k;
    rig.vy += ((rig.ly - rig.by) * 0.03 - rig.vy * 0.19) * k;
    rig.bx += rig.vx * k;
    rig.by += rig.vy * k;
    rig.wx += ((rig.bx - rig.gx) * 0.014 - rig.wx * 0.2) * k;
    rig.wy += ((rig.by - rig.gy) * 0.014 - rig.wy * 0.2) * k;
    rig.gx += rig.wx * k;
    rig.gy += rig.wy * k;
    const speed = Math.min(1, Math.hypot(rig.vx, rig.vy) / 0.02);
    rig.energy += (speed - rig.energy) * (speed > rig.energy ? 0.22 : 0.0085) * k;
  };

  const resize = () => {
    const dpr = Math.min(window.devicePixelRatio || 1, 1); // full-bleed blur-like field: 1x is indistinguishable
    const w = Math.round(canvas.clientWidth * dpr), h = Math.round(canvas.clientHeight * dpr);
    if (canvas.width !== w || canvas.height !== h) { canvas.width = w; canvas.height = h; }
    gl.viewport(0, 0, w, h);
    gl.uniform2f(uRes, w, h);
  };

  let clock = 0, last = 0, raf = 0, visible = true;
  const draw = () => {
    resize();
    gl.uniform1f(uTime, clock);
    gl.uniform2f(uMouse, rig.gx, rig.gy);
    gl.uniform1f(uEnergy, rig.energy);
    gl.drawArrays(gl.TRIANGLES, 0, 3);
  };
  const frame = (t) => {
    raf = requestAnimationFrame(frame);
    if (!visible || document.hidden) { last = 0; return; }
    const dt = Math.min(50, Math.max(4.167, last ? t - last : 16.7)); // clamp stalls so nothing jumps
    last = t;
    clock += dt * 0.001;
    step(dt * 0.06);
    draw();
  };

  if (still) { clock = 7; draw(); canvas.classList.add('is-ready'); return; }

  const hero = canvas.parentElement;
  hero.addEventListener('pointermove', (e) => {
    const r = canvas.getBoundingClientRect();
    rig.tx = (e.clientX - r.left - r.width / 2) / r.height;
    rig.ty = (r.height / 2 - (e.clientY - r.top)) / r.height;
  }, { passive: true });
  hero.addEventListener('pointerleave', () => { rig.tx = 0; rig.ty = 0; });
  new IntersectionObserver(([en]) => { visible = en.isIntersecting; }).observe(canvas);

  raf = requestAnimationFrame(frame);
  // Fade in after two frames so the first paint is never a black flash.
  requestAnimationFrame(() => requestAnimationFrame(() => canvas.classList.add('is-ready')));
}
