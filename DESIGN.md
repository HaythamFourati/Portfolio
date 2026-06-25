# Design

Visual system for the Haytham Fourati portfolio. Register: **brand**. Aesthetic lane: **AI Agent Console** — a developer's terminal/agent environment, inhabited and precise. Evolves the existing lime + violet identity onto a dark canvas.

## Theme

Dark, near-black canvas that reads as a real working terminal — not a "dark mode toggle". Surfaces are tinted slightly toward violet (cool), not neutral gray. Lime is the live/active/AI signal (cursor, status, shipping). Violet is the secondary structural accent. Sharp 1px hairline borders and a faint dot/line grid carry the "console" feel; no decorative gradient blobs, no glass.

## Color

OKLCH, with hex fallbacks. Verified contrast against `--canvas`.

| Token | OKLCH | Hex | Role |
|---|---|---|---|
| `--canvas` | `oklch(0.17 0.012 280)` | `#0B0B12` | Page background (near-black, faint violet tint) |
| `--surface` | `oklch(0.21 0.014 280)` | `#14141C` | Panels, console window body |
| `--surface-2` | `oklch(0.25 0.016 280)` | `#1C1C26` | Raised rows, inputs, hover |
| `--line` | `oklch(0.30 0.015 280)` | `#2A2A36` | Hairline borders, grid |
| `--ink` | `oklch(0.97 0.004 280)` | `#F4F4F7` | Primary text (≈16:1) |
| `--muted` | `oklch(0.74 0.012 280)` | `#A7A7B4` | Secondary text (≈6.4:1, AA) |
| `--faint` | `oklch(0.56 0.012 280)` | `#75757F` | Tertiary / comments (large/non-essential only) |
| `--lime` | `oklch(0.88 0.21 128)` | `#B6F23D` | Primary accent: cursor, live status, AI signal |
| `--lime-ink` | `oklch(0.22 0.05 128)` | `#16210A` | Text on lime fills |
| `--violet` | `oklch(0.68 0.19 295)` | `#9A6BFF` | Secondary accent: structure, links, prompt label |

Rules: lime and violet are accents, never large fills except deliberate CTA/marker moments. Body text is `--ink` or `--muted` only — `--faint` never for essential reading. No `background-clip:text` gradient text. No glassmorphism as default.

## Typography

Two families on a sans + mono contrast axis (both off the impeccable reflex-reject list; both register-appropriate for an AI-native developer).

- **Display / body:** `Geist` (neo-grotesque sans). Weights 300–700. Carries headlines and prose.
- **Chrome / labels / code:** `JetBrains Mono`. Terminal prompts, file paths, status text, section markers, metadata, the typed hero line. Mono is *functional* here (it IS a console), not decoration.

Scale: fluid `clamp()`, ratio ≥1.25. Display heading ceiling `clamp(2.5rem, 6vw, 5.5rem)` (≤6rem cap). Letter-spacing on large display `-0.03em` (≥ -0.04em floor). `text-wrap: balance` on h1–h3, `pretty` on prose. Mono labels uppercase only for short tags, tracked `+0.04em`.

Headline voice: lowercase or sentence-case statements, not ALL-CAPS shouting. Mono used for the "command" framing around them.

## Components

- **Console window:** the hero. `--surface` panel, hairline border, a top bar with a window label (`haytham@dev — portfolio`) and minimal traffic dots restyled as status pips. Body holds a `>` prompt line that types a request, a streaming "▸ generating" line, then the resolved identity.
- **Prompt line / command rows:** mono, `--violet` prompt glyph, `--lime` blinking cursor (`▍`).
- **Work entries:** NOT identical cards. A terminal-style `ls selected-work/` listing — rows with index, name, domain, tags — that expand/preview an image on hover/focus; one featured entry gets a larger panel.
- **Stack manifest:** capabilities as a grouped, dense mono "manifest" (category → tools), not 6 identical rounded-icon cards. AI tooling group is first-class.
- **Timeline:** vertical rail with lime scroll-progress fill (kept from prior build, restyled dark). Nodes are pips; active node lights lime.
- **Status pill:** lime pulse dot + `available` text, mono.
- **Buttons:** primary = solid `--lime` with `--lime-ink` text, square-ish (`rounded-md`); secondary = hairline-bordered ghost on canvas.

## Layout

- Max width `~1200px` (`max-w-6xl`/`7xl`), generous gutters, fluid `clamp()` section padding for rhythm (tight groupings inside, generous separations between).
- Asymmetry encouraged: hero console offset, work listing left-weighted with preview right.
- Faint dot-grid / scanline texture on canvas via CSS background, very low contrast.
- Responsive: console reflows to single column; work listing collapses to stacked rows with inline thumbnails; type clamps down so headlines never overflow (test every breakpoint).
- Semantic z-index scale (base → sticky header → mobile menu → cursor-follow effects).

## Motion

GSAP (already in stack: ScrollTrigger, ScrollSmoother, SplitText) + Lenis-style smooth via ScrollSmoother. Ease-out exponential curves; no bounce/elastic except a single deliberate node pop.

- **Hero (signature, one orchestrated load):** prompt text types in (mono, blinking cursor) → `▸ generating…` flickers → identity block reveals (name de-blurs / chars rise), status pip starts pulsing, "shipping" meter fills. This is the wow moment and the proof of concept.
- Scroll: section content rises + fades on enter (varied, not one uniform reflex per section); work rows stagger; timeline rail fills on scrub.
- Premium materials allowed where they help: subtle blur-in on the name, clip-path reveal on work thumbnails, lime glow on active status.
- **Reduced motion:** typed hero renders fully resolved instantly (final text shown, no typing), cursor static, all content visible; scroll reveals become instant. ScrollSmoother disabled (already handled in CSS/JS for mobile + reduced-motion).
