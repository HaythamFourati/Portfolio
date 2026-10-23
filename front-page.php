<?php
/**
 * The front page template file — AI Agent Console redesign.
 *
 * @package Haytham-Fourati-Portfolio
 */

get_header(); ?>

<div class="bg-canvas text-ink font-display selection:bg-lime selection:text-lime-ink">

  <!-- ============== HERO · SPLIT PORTRAIT ============== -->
  <section id="hero" class="relative min-h-[100svh] flex items-center px-4 pt-28 pb-16 overflow-hidden">
    <!-- Ambient glow behind the portrait -->
    <div class="pointer-events-none absolute -right-32 top-1/4 w-[36rem] h-[36rem] rounded-full bg-violet/15 blur-[120px]" aria-hidden="true"></div>

    <div class="relative w-full max-w-6xl mx-auto grid lg:grid-cols-12 gap-12 lg:gap-16 items-center">

      <!-- Copy -->
      <div class="lg:col-span-7 order-2 lg:order-1">

        <!-- Typed prompt -->
        <p class="inline-flex flex-wrap items-baseline gap-x-2 font-mono text-xs sm:text-sm border border-line bg-surface/70 rounded-md px-3 py-2">
          <span class="text-violet shrink-0">haytham@dev</span><span class="text-faint shrink-0">:~$</span>
          <span class="text-ink">
            <span data-typed data-text="ship production sites 10× faster — with AI">ship production sites 10× faster — with AI</span><span class="console-cursor align-middle" data-cursor aria-hidden="true"></span>
          </span>
        </p>

        <h1 class="mt-8 text-[clamp(3rem,8vw,6.5rem)] font-semibold leading-[0.92] tracking-[-0.035em]">
          <span class="block whitespace-nowrap">Haytham</span>
          <span class="block whitespace-nowrap">Fourati</span>
        </h1>

        <p data-hero class="mt-6 text-xl sm:text-2xl text-ink/90 max-w-xl text-pretty">
          Front-End &amp; WordPress engineer.
          <span class="inline-flex items-center gap-1.5 font-mono text-sm text-lime align-middle">
            <span class="w-1.5 h-1.5 rounded-full bg-lime"></span>AI-native
          </span>
        </p>

        <p data-hero class="mt-4 text-base sm:text-lg text-muted max-w-xl leading-relaxed text-pretty">
          I pair with AI to ship production-grade websites in a fraction of the time — then bring the
          architecture, taste, and the final 20% that actually makes it to production.
        </p>

        <!-- CTAs -->
        <div data-hero class="mt-9 flex flex-wrap gap-3">
          <a href="#work" class="group inline-flex items-center gap-2 bg-lime text-lime-ink font-semibold px-6 py-3.5 rounded-md transition-transform duration-300 hover:-translate-y-0.5">
            View the work
            <svg class="w-4 h-4 group-hover:translate-x-0.5 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
          </a>
          <a href="#contact" class="inline-flex items-center gap-2 border border-line hover:border-muted text-ink font-medium px-6 py-3.5 rounded-md transition-colors duration-300">
            Let's talk
          </a>
        </div>

        <!-- Stats strip -->
        <dl data-hero class="mt-12 grid grid-cols-3 max-w-lg border-t border-line pt-6 font-mono">
          <div>
            <dt class="text-[11px] text-faint uppercase tracking-wider">experience</dt>
            <dd class="mt-1 text-2xl font-display font-semibold text-ink">5+ yrs</dd>
          </div>
          <div>
            <dt class="text-[11px] text-faint uppercase tracking-wider">focus</dt>
            <dd class="mt-1 text-2xl font-display font-semibold text-ink">Custom WP</dd>
          </div>
          <div>
            <dt class="text-[11px] text-faint uppercase tracking-wider">speaks</dt>
            <dd class="mt-1 text-2xl font-display font-semibold text-lime">EN · AR · FR</dd>
          </div>
        </dl>
      </div>

      <!-- Portrait -->
      <div data-hero class="lg:col-span-5 order-1 lg:order-2 w-full max-w-sm sm:max-w-md mx-auto lg:max-w-none">
        <figure class="relative">
          <div class="rounded-2xl border border-line bg-surface overflow-hidden shadow-2xl shadow-black/50">
            <!-- Window bar -->
            <div class="flex items-center gap-3 px-4 py-2.5 border-b border-line bg-surface-2/80">
              <span class="flex gap-1.5" aria-hidden="true">
                <span class="w-2.5 h-2.5 rounded-full bg-line"></span>
                <span class="w-2.5 h-2.5 rounded-full bg-line"></span>
                <span class="w-2.5 h-2.5 rounded-full bg-lime/80"></span>
              </span>
              <span class="font-mono text-[11px] text-faint truncate">~/portfolio/haytham.webp</span>
            </div>
            <img src="<?php echo esc_url(get_theme_file_uri('/images/Warm Professional Office Headshot.webp')); ?>"
                 alt="Haytham Fourati, front-end developer" width="1122" height="1402"
                 class="block w-full aspect-[4/5] object-cover object-top" fetchpriority="high">
          </div>

          <!-- Floating status chip -->
          <figcaption class="absolute -bottom-5 left-4 sm:-left-6 inline-flex items-center gap-2 bg-canvas/90 backdrop-blur-sm border border-line rounded-lg px-4 py-3 font-mono text-xs text-muted shadow-xl shadow-black/40">
            <span class="relative flex h-2 w-2">
              <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-lime opacity-75"></span>
              <span class="relative inline-flex rounded-full h-2 w-2 bg-lime"></span>
            </span>
            status: <span class="text-lime">available for hire</span>
          </figcaption>

          <!-- Floating location chip -->
          <span class="absolute top-16 -right-3 sm:-right-6 bg-canvas/90 backdrop-blur-sm border border-line rounded-lg px-3 py-2 font-mono text-[11px] text-muted shadow-xl shadow-black/40">
            📍 remote · worldwide
          </span>
        </figure>
      </div>
    </div>
  </section>

  <!-- ============== AI WORKFLOW ============== -->
  <section id="workflow" class="relative px-4 py-[clamp(5rem,10vw,8rem)] border-t border-line">
    <div class="max-w-6xl mx-auto">

      <div class="max-w-3xl">
        <p class="font-mono text-sm text-violet mb-4">~/ how-i-work</p>
        <h2 class="text-[clamp(2rem,5vw,3.5rem)] font-semibold leading-[1.02] tracking-[-0.02em] text-balance">
          The AI-native workflow.<br><span class="text-muted">Days of boilerplate become hours.</span>
        </h2>
        <p class="mt-6 text-lg text-muted leading-relaxed text-pretty">
          AI is my pair programmer, not my replacement. It clears the busywork — scaffolding, boilerplate,
          first drafts — so I spend my hours on architecture, performance, and the design decisions that
          a recruiter actually notices. <span class="text-ink">The speed is the tooling. The taste is hand-made.</span>
        </p>
      </div>

      <!-- Pipeline -->
      <ol class="mt-14 grid gap-px bg-line rounded-xl overflow-hidden border border-line sm:grid-cols-2 lg:grid-cols-5">
        <?php
        $stages = [
          ['n' => '01', 'k' => 'brief',    't' => 'Understand', 'd' => 'Goals, users, constraints. The part no model can guess.'],
          ['n' => '02', 'k' => 'prompt',   't' => 'Direct',     'd' => 'Translate intent into precise prompts and scaffolds.'],
          ['n' => '03', 'k' => 'generate', 't' => 'Generate',   'd' => 'AI drafts components, copy and boilerplate in minutes.'],
          ['n' => '04', 'k' => 'craft',    't' => 'Craft',      'd' => 'I architect, refactor and design the 20% that matters.'],
          ['n' => '05', 'k' => 'ship',     't' => 'Ship',       'd' => 'Fast, accessible, on-brand — tested and in production.'],
        ];
        foreach ($stages as $i => $s) :
          $accent = $i === 3 ? 'text-lime' : 'text-violet';
        ?>
          <li class="group bg-surface/60 p-6 transition-colors duration-300 hover:bg-surface">
            <div class="flex items-center justify-between mb-5">
              <span class="font-mono text-xs <?php echo $accent; ?>"><?php echo $s['n']; ?></span>
              <span class="font-mono text-xs text-faint group-hover:text-muted transition-colors"><?php echo $s['k']; ?>()</span>
            </div>
            <h3 class="text-lg font-semibold text-ink mb-2"><?php echo $s['t']; ?></h3>
            <p class="text-sm text-muted leading-relaxed text-pretty"><?php echo $s['d']; ?></p>
          </li>
        <?php endforeach; ?>
      </ol>

      <p class="mt-6 font-mono text-xs text-faint">
        <span class="text-lime">▸</span> stages 01 &amp; 04 are where I live — the model owns the typing, I own the judgment.
      </p>
    </div>
  </section>

  <!-- ============== SELECTED WORK ============== -->
  <section id="work" class="relative px-4 py-[clamp(5rem,10vw,8rem)] border-t border-line">
    <div class="max-w-6xl mx-auto">

      <div class="flex flex-wrap items-end justify-between gap-4 mb-12">
        <div>
          <p class="font-mono text-sm text-violet mb-4">~/ selected-work</p>
          <h2 class="text-[clamp(2rem,5vw,3.5rem)] font-semibold leading-[1.02] tracking-[-0.02em]">
            Shipped &amp; live.
          </h2>
        </div>
        <p class="font-mono text-sm text-faint">$ ls selected-work/ <span class="text-muted">— 7 results</span></p>
      </div>

      <!-- Featured project -->
      <a href="https://successcircles.com" target="_blank" rel="noopener"
         class="group block relative rounded-xl overflow-hidden border border-line mb-px">
        <div class="image-reveal-box w-full aspect-[16/9] md:aspect-[21/9]">
          <img src="<?php echo esc_url(get_theme_file_uri('/images/Success-Circles.webp')); ?>"
               alt="Success Circles — homepage of an advisory community for established entrepreneurs, dark editorial layout" class="reveal-img object-top" loading="lazy">
          <div class="uncover"><div class="uncover_slice"></div><div class="uncover_slice"></div><div class="uncover_slice"></div></div>
        </div>
        <div class="absolute inset-0 bg-gradient-to-t from-canvas via-canvas/40 to-transparent"></div>
        <div class="absolute bottom-0 left-0 right-0 p-6 sm:p-8">
          <div class="flex items-center gap-3 font-mono text-xs text-faint mb-2">
            <span class="text-lime">[ featured ]</span>
            <span>coaching / community</span>
          </div>
          <h3 class="text-2xl sm:text-3xl font-semibold text-ink mb-1">Success Circles</h3>
          <p class="text-muted max-w-xl text-pretty">An advisory community for established entrepreneurs — editorial design built to turn visitors into members.</p>
          <span class="mt-4 inline-flex items-center gap-2 font-mono text-sm text-lime">
            successcircles.com
            <svg class="w-4 h-4 group-hover:translate-x-0.5 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 17L17 7M17 7H8M17 7V16"/></svg>
          </span>
        </div>
      </a>

      <!-- Remaining work as console rows -->
      <ul class="rounded-b-xl overflow-hidden border-x border-b border-line divide-y divide-line">
        <?php
        $projects = [
          ['n' => '02', 'name' => 'Precision Aesthetics MD', 'tag' => 'aesthetics',    'url' => 'https://precisionaestheticsmd.com', 'host' => 'precisionaestheticsmd.com', 'desc' => 'A sleek, conversion-focused site for a medical spa with a fast, trustworthy booking experience.'],
          ['n' => '03', 'name' => 'Kidzz Kreations',        'tag' => 'entertainment', 'url' => 'https://kidzzkreations.com/',        'host' => 'kidzzkreations.com',     'desc' => "Turning kids' party dreams into reality with playful, memorable entertainment."],
          ['n' => '04', 'name' => 'Local Vocal Marketing',  'tag' => 'marketing',     'url' => 'https://localvocalmarketing.com',   'host' => 'localvocalmarketing.com', 'desc' => 'A corporate site for a marketing agency showcasing services and portfolio.'],
          ['n' => '05', 'name' => 'Care Giving Angels of MD','tag' => 'healthcare',    'url' => 'https://caregivingangelsofmd.com/', 'host' => 'caregivingangelsofmd.com','desc' => 'A compassionate, trust-first website for a home care agency.'],
          ['n' => '06', 'name' => 'ADHD Telehealth Testing', 'tag' => 'telehealth',    'url' => 'https://adhdtestcalifornia.com/',   'host' => 'adhdtestcalifornia.com',  'desc' => 'A friendly, accessible platform for ADHD testing across California.'],
          ['n' => '07', 'name' => 'Cullen Burke',            'tag' => 'legal',         'url' => 'https://www.cullenburke.com/',      'host' => 'cullenburke.com',        'desc' => 'A strong, authoritative presence for a criminal defense lawyer.'],
        ];
        foreach ($projects as $p) : ?>
          <li>
            <a href="<?php echo esc_url($p['url']); ?>" target="_blank" rel="noopener"
               class="work-row flex items-center gap-4 sm:gap-6 px-4 sm:px-6 py-5 group">
              <span class="font-mono text-xs text-faint w-6 shrink-0"><?php echo $p['n']; ?></span>
              <span class="min-w-0 flex-1">
                <span class="block text-lg font-semibold text-ink group-hover:text-lime transition-colors"><?php echo $p['name']; ?></span>
                <span class="block text-sm text-muted truncate text-pretty"><?php echo $p['desc']; ?></span>
              </span>
              <span class="hidden md:inline font-mono text-xs text-faint shrink-0"><?php echo $p['tag']; ?></span>
              <span class="hidden lg:inline font-mono text-xs text-muted shrink-0 w-48 text-right truncate"><?php echo $p['host']; ?></span>
              <svg class="w-4 h-4 text-faint group-hover:text-lime group-hover:translate-x-0.5 transition-all shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 17L17 7M17 7H8M17 7V16"/></svg>
            </a>
          </li>
        <?php endforeach; ?>
      </ul>
    </div>
  </section>

  <!-- ============== STACK MANIFEST ============== -->
  <section id="stack" class="relative px-4 py-[clamp(5rem,10vw,8rem)] border-t border-line">
    <div class="max-w-6xl mx-auto">
      <div class="max-w-3xl mb-12">
        <p class="font-mono text-sm text-violet mb-4">~/ stack</p>
        <h2 class="text-[clamp(2rem,5vw,3.5rem)] font-semibold leading-[1.02] tracking-[-0.02em]">
          The toolchain.
        </h2>
        <p class="mt-6 text-lg text-muted leading-relaxed text-pretty">
          A modern WordPress &amp; front-end stack, accelerated by an AI layer I drive every day.
        </p>
      </div>

      <div class="rounded-xl border border-line overflow-hidden">
        <?php
        $groups = [
          ['k' => 'ai/',          'lime' => true,  'items' => ['Claude', 'ChatGPT', 'Cursor', 'Midjourney', 'Make.com'], 'note' => 'my force multiplier'],
          ['k' => 'wordpress/',   'lime' => false, 'items' => ['Custom Themes', 'Elementor', 'UX Builder', 'ACF', 'GitHub'], 'note' => ''],
          ['k' => 'frontend/',    'lime' => false, 'items' => ['React', 'Tailwind CSS', 'GSAP', 'JavaScript', 'HTML / CSS'], 'note' => ''],
          ['k' => 'performance/', 'lime' => false, 'items' => ['Core Web Vitals', 'Yoast SEO', 'Rank Math', 'PageSpeed'], 'note' => ''],
          ['k' => 'ops & security/', 'lime' => false, 'items' => ['SiteGround', 'InMotion', 'Hostinger', 'Wordfence', 'Sucuri', 'SSL'], 'note' => ''],
        ];
        foreach ($groups as $i => $g) : ?>
          <div class="grid sm:grid-cols-[200px_1fr] gap-x-6 gap-y-3 px-5 sm:px-7 py-6 <?php echo $i ? 'border-t border-line' : ''; ?> <?php echo $g['lime'] ? 'bg-lime/[0.04]' : 'bg-surface/40'; ?>">
            <div class="flex items-baseline gap-2">
              <span class="font-mono text-base font-medium <?php echo $g['lime'] ? 'text-lime' : 'text-ink'; ?>"><?php echo $g['k']; ?></span>
              <?php if ($g['note']) : ?><span class="font-mono text-xs text-faint hidden sm:inline">// <?php echo $g['note']; ?></span><?php endif; ?>
            </div>
            <ul class="flex flex-wrap gap-2">
              <?php foreach ($g['items'] as $item) : ?>
                <li class="font-mono text-sm px-3 py-1.5 rounded-md border <?php echo $g['lime'] ? 'border-lime/30 text-lime bg-lime/[0.06]' : 'border-line text-muted bg-surface-2/50'; ?>"><?php echo $item; ?></li>
              <?php endforeach; ?>
            </ul>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <!-- ============== EXPERIENCE TIMELINE ============== -->
  <section id="experience" class="relative px-4 py-[clamp(5rem,10vw,8rem)] border-t border-line">
    <div class="max-w-5xl mx-auto">
      <div class="max-w-3xl mb-16">
        <p class="font-mono text-sm text-violet mb-4">~/ git-log</p>
        <h2 class="text-[clamp(2rem,5vw,3.5rem)] font-semibold leading-[1.02] tracking-[-0.02em]">
          Commit history.
        </h2>
      </div>

      <div class="timeline-container relative">
        <div class="timeline-line absolute left-2 md:left-1/2 top-0 bottom-0 w-px bg-line md:-translate-x-1/2">
          <div class="timeline-progress absolute top-0 left-0 w-full bg-lime" style="height:0%;"></div>
        </div>

        <div class="space-y-14 md:space-y-24">

          <!-- 1 · current -->
          <div class="timeline-item relative flex flex-col md:flex-row md:items-center">
            <div class="hidden md:block md:w-1/2 md:pr-16 md:text-right">
              <div class="timeline-content">
                <span class="inline-block font-mono text-xs text-lime mb-3">● HEAD · current</span>
                <h3 class="text-2xl font-semibold text-ink mb-1">WordPress Developer</h3>
                <p class="font-mono text-sm text-violet mb-1">Local Vocal Marketing</p>
                <p class="text-sm text-faint mb-4">Baltimore County, Maryland</p>
                <ul class="text-sm text-muted space-y-1.5">
                  <li>Built &amp; maintained WordPress sites on the Flatsome theme</li>
                  <li>Extended functionality with HTML, CSS &amp; JavaScript</li>
                  <li>Implemented SEO strategies for organic rankings</li>
                </ul>
              </div>
            </div>
            <div class="timeline-node absolute left-2 md:left-1/2 md:-translate-x-1/2 -translate-x-1/2 w-4 h-4 bg-lime rounded-full ring-4 ring-canvas z-10">
              <div class="absolute -top-1 -left-1 w-6 h-6 bg-lime/30 rounded-full animate-ping"></div>
            </div>
            <div class="timeline-year absolute left-6 md:left-1/2 md:-translate-x-1/2 -top-9 md:-top-11">
              <span class="font-mono text-xs bg-lime text-lime-ink font-semibold px-3 py-1.5 rounded-md">2019 — present</span>
            </div>
            <div class="md:w-1/2 md:pl-16 pl-10">
              <div class="timeline-content md:hidden">
                <span class="inline-block font-mono text-xs text-lime mb-3">● HEAD · current</span>
                <h3 class="text-xl font-semibold text-ink mb-1">WordPress Developer</h3>
                <p class="font-mono text-sm text-violet mb-1">Local Vocal Marketing</p>
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
            <div class="timeline-node absolute left-2 md:left-1/2 md:-translate-x-1/2 -translate-x-1/2 w-4 h-4 bg-line rounded-full ring-4 ring-canvas z-10 transition-colors duration-500"></div>
            <div class="timeline-year absolute left-6 md:left-1/2 md:-translate-x-1/2 -top-9 md:-top-11">
              <span class="font-mono text-xs bg-surface-2 text-muted px-3 py-1.5 rounded-md transition-colors duration-500">2019 — 2022</span>
            </div>
            <div class="md:w-1/2 md:pl-16 pl-10">
              <div class="timeline-content">
                <h3 class="text-xl md:text-2xl font-semibold text-ink mb-1">WordPress Expert</h3>
                <p class="font-mono text-sm text-violet mb-3">Fiverr · Freelance</p>
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
                <h3 class="text-2xl font-semibold text-ink mb-1">WordPress Developer</h3>
                <p class="font-mono text-sm text-violet mb-1">POLYSERVICE</p>
                <p class="text-sm text-faint mb-4">Tunis, Tunisia</p>
                <ul class="text-sm text-muted space-y-1.5">
                  <li>Developed &amp; maintained business websites</li>
                  <li>Optimized performance and troubleshot issues</li>
                  <li>Implemented SEO best practices</li>
                </ul>
              </div>
            </div>
            <div class="timeline-node absolute left-2 md:left-1/2 md:-translate-x-1/2 -translate-x-1/2 w-4 h-4 bg-line rounded-full ring-4 ring-canvas z-10 transition-colors duration-500"></div>
            <div class="timeline-year absolute left-6 md:left-1/2 md:-translate-x-1/2 -top-9 md:-top-11">
              <span class="font-mono text-xs bg-surface-2 text-muted px-3 py-1.5 rounded-md transition-colors duration-500">2018 — 2019</span>
            </div>
            <div class="md:w-1/2 md:pl-16 pl-10">
              <div class="timeline-content md:hidden">
                <h3 class="text-xl font-semibold text-ink mb-1">WordPress Developer</h3>
                <p class="font-mono text-sm text-violet mb-1">POLYSERVICE</p>
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
            <div class="timeline-node absolute left-2 md:left-1/2 md:-translate-x-1/2 -translate-x-1/2 w-4 h-4 bg-line rounded-full ring-4 ring-canvas z-10 transition-colors duration-500"></div>
            <div class="timeline-year absolute left-6 md:left-1/2 md:-translate-x-1/2 -top-9 md:-top-11">
              <span class="font-mono text-xs bg-surface-2 text-muted px-3 py-1.5 rounded-md transition-colors duration-500">2016 — 2018</span>
            </div>
            <div class="md:w-1/2 md:pl-16 pl-10">
              <div class="timeline-content">
                <h3 class="text-xl md:text-2xl font-semibold text-ink mb-1">Data Entry Operator</h3>
                <p class="font-mono text-sm text-violet mb-3">Online Review Machine</p>
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
  <section id="about" class="relative px-4 py-[clamp(5rem,10vw,8rem)] border-t border-line">
    <div class="max-w-6xl mx-auto">
      <p class="font-mono text-sm text-violet mb-4">~/ whoami</p>

      <div class="grid lg:grid-cols-12 gap-10 lg:gap-14 items-start">

        <!-- Image + languages -->
        <div class="lg:col-span-5 space-y-8">
          <div class="relative">
            <div class="rounded-xl overflow-hidden border border-line">
              <img src="<?php echo esc_url(get_theme_file_uri('/images/profile-picture-number2.jpg')); ?>"
                   alt="Haytham Fourati, front-end developer" class="w-full h-auto" loading="lazy">
            </div>
            <div class="absolute -bottom-5 -right-3 sm:-right-5 bg-surface border border-line p-4 rounded-xl">
              <div class="text-3xl font-semibold text-lime leading-none">5+</div>
              <div class="font-mono text-xs text-muted mt-1">years exp.</div>
            </div>
            <div class="absolute top-3 left-3 bg-canvas/80 backdrop-blur-sm border border-line px-3 py-1.5 rounded-md font-mono text-xs text-muted">
              📍 remote · worldwide
            </div>
          </div>

          <div class="border border-line rounded-xl p-6 bg-surface/40">
            <h3 class="font-mono text-sm text-faint mb-4">// languages</h3>
            <ul class="flex flex-wrap gap-2.5">
              <li class="flex items-center gap-2 bg-surface-2/60 border border-line px-3 py-1.5 rounded-md text-sm"><span>🇺🇸</span> English <span class="font-mono text-xs text-lime">fluent</span></li>
              <li class="flex items-center gap-2 bg-surface-2/60 border border-line px-3 py-1.5 rounded-md text-sm"><span>🇹🇳</span> Arabic <span class="font-mono text-xs text-lime">native</span></li>
              <li class="flex items-center gap-2 bg-surface-2/60 border border-line px-3 py-1.5 rounded-md text-sm"><span>🇫🇷</span> French <span class="font-mono text-xs text-violet">good</span></li>
              <li class="flex items-center gap-2 bg-surface-2/60 border border-line px-3 py-1.5 rounded-md text-sm"><span>🇩🇪</span> German <span class="font-mono text-xs text-faint">learning</span></li>
            </ul>
          </div>
        </div>

        <!-- Bio -->
        <div class="lg:col-span-7 space-y-8">
          <h2 class="text-[clamp(1.9rem,4vw,3rem)] font-semibold leading-[1.05] tracking-[-0.02em] text-balance">
            I build clean, fast websites — and I let AI handle the parts that don't need a human.
          </h2>
          <p class="text-lg text-muted leading-relaxed text-pretty">
            I'm a front-end WordPress developer focused on custom theme development — blending elegant design
            with performance and usability. AI is woven into how I work: it drafts, I direct. That means more
            iterations, faster delivery, and more time spent on the decisions that make a site genuinely good.
          </p>

          <div class="grid sm:grid-cols-2 gap-3">
            <?php
            $points = [
              ['t' => 'Fast & optimized', 'd' => 'SEO-friendly, lightning-fast builds', 'lime' => true],
              ['t' => 'AI-augmented',     'd' => 'More shipped, in less time', 'lime' => false],
              ['t' => 'Clear comms',      'd' => 'Built for long-term partnerships', 'lime' => false],
              ['t' => 'Clean code',       'd' => 'Scalable &amp; maintainable', 'lime' => true],
            ];
            foreach ($points as $pt) : ?>
              <div class="flex items-start gap-3 p-4 border border-line rounded-xl bg-surface/40">
                <span class="font-mono text-xs mt-0.5 <?php echo $pt['lime'] ? 'text-lime' : 'text-violet'; ?>">▸</span>
                <div>
                  <h4 class="font-semibold text-ink"><?php echo $pt['t']; ?></h4>
                  <p class="text-sm text-muted"><?php echo $pt['d']; ?></p>
                </div>
              </div>
            <?php endforeach; ?>
          </div>

          <div class="flex items-center gap-4 p-4 border border-line rounded-xl bg-surface/40">
            <span class="text-2xl">☕</span>
            <p class="text-muted text-pretty"><span class="text-ink font-medium">Fun fact:</span> I might be quiet in meetings, but I deliver loud results.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ============== CONTACT ============== -->
  <section id="contact" class="relative px-4 py-[clamp(6rem,12vw,10rem)] border-t border-line overflow-hidden">
    <div class="max-w-6xl mx-auto text-center">
      <p class="font-mono text-sm text-violet mb-6">$ ./contact --start</p>

      <h2 class="text-[clamp(3.5rem,14vw,9rem)] font-semibold leading-[0.86] tracking-[-0.04em] text-balance">
        Let's<br><span class="text-lime">ship something.</span>
      </h2>

      <p class="mt-8 text-xl text-muted max-w-xl mx-auto text-pretty">
        Have a project in mind, or a role to fill? I'd love to hear about it.
      </p>

      <div class="mt-10">
        <a href="mailto:fourativisuals@gmail.com"
           class="group inline-flex items-center gap-3 bg-lime text-lime-ink font-semibold text-lg px-9 py-4.5 rounded-md transition-transform duration-300 hover:-translate-y-0.5">
          Start a conversation
          <svg class="w-5 h-5 group-hover:translate-x-0.5 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
        </a>
      </div>

      <div class="mt-12 flex flex-wrap items-center justify-center gap-x-8 gap-y-4 font-mono text-sm">
        <a href="mailto:fourativisuals@gmail.com" class="inline-flex items-center gap-2 text-muted hover:text-lime transition-colors">
          <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
          fourativisuals@gmail.com
        </a>
        <a href="https://www.linkedin.com/in/haytham-fourati-983157180/" target="_blank" rel="noopener" class="inline-flex items-center gap-2 text-muted hover:text-lime transition-colors">
          <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg>
          LinkedIn
        </a>
        <a href="https://github.com/HaythamFourati" target="_blank" rel="noopener" class="inline-flex items-center gap-2 text-muted hover:text-lime transition-colors">
          <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/></svg>
          GitHub
        </a>
      </div>

      <div class="mt-12">
        <span class="inline-flex items-center gap-2 border border-line rounded-full px-4 py-2 font-mono text-xs text-muted">
          <span class="relative flex h-2 w-2">
            <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-lime opacity-75"></span>
            <span class="relative inline-flex rounded-full h-2 w-2 bg-lime"></span>
          </span>
          available for new projects
        </span>
      </div>
    </div>
  </section>

</div>

<?php get_footer(); ?>
