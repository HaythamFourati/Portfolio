<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>
<body <?php body_class('bg-canvas text-ink font-sans'); ?>>
<?php wp_body_open(); ?>

<div id="smooth-wrapper">
    <div id="smooth-content">

        <header id="site-header" class="sticky top-0 z-50">
            <div class="max-w-7xl mx-auto px-[var(--gutter)]">
                <div class="flex justify-between items-center h-16">
                    <a href="<?php echo get_home_url(); ?>" class="group inline-flex items-center gap-2.5 font-display text-[1.05rem] font-medium tracking-[-0.02em] text-ink">
                        <span class="relative grid place-items-center w-7 h-7 rounded-lg border border-line bg-surface-2 shadow-[inset_0_1px_0_0_#ffffff14]" aria-hidden="true">
                            <span class="w-2 h-2 rounded-full bg-[image:var(--premium)] shadow-[0_0_10px_#feeae180]"></span>
                        </span>
                        <span>haytham<span class="text-faint group-hover:text-muted transition-colors">@dev</span></span>
                    </a>
                    <nav class="hidden md:block" aria-label="Primary">
                        <ul class="flex items-center gap-1 p-1 rounded-full border border-line bg-surface/60 text-[0.85rem]">
                            <?php
                            $nav = [
                                ['work',    get_home_url() . '#work'],
                                ['process', get_home_url() . '#workflow'],
                                ['stack',   get_home_url() . '#stack'],
                                ['about',   get_home_url() . '#about'],
                                ['blog',    get_permalink(get_option('page_for_posts'))],
                                ['contact', get_home_url() . '#contact'],
                            ];
                            foreach ($nav as $item) : ?>
                                <li><a href="<?php echo $item[1]; ?>" class="nav-link block px-3.5 py-1.5 rounded-full hover:bg-white/[0.06]"><?php echo $item[0]; ?></a></li>
                            <?php endforeach; ?>
                        </ul>
                    </nav>
                    <div class="hidden md:flex items-center gap-1">
                        <a href="https://github.com/HaythamFourati" target="_blank" class="nav-link grid place-items-center w-9 h-9 rounded-full hover:bg-white/[0.06]" aria-label="GitHub">
                            <svg class="w-[18px] h-[18px]" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path fill-rule="evenodd" d="M12 2C6.477 2 2 6.477 2 12c0 4.418 2.865 8.168 6.839 9.49.5.092.682-.217.682-.482 0-.237-.009-.868-.014-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.031-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.378.203 2.398.1 2.65.64.7 1.03 1.595 1.03 2.688 0 3.848-2.338 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.001 10.001 0 0022 12c0-5.523-4.477-10-10-10z" clip-rule="evenodd" /></svg>
                        </a>
                        <a href="https://www.linkedin.com/in/haytham-fourati-983157180/" target="_blank" class="nav-link grid place-items-center w-9 h-9 rounded-full hover:bg-white/[0.06]" aria-label="LinkedIn">
                            <svg class="w-[18px] h-[18px]" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/></svg>
                        </a>
                        <a href="mailto:fourativisuals@gmail.com" class="nav-link grid place-items-center w-9 h-9 rounded-full hover:bg-white/[0.06]" aria-label="Email">
                            <svg class="w-[18px] h-[18px]" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.6" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                        </a>
                    </div>
                    <div class="md:hidden">
                        <button id="mobile-menu-button" class="nav-link grid place-items-center w-10 h-10 rounded-full border border-line" aria-label="Menu" aria-controls="mobile-menu">
                            <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.6" d="M4 8h16M4 16h16" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
            <!-- Mobile menu, show/hide based on menu state -->
            <div id="mobile-menu" class="hidden md:hidden border-t border-line bg-canvas/95">
                <div class="px-[var(--gutter)] py-3 flex flex-col">
                    <?php foreach ($nav as $item) : ?>
                        <a href="<?php echo $item[1]; ?>" class="nav-link font-display text-2xl tracking-[-0.02em] py-2.5 border-b border-line last:border-0"><?php echo $item[0]; ?></a>
                    <?php endforeach; ?>
                </div>
            </div>
        </header>