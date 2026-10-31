# Design

Visual system for the Haytham Fourati portfolio. Register: **brand**. Aesthetic lane: **Cinematic Mono** — a near-black studio, lit like a product shot. Silver type, warm cream + cool periwinkle light, one peach glow for action. Reference bar: getlayers.ai.

## Theme

Near-black canvas (`#060606`), never flat: depth comes from stacked low-opacity layers (radial light, sheen, rim, grain) rather than strong colour. Every accent is *light*, not paint — it glows, sheens or rims; it is almost never a solid fill. Applies site-wide (front page, blog index, single, archive).

## Color

| Token | Value | Role |
|---|---|---|
| `--color-canvas` | `#060606` | Page background |
| `--color-surface` | `#0d0d0d` | Panels, cards |
| `--color-surface-2` | `#141414` | Hover / raised |
| `--color-stage` | `#0b0b0b` | Hero / CTA stage base |
| `--color-ink` | `#f5f5f5` | Primary text |
| `--color-muted` | `#a6a6a6` | Secondary text (AA on canvas) |
| `--color-faint` | `#868686` | Labels, metadata only |
| `--color-line` / `-hover` | `#ffffff14` / `#ffffff29` | Hairlines |
| `--color-cream` | `#feeae1` | Warm light, status, "live" |
| `--color-peri` | `#c0cef2` | Cool light |
| `--color-peach` | `#ffa582` | CTA glow only |
| `--premium` | platinum → cream → periwinkle | Rare accent words (`.text-premium`) |

## Typography

- **Display:** General Sans (Fontshare), weight **300** for headlines, 400 for sub-heads. Tight tracking (`-0.04em` to `-0.055em` on large sizes), leading ≈0.9.
- **Body:** Onest 300–600.
- **Labels / code:** Geist Mono, small (11–12px), `--faint`/`--muted`. Keeps the developer voice (`~/ how-i-work`, `$ ls …`) without shouting.
- Headlines use `.title-sheen` (122° ink → muted, `background-clip:text`). Accent spans inside keep their colour; `.keep` holds a phrase on one line inside a sheen heading.

## Surfaces

- `.stage` — 24px radius frame with two soft radial lights; holds hero, contact, blog headers.
- `.panel` — 16px card: surface + top sheen + inner rim.
- `.hairline-grid` — cells divided by 1px lines (stats, workflow, stack).
- `.glass` — blur(24) saturate(160%) + sheen + warm/cool aurora + rim + deep shadow. Small floating elements only (chips, badges, prompt line).

## Components

- **Buttons:** `.btn-primary` — translucent pill, peach glow welling from below, cool glow from the left, 1px gradient hairline (mask xor). `.btn-ghost` — quieter twin.
- **Cursor-lit edge:** `.glow-edge` (platinum) / `.glow-edge--warm` (peach) — radial blob at `--gx/--gy`, clipped to a 1.5px ring. Hover-capable pointers only.
- **Status pip:** cream dot with expanding ring.
- **Footer wordmark:** oversized "haytham" fading cream → periwinkle → nothing into the floor.

## Motion

- **Hero field:** `src/scripts/heroShader.js` — WebGL2 fullscreen triangle; fbm height field refracts a drifting gradient with RGB dispersion, caustics from curvature, warm-left/cool-right tint, grain + dither. Pointer follows through a spring chain. Paused off-screen / hidden tab, DPR 1, reduced motion = one still frame.
- **Hero reveal:** prompt types → name lines de-blur and rise (whole lines, so the sheen survives) → supporting copy follows. `expo.out` throughout.
- **Scroll:** sections rise + de-blur on enter; timeline rail fills (cream → platinum → periwinkle) and nodes light cream.
- **Reduced motion / mobile:** all content visible, no smoothing; shader still or native.

## Layout

- `max-w-7xl`, gutter `clamp(1rem, 3vw, 1.5rem)`, section rhythm `clamp(5rem, 11vw, 8.5rem)`.
- Section header pattern: mono eyebrow with premium dot → light display headline; a 5-col intro paragraph sits opposite on desktop.
- No horizontal scroll at 375px; type clamps so headlines never overflow.
