<article id="post-<?php the_ID(); ?>" <?php post_class('glow-edge group panel overflow-hidden flex flex-col'); ?>>
    <?php if (has_post_thumbnail()) : ?>
        <a href="<?php the_permalink(); ?>" class="block aspect-[16/10] overflow-hidden border-b border-line">
            <?php the_post_thumbnail('post-thumbnail', ['class' => 'w-full h-full object-cover opacity-90 group-hover:opacity-100 group-hover:scale-[1.04] transition-all duration-[1.2s] ease-[var(--ease-out-expo)]']); ?>
        </a>
    <?php else : ?>
        <a href="<?php the_permalink(); ?>" class="stage !rounded-none !border-0 border-b border-line block aspect-[16/10] grid place-items-center" aria-hidden="true" tabindex="-1">
            <span class="w-2.5 h-2.5 rounded-full bg-[image:var(--premium)] shadow-[0_0_24px_#feeae1aa]"></span>
        </a>
    <?php endif; ?>
    <div class="p-6 flex flex-col flex-grow">
        <div class="flex items-center gap-3 mb-4 font-mono text-[11px] text-faint">
            <span><?php echo get_the_date(); ?></span>
            <span class="w-1 h-1 bg-white/20 rounded-full"></span>
            <span class="text-cream [&_a]:hover:text-ink [&_a]:transition-colors"><?php the_category(', '); ?></span>
        </div>
        <h2 class="font-display text-[1.4rem] font-normal tracking-[-0.02em] leading-snug text-ink mb-3 flex-grow">
            <a href="<?php the_permalink(); ?>" class="hover:text-cream transition-colors duration-300"><?php the_title(); ?></a>
        </h2>
        <p class="text-muted text-sm mb-6 line-clamp-2">
            <?php echo wp_trim_words(get_the_excerpt(), 20, '...'); ?>
        </p>
        <a href="<?php the_permalink(); ?>" class="inline-flex items-center gap-2 text-sm font-display font-medium text-ink mt-auto group/link">
            Read Article
            <svg class="w-4 h-4 group-hover/link:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.75" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
            </svg>
        </a>
    </div>
</article>
