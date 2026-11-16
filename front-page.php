<?php
/**
 * The front page template file — Cinematic Mono redesign.
 *
 * @package Haytham-Fourati-Portfolio
 */

$arrow_right = '<svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.75" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>';
$arrow_out   = '<svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.75" d="M7 17L17 7M17 7H8M17 7V16"/></svg>';

get_header(); ?>

<main class="bg-canvas text-ink">

  <!-- ============== HERO ============== -->
  <section id="hero" class="relative px-[var(--gutter)] pt-2">
    <div class="stage max-w-7xl mx-auto min-h-[calc(100svh-5rem)] flex items-center">
      <!-- Liquid-glass WebGL field (src/scripts/heroShader.js) + readability scrim -->
      <canvas class="hero-shader" aria-hidden="true"></canvas>
      <div class="hero-scrim" aria-hidden="true"></div>

      <div class="relative w-full grid lg:grid-cols-12 gap-12 lg:gap-10 items-center px-5 sm:px-10 lg:px-14 py-14 lg:py-20">

        <!-- Copy -->
        <div class="lg:col-span-7 order-2 lg:order-1">

          <!-- Typed prompt -->
          <p class="glass inline-flex flex-wrap items-baseline gap-x-2 font-mono text-xs sm:text-[0.8rem] rounded-2xl sm:rounded-full px-4 py-2">
            <span class="text-muted shrink-0">haytham@dev</span><span class="text-faint shrink-0">:~$</span>
            <span class="text-ink">
              <span data-typed data-text="ship production sites 10× faster — with AI">ship production sites 10× faster — with AI</span><span class="console-cursor" data-cursor aria-hidden="true"></span>
            </span>
          </p>

          <h1 class="mt-8 w-fit flex flex-col font-display font-light text-[clamp(3.5rem,9.5vw,8.25rem)] leading-[0.88] tracking-[-0.05em]">
            <span data-hero-line class="title-sheen whitespace-nowrap">Haytham</span>
            <span data-hero-line class="title-sheen relative whitespace-nowrap">Fourati<span class="hero-mark" aria-hidden="true"><span class="hero-mark-dot"></span>AI-native</span></span>
          </h1>

          <p data-hero class="mt-8 flex flex-wrap items-center gap-x-3 gap-y-2 font-display text-xl sm:text-2xl font-normal tracking-[-0.015em] text-ink">
            Front-End &amp; WordPress engineer.
            <span class="min-[1100px]:sr-only inline-flex items-center gap-2 rounded-full border border-line bg-white/[0.03] px-3 py-1 font-mono text-xs text-cream">
              <span class="w-1.5 h-1.5 rounded-full bg-[image:var(--premium)]"></span>AI-native
            </span>
          </p>

          <p data-hero class="mt-4 text-base sm:text-[1.075rem] text-muted max-w-xl leading-relaxed">
            I pair with AI to ship production-grade websites in a fraction of the time — then bring the
            architecture, taste, and the final 20% that actually makes it to production.
          </p>

          <!-- CTAs -->
          <div data-hero class="mt-10 flex flex-wrap gap-3">
            <a href="#work" class="btn btn-primary glow-edge glow-edge--warm">
              View the work <?php echo $arrow_right; ?>
            </a>
            <a href="#contact" class="btn btn-ghost">
              Let's talk
            </a>
          </div>
        </div>

        <!-- Portrait -->
        <div data-hero class="lg:col-span-5 order-1 lg:order-2 w-full max-w-sm sm:max-w-md mx-auto lg:max-w-none lg:pl-6">
          <figure class="relative">
            <div class="glow-edge relative rounded-[var(--radius-stage)] border border-line bg-surface overflow-hidden shadow-[var(--rim),0_40px_100px_-40px_#000]">
              <!-- Window bar -->
              <div class="flex items-center gap-3 px-4 py-3 border-b border-line bg-[image:var(--sheen)]">
                <span class="flex gap-1.5" aria-hidden="true">
                  <span class="w-2 h-2 rounded-full bg-white/15"></span>
                  <span class="w-2 h-2 rounded-full bg-white/15"></span>
                  <span class="w-2 h-2 rounded-full bg-[image:var(--premium)]"></span>
                </span>
                <span class="font-mono text-[11px] text-faint truncate">~/portfolio/haytham.webp</span>
              </div>
              <img src="<?php echo esc_url(get_theme_file_uri('/images/headshot-studio.webp')); ?>"
                   alt="Haytham Fourati, front-end developer" width="1122" height="1402"
                   class="block w-full aspect-[4/5] object-cover object-top" fetchpriority="high">
              <!-- Blend the light studio backdrop into the dark frame -->
              <div class="pointer-events-none absolute inset-x-0 bottom-0 h-2/5 bg-gradient-to-t from-canvas/80 via-canvas/25 to-transparent" aria-hidden="true"></div>
              <div class="pointer-events-none absolute inset-0 shadow-[inset_0_0_80px_#06060666]" aria-hidden="true"></div>
            </div>

            <!-- Floating status chip -->
            <figcaption class="glass absolute -bottom-5 left-4 sm:-left-8 inline-flex items-center gap-2.5 rounded-full px-4 py-2.5 font-mono text-xs text-muted">
              <span class="pip" aria-hidden="true"></span>
              status: <span class="text-cream">available for hire</span>
            </figcaption>

            <!-- Floating location chip -->
            <span class="glass absolute top-16 -right-3 sm:-right-7 rounded-full px-3.5 py-2 font-mono text-[11px] text-muted">
              📍 remote · worldwide
            </span>
          </figure>
        </div>
      </div>
    </div>

    <!-- Stats strip -->
    <dl data-hero class="max-w-7xl mx-auto mt-4 grid grid-cols-3 hairline-grid">
      <div class="px-4 sm:px-8 py-5">
        <dt class="font-mono text-[11px] text-faint">experience</dt>
        <dd class="mt-1.5 font-display text-base sm:text-2xl font-normal tracking-[-0.02em] text-ink">5+ yrs</dd>
      </div>
      <div class="px-4 sm:px-8 py-5">
        <dt class="font-mono text-[11px] text-faint">focus</dt>
        <dd class="mt-1.5 font-display text-base sm:text-2xl font-normal tracking-[-0.02em] text-ink">Custom WP</dd>
      </div>
      <div class="px-4 sm:px-8 py-5">
        <dt class="font-mono text-[11px] text-faint">speaks</dt>
        <dd class="mt-1.5 font-display text-base sm:text-2xl font-normal tracking-[-0.02em] text-premium w-fit">EN · AR · FR</dd>
      </div>
    </dl>
  </section>

  <!-- ============== AI WORKFLOW ============== -->
  <section id="workflow" class="relative px-[var(--gutter)] pt-[var(--section-gap)]">
    <div class="max-w-7xl mx-auto">

      <div class="grid lg:grid-cols-12 gap-x-10 gap-y-6 items-end">
        <div class="lg:col-span-7">
          <p class="eyebrow mb-6">~/ how-i-work</p>
          <h2 class="title-sheen font-display font-light text-[clamp(2.4rem,5.5vw,4.5rem)] leading-[0.98] tracking-[-0.04em]">
            The <span class="keep">AI-native</span> workflow.<br><span class="text-faint">Days of boilerplate become hours.</span>
          </h2>
        </div>
        <p class="lg:col-span-5 text-[1.05rem] text-muted leading-relaxed">
          AI is my pair programmer, not my replacement. It clears the busywork — scaffolding, boilerplate,
          first drafts — so I spend my hours on architecture, performance, and the design decisions that
          a recruiter actually notices. <span class="text-ink">The speed is the tooling. The taste is hand-made.</span>
        </p>
      </div>

      <!-- Pipeline -->
      <ol class="glow-edge mt-16 hairline-grid sm:grid-cols-2 lg:grid-cols-5">
        <?php
        $stages = [
          ['n' => '01', 'k' => 'brief',    't' => 'Understand', 'd' => 'Goals, users, constraints. The part no model can guess.'],
          ['n' => '02', 'k' => 'prompt',   't' => 'Direct',     'd' => 'Translate intent into precise prompts and scaffolds.'],
          ['n' => '03', 'k' => 'generate', 't' => 'Generate',   'd' => 'AI drafts components, copy and boilerplate in minutes.'],
          ['n' => '04', 'k' => 'craft',    't' => 'Craft',      'd' => 'I architect, refactor and design the 20% that matters.'],
          ['n' => '05', 'k' => 'ship',     't' => 'Ship',       'd' => 'Fast, accessible, on-brand — tested and in production.'],
        ];
        foreach ($stages as $i => $s) :
          $mine = $i === 0 || $i === 3;
        ?>
          <li class="group relative p-6 lg:p-7 lg:min-h-[13rem] flex flex-col transition-colors duration-200 hover:!bg-surface-2 <?php echo $mine ? '!bg-[image:var(--aurora),linear-gradient(var(--color-surface),var(--color-surface))]' : ''; ?>">
            <div class="flex items-center justify-between mb-6 lg:mb-10">
              <span class="font-mono text-xs <?php echo $mine ? 'text-premium' : 'text-faint'; ?>"><?php echo $s['n']; ?></span>
              <span class="font-mono text-[11px] text-faint group-hover:text-muted transition-colors"><?php echo $s['k']; ?>()</span>
            </div>
            <h3 class="mt-auto font-display text-[1.35rem] font-normal tracking-[-0.02em] text-ink mb-2"><?php echo $s['t']; ?></h3>
            <p class="text-sm text-muted leading-relaxed"><?php echo $s['d']; ?></p>
          </li>
        <?php endforeach; ?>
      </ol>

      <p class="mt-6 font-mono text-xs text-faint">
        <span class="text-cream">▸</span> stages 01 &amp; 04 are where I live — the model owns the typing, I own the judgment.
      </p>
    </div>
  </section>

  <!-- ============== SELECTED WORK ============== -->
  <section id="work" class="relative px-[var(--gutter)] pt-[var(--section-gap)]">
    <div class="max-w-7xl mx-auto">

      <div class="flex flex-wrap items-end justify-between gap-6 mb-12">
        <div>
          <p class="eyebrow mb-6">~/ selected-work</p>
          <h2 class="title-sheen font-display font-light text-[clamp(2.4rem,5.5vw,4.5rem)] leading-[0.98] tracking-[-0.04em]">
            Shipped &amp; live.
          </h2>
        </div>
        <p class="font-mono text-xs text-faint">$ ls selected-work/ <span class="text-muted">— 7 results</span></p>
      </div>

      <!-- Featured project -->
      <a href="https://localvocalmarketing.com/" target="_blank" rel="noopener"
         class="glow-edge group block relative rounded-[var(--radius-stage)] overflow-hidden border border-line bg-surface">
        <div class="image-reveal-box w-full aspect-[1920/846] border-b border-line">
          <img src="<?php echo esc_url(get_theme_file_uri('/images/Local-Vocal-Marketing.webp')); ?>"
               alt="Local Vocal Marketing homepage — Maryland web design and local SEO agency, with a Google search and map-pack mockup"
               width="1920" height="846" class="reveal-img object-top" loading="lazy">
          <div class="uncover"><div class="uncover_slice"></div><div class="uncover_slice"></div><div class="uncover_slice"></div></div>
        </div>
        <div class="grid lg:grid-cols-12 gap-x-10 gap-y-6 p-6 sm:p-10 items-end">
          <div class="lg:col-span-8">
            <div class="flex flex-wrap items-center gap-3 font-mono text-[11px] text-faint mb-4">
              <span class="glass rounded-full px-3 py-1 text-cream">[ featured ]</span>
              <span>agency / web design &amp; local SEO</span>
            </div>
            <h3 class="font-display text-3xl sm:text-5xl font-light tracking-[-0.035em] text-ink mb-3">Local Vocal Marketing</h3>
            <p class="text-muted max-w-2xl">
              The flagship site for the Maryland agency I develop for, built as a custom WordPress theme —
              a live Google-search hero, a guided free-review intake flow, and local-SEO
              structured data — so the agency's own site sells what it does.
            </p>
            <ul class="mt-6 flex flex-wrap gap-2 font-mono text-[11px]">
              <li class="rounded-full border border-line px-3 py-1 text-muted">role: WordPress developer</li>
              <li class="rounded-full border border-line px-3 py-1 text-muted">custom WP theme</li>
              <li class="rounded-full border border-line px-3 py-1 text-muted">WebGL shader</li>
              <li class="rounded-full border border-line px-3 py-1 text-muted">intake flow</li>
              <li class="rounded-full border border-line px-3 py-1 text-muted">schema / local SEO</li>
            </ul>
          </div>
          <div class="lg:col-span-4 lg:justify-self-end">
            <span class="btn btn-primary">
              localvocalmarketing.com <?php echo $arrow_out; ?>
            </span>
          </div>
        </div>
      </a>

      <!-- Remaining work -->
      <ul class="glow-edge mt-4 panel overflow-hidden divide-y divide-line">
        <?php
        $projects = [
          ['n' => '02', 'name' => 'Success Circles',         'tag' => 'coaching',      'url' => 'https://successcircles.com',        'host' => 'successcircles.com',       'desc' => 'An advisory community for established entrepreneurs — editorial design built to turn visitors into members.'],
          ['n' => '03', 'name' => 'Precision Aesthetics MD', 'tag' => 'aesthetics',    'url' => 'https://precisionaestheticsmd.com', 'host' => 'precisionaestheticsmd.com', 'desc' => 'A sleek, conversion-focused site for a medical spa with a fast, trustworthy booking experience.'],
          ['n' => '04', 'name' => 'Kidzz Kreations',        'tag' => 'entertainment', 'url' => 'https://kidzzkreations.com/',        'host' => 'kidzzkreations.com',     'desc' => "Turning kids' party dreams into reality with playful, memorable entertainment."],
          ['n' => '05', 'name' => 'Care Giving Angels of MD','tag' => 'healthcare',    'url' => 'https://caregivingangelsofmd.com/', 'host' => 'caregivingangelsofmd.com','desc' => 'A compassionate, trust-first website for a home care agency.'],
          ['n' => '06', 'name' => 'ADHD Telehealth Testing', 'tag' => 'telehealth',    'url' => 'https://adhdtestcalifornia.com/',   'host' => 'adhdtestcalifornia.com',  'desc' => 'A friendly, accessible platform for ADHD testing across California.'],
          ['n' => '07', 'name' => 'Cullen Burke',            'tag' => 'legal',         'url' => 'https://www.cullenburke.com/',      'host' => 'cullenburke.com',        'desc' => 'A strong, authoritative presence for a criminal defense lawyer.'],
        ];
        foreach ($projects as $p) : ?>
          <li>
            <a href="<?php echo esc_url($p['url']); ?>" target="_blank" rel="noopener"
               class="work-row flex items-center gap-4 sm:gap-8 px-5 sm:px-8 py-6">
              <span class="font-mono text-[11px] text-faint w-6 shrink-0"><?php echo $p['n']; ?></span>
              <span class="min-w-0 flex-1">
                <span class="block font-display text-xl sm:text-2xl font-normal tracking-[-0.02em] text-ink"><?php echo $p['name']; ?></span>
                <span class="block mt-1 text-sm text-muted truncate"><?php echo $p['desc']; ?></span>
              </span>
              <span class="hidden md:inline-flex rounded-full border border-line px-3 py-1 font-mono text-[11px] text-faint shrink-0"><?php echo $p['tag']; ?></span>
              <span class="hidden lg:inline font-mono text-xs text-muted shrink-0 w-52 text-right truncate"><?php echo $p['host']; ?></span>
              <span class="work-arrow grid place-items-center w-10 h-10 rounded-full border border-line text-faint shrink-0"><?php echo $arrow_right; ?></span>
            </a>
          </li>
        <?php endforeach; ?>
      </ul>
    </div>
  </section>

  <!-- ============== STACK MANIFEST ============== -->
  <section id="stack" class="relative px-[var(--gutter)] pt-[var(--section-gap)]">
    <div class="max-w-7xl mx-auto">
      <div class="grid lg:grid-cols-12 gap-x-10 gap-y-6 items-end mb-14">
        <div class="lg:col-span-7">
          <p class="eyebrow mb-6">~/ stack</p>
          <h2 class="title-sheen font-display font-light text-[clamp(2.4rem,5.5vw,4.5rem)] leading-[0.98] tracking-[-0.04em]">
            The toolchain.
          </h2>
        </div>
        <p class="lg:col-span-5 text-[1.05rem] text-muted leading-relaxed">
          A modern WordPress &amp; front-end stack, accelerated by an AI layer I drive every day.
        </p>
      </div>

      <div class="glow-edge hairline-grid">
        <?php
        $groups = [
          ['k' => 'ai/',          'hi' => true,  'items' => ['Claude', 'ChatGPT', 'Cursor', 'Midjourney', 'Make.com'], 'note' => 'my force multiplier'],
          ['k' => 'wordpress/',   'hi' => false, 'items' => ['Custom Themes', 'Elementor', 'UX Builder', 'ACF', 'GitHub'], 'note' => ''],
          ['k' => 'frontend/',    'hi' => false, 'items' => ['React', 'Tailwind CSS', 'GSAP', 'JavaScript', 'HTML / CSS'], 'note' => ''],
          ['k' => 'performance/', 'hi' => false, 'items' => ['Core Web Vitals', 'Yoast SEO', 'Rank Math', 'PageSpeed'], 'note' => ''],
          ['k' => 'ops & security/', 'hi' => false, 'items' => ['SiteGround', 'InMotion', 'Hostinger', 'Wordfence', 'Sucuri', 'SSL'], 'note' => ''],
        ];
        foreach ($groups as $g) : ?>
          <div class="grid sm:grid-cols-[240px_1fr] gap-x-8 gap-y-4 px-6 sm:px-8 py-7 <?php echo $g['hi'] ? '!bg-[image:var(--aurora),linear-gradient(var(--color-surface),var(--color-surface))]' : ''; ?>">
            <div class="flex flex-col gap-1">
              <span class="font-mono text-sm <?php echo $g['hi'] ? 'text-premium w-fit' : 'text-ink'; ?>"><?php echo $g['k']; ?></span>
              <?php if ($g['note']) : ?><span class="font-mono text-[11px] text-faint">// <?php echo $g['note']; ?></span><?php endif; ?>
            </div>
            <ul class="flex flex-wrap gap-2">
              <?php foreach ($g['items'] as $item) : ?>
                <li class="rounded-full border px-3.5 py-1.5 text-sm <?php echo $g['hi'] ? 'border-cream/25 text-cream bg-cream/[0.04] shadow-[inset_0_1px_0_0_#feeae11a]' : 'border-line text-muted bg-white/[0.02]'; ?>"><?php echo $item; ?></li>
              <?php endforeach; ?>
            </ul>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <!-- ============== EXPERIENCE TIMELINE ============== -->
  <section id="experience" class="relative px-[var(--gutter)] pt-[var(--section-gap)]">
    <div class="max-w-5xl mx-auto">
      <div class="text-center mb-28">
        <p class="eyebrow justify-center mb-6">~/ git-log</p>
        <h2 class="title-sheen font-display font-light text-[clamp(2.4rem,5.5vw,4.5rem)] leading-[0.98] tracking-[-0.04em]">
          Commit history.
        </h2>
      </div>

      <div class="timeline-container relative">
        <div class="timeline-line absolute left-2 md:left-1/2 top-0 bottom-0 w-px bg-line md:-translate-x-1/2">
          <div class="timeline-progress absolute top-0 left-0 w-full bg-gradient-to-b from-cream via-platinum to-peri shadow-[0_0_12px_#feeae166]" style="height:0%;"></div>
        </div>

        <div class="space-y-16 md:space-y-28">

          <!-- 1 · current -->
          <div class="timeline-item relative flex flex-col md:flex-row md:items-center">
            <div class="hidden md:block md:w-1/2 md:pr-16 md:text-right">
              <div class="timeline-content">
                <span class="inline-block font-mono text-[11px] text-cream mb-3">● HEAD · current</span>
                <h3 class="font-display text-[1.75rem] font-normal tracking-[-0.025em] text-ink mb-1">WordPress Developer</h3>
                <p class="font-mono text-xs text-muted mb-1">Local Vocal Marketing</p>
                <p class="text-sm text-faint mb-4">Baltimore County, Maryland</p>
                <ul class="text-sm text-muted space-y-1.5">
                  <li>Built &amp; maintained WordPress sites on the Flatsome theme</li>
                  <li>Extended functionality with HTML, CSS &amp; JavaScript</li>
                  <li>Implemented SEO strategies for organic rankings</li>
                </ul>
              </div>
            </div>
            <div class="timeline-node absolute left-2 md:left-1/2 md:-translate-x-1/2 -translate-x-1/2 w-3.5 h-3.5 bg-cream rounded-full ring-4 ring-canvas shadow-[0_0_16px_#feeae1aa] z-10"></div>
            <div class="timeline-year absolute left-6 md:left-1/2 md:-translate-x-1/2 -top-9 md:-top-11">
              <span class="font-mono text-[11px] bg-cream text-canvas font-medium px-3 py-1.5 rounded-full whitespace-nowrap">2019 — present</span>
            </div>
            <div class="md:w-1/2 md:pl-16 pl-10">
              <div class="timeline-content md:hidden">
                <span class="inline-block font-mono text-[11px] text-cream mb-3">● HEAD · current</span>
                <h3 class="font-display text-2xl font-normal tracking-[-0.025em] text-ink mb-1">WordPress Developer</h3>
                <p class="font-mono text-xs text-muted mb-1">Local Vocal Marketing</p>
                <p class="text-sm text-faint mb-3">Baltimore County, Maryland</p>
                <ul class="text-sm text-muted space-y-1">
                  <li>Built &amp; maintained WordPress sites</li>
                  <li>Extended functionality with HTML, CSS, JS</li>
                  <li>Implemented SEO strategies</li>
                </ul>
              </div>
            </div>
          </div>

          <!-- 2 -->
          <div class="timeline-item relative flex flex-col md:flex-row md:items-center">
            <div class="hidden md:block md:w-1/2 md:pr-16"></div>
            <div class="timeline-node absolute left-2 md:left-1/2 md:-translate-x-1/2 -translate-x-1/2 w-3.5 h-3.5 bg-[#2a2a2a] rounded-full ring-4 ring-canvas z-10"></div>
            <div class="timeline-year absolute left-6 md:left-1/2 md:-translate-x-1/2 -top-9 md:-top-11">
              <span class="font-mono text-[11px] bg-surface-2 border border-line text-muted px-3 py-1.5 rounded-full whitespace-nowrap">2019 — 2022</span>
            </div>
            <div class="md:w-1/2 md:pl-16 pl-10">
              <div class="timeline-content">
                <h3 class="font-display text-2xl md:text-[1.75rem] font-normal tracking-[-0.025em] text-ink mb-1">WordPress Expert</h3>
                <p class="font-mono text-xs text-muted mb-3">Fiverr · Freelance</p>
                <ul class="text-sm text-muted space-y-1.5">
                  <li>Designed &amp; built custom WordPress websites</li>
                  <li>Optimized for speed, SEO &amp; performance</li>
                  <li>Managed migrations and security hardening</li>
                  <li>Worked with international clients, fully remote</li>
                </ul>
              </div>
            </div>
          </div>

          <!-- 3 -->
          <div class="timeline-item relative flex flex-col md:flex-row md:items-center">
            <div class="hidden md:block md:w-1/2 md:pr-16 md:text-right">
              <div class="timeline-content">
                <h3 class="font-display text-[1.75rem] font-normal tracking-[-0.025em] text-ink mb-1">WordPress Developer</h3>
                <p class="font-mono text-xs text-muted mb-1">POLYSERVICE</p>
                <p class="text-sm text-faint mb-4">Tunis, Tunisia</p>
                <ul class="text-sm text-muted space-y-1.5">
                  <li>Developed &amp; maintained business websites</li>
                  <li>Optimized performance and troubleshot issues</li>
                  <li>Implemented SEO best practices</li>
                </ul>
              </div>
            </div>
            <div class="timeline-node absolute left-2 md:left-1/2 md:-translate-x-1/2 -translate-x-1/2 w-3.5 h-3.5 bg-[#2a2a2a] rounded-full ring-4 ring-canvas z-10"></div>
            <div class="timeline-year absolute left-6 md:left-1/2 md:-translate-x-1/2 -top-9 md:-top-11">
              <span class="font-mono text-[11px] bg-surface-2 border border-line text-muted px-3 py-1.5 rounded-full whitespace-nowrap">2018 — 2019</span>
            </div>
            <div class="md:w-1/2 md:pl-16 pl-10">
              <div class="timeline-content md:hidden">
                <h3 class="font-display text-2xl font-normal tracking-[-0.025em] text-ink mb-1">WordPress Developer</h3>
                <p class="font-mono text-xs text-muted mb-1">POLYSERVICE</p>
                <p class="text-sm text-faint mb-3">Tunis, Tunisia</p>
                <ul class="text-sm text-muted space-y-1">
                  <li>Developed business websites</li>
                  <li>Optimized performance</li>
                  <li>Implemented SEO best practices</li>
                </ul>
              </div>
            </div>
          </div>

          <!-- 4 -->
          <div class="timeline-item relative flex flex-col md:flex-row md:items-center">
            <div class="hidden md:block md:w-1/2 md:pr-16"></div>
            <div class="timeline-node absolute left-2 md:left-1/2 md:-translate-x-1/2 -translate-x-1/2 w-3.5 h-3.5 bg-[#2a2a2a] rounded-full ring-4 ring-canvas z-10"></div>
            <div class="timeline-year absolute left-6 md:left-1/2 md:-translate-x-1/2 -top-9 md:-top-11">
              <span class="font-mono text-[11px] bg-surface-2 border border-line text-muted px-3 py-1.5 rounded-full whitespace-nowrap">2016 — 2018</span>
            </div>
            <div class="md:w-1/2 md:pl-16 pl-10">
              <div class="timeline-content">
                <h3 class="font-display text-2xl md:text-[1.75rem] font-normal tracking-[-0.025em] text-ink mb-1">Data Entry Operator</h3>
                <p class="font-mono text-xs text-muted mb-3">Online Review Machine</p>
                <ul class="text-sm text-muted space-y-1.5">
                  <li>Assisted with online review management</li>
                  <li>Provided customer support</li>
                  <li>Ensured accurate documentation</li>
                </ul>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </section>

  <!-- ============== ABOUT ============== -->
  <section id="about" class="relative px-[var(--gutter)] pt-[var(--section-gap)]">
    <div class="max-w-7xl mx-auto">
      <p class="eyebrow mb-10">~/ whoami</p>

      <div class="grid lg:grid-cols-12 gap-12 lg:gap-16 items-start">

        <!-- Image + languages -->
        <div class="lg:col-span-5 space-y-10">
          <div class="relative">
            <div class="glow-edge rounded-[var(--radius-stage)] overflow-hidden border border-line">
              <img src="<?php echo esc_url(get_theme_file_uri('/images/profile-picture-number2.jpg')); ?>"
                   alt="Haytham Fourati, front-end developer" class="w-full h-auto" loading="lazy">
            </div>
            <div class="glass absolute -bottom-6 -right-3 sm:-right-6 px-5 py-4 rounded-[var(--radius-card)]">
              <div class="font-display text-4xl font-light tracking-[-0.04em] text-premium leading-none">5+</div>
              <div class="font-mono text-[11px] text-muted mt-1.5">years exp.</div>
            </div>
            <div class="glass absolute top-4 left-4 px-3.5 py-1.5 rounded-full font-mono text-[11px] text-muted">
              📍 remote · worldwide
            </div>
          </div>

          <div class="panel p-6">
            <h3 class="font-mono text-xs text-faint mb-4">// languages</h3>
            <ul class="flex flex-wrap gap-2">
              <li class="flex items-center gap-2 border border-line bg-white/[0.02] px-3.5 py-1.5 rounded-full text-sm"><span>🇺🇸</span> English <span class="font-mono text-[11px] text-cream">fluent</span></li>
              <li class="flex items-center gap-2 border border-line bg-white/[0.02] px-3.5 py-1.5 rounded-full text-sm"><span>🇹🇳</span> Arabic <span class="font-mono text-[11px] text-cream">native</span></li>
              <li class="flex items-center gap-2 border border-line bg-white/[0.02] px-3.5 py-1.5 rounded-full text-sm"><span>🇫🇷</span> French <span class="font-mono text-[11px] text-peri">good</span></li>
              <li class="flex items-center gap-2 border border-line bg-white/[0.02] px-3.5 py-1.5 rounded-full text-sm"><span>🇩🇪</span> German <span class="font-mono text-[11px] text-faint">learning</span></li>
            </ul>
          </div>
        </div>

        <!-- Bio -->
        <div class="lg:col-span-7 space-y-8 lg:pt-4">
          <h2 class="title-sheen font-display font-light text-[clamp(2rem,4.2vw,3.4rem)] leading-[1.04] tracking-[-0.035em]">
            I build clean, fast websites — and I let AI handle the parts that don't need a human.
          </h2>
          <p class="text-[1.075rem] text-muted leading-relaxed">
            I'm a front-end WordPress developer focused on custom theme development — blending elegant design
            with performance and usability. AI is woven into how I work: it drafts, I direct. That means more
            iterations, faster delivery, and more time spent on the decisions that make a site genuinely good.
          </p>

          <div class="grid sm:grid-cols-2 gap-3">
            <?php
            $points = [
              ['t' => 'Fast & optimized', 'd' => 'SEO-friendly, lightning-fast builds', 'hi' => true],
              ['t' => 'AI-augmented',     'd' => 'More shipped, in less time', 'hi' => false],
              ['t' => 'Clear comms',      'd' => 'Built for long-term partnerships', 'hi' => false],
              ['t' => 'Clean code',       'd' => 'Scalable &amp; maintainable', 'hi' => true],
            ];
            foreach ($points as $pt) : ?>
              <div class="glow-edge panel flex items-start gap-3 p-5">
                <span class="font-mono text-xs mt-1 <?php echo $pt['hi'] ? 'text-cream' : 'text-peri'; ?>">▸</span>
                <div>
                  <h4 class="font-display text-[1.1rem] font-normal tracking-[-0.015em] text-ink"><?php echo $pt['t']; ?></h4>
                  <p class="text-sm text-muted mt-0.5"><?php echo $pt['d']; ?></p>
                </div>
              </div>
            <?php endforeach; ?>
          </div>

          <div class="panel flex items-center gap-4 p-5">
            <span class="text-2xl">☕</span>
            <p class="text-muted"><span class="text-ink font-medium">Fun fact:</span> I might be quiet in meetings, but I deliver loud results.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ============== CONTACT ============== -->
  <section id="contact" class="relative px-[var(--gutter)] pt-[var(--section-gap)]">
    <div class="stage max-w-7xl mx-auto text-center px-6 py-[clamp(5rem,11vw,9rem)]">
      <div class="absolute inset-0 -z-10 bg-[radial-gradient(60%_62%_at_50%_50%,#060606b3_0%,#06060640_50%,transparent_80%)]" aria-hidden="true"></div>
      <p class="eyebrow mb-8 justify-center">$ ./contact --start</p>

      <h2 class="title-sheen font-display font-light text-[clamp(3.5rem,13vw,10rem)] leading-[0.86] tracking-[-0.055em]">
        Let's<br><span class="text-premium">ship something.</span>
      </h2>

      <p class="mt-10 text-lg sm:text-xl text-muted max-w-xl mx-auto">
        Have a project in mind, or a role to fill? I'd love to hear about it.
      </p>

      <div class="mt-10">
        <a href="mailto:fourativisuals@gmail.com" class="btn btn-primary btn-lg glow-edge glow-edge--warm">
          Start a conversation <?php echo $arrow_right; ?>
        </a>
      </div>

      <div class="mt-12 flex flex-wrap items-center justify-center gap-x-8 gap-y-4 font-mono text-xs">
        <a href="mailto:fourativisuals@gmail.com" class="nav-link inline-flex items-center gap-2">
          <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.6" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
          fourativisuals@gmail.com
        </a>
        <a href="https://www.linkedin.com/in/haytham-fourati-983157180/" target="_blank" rel="noopener" class="nav-link inline-flex items-center gap-2">
          <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg>
          LinkedIn
        </a>
        <a href="https://github.com/HaythamFourati" target="_blank" rel="noopener" class="nav-link inline-flex items-center gap-2">
          <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/></svg>
          GitHub
        </a>
      </div>

      <div class="mt-12">
        <span class="inline-flex items-center gap-2.5 border border-line rounded-full px-4 py-2 font-mono text-[11px] text-muted bg-white/[0.02]">
          <span class="pip" aria-hidden="true"></span>
          available for new projects
        </span>
      </div>
    </div>
  </section>

</main>

<?php get_footer(); ?>
