<?php get_header(); ?>

<main class="px-[var(--gutter)]">
<?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

            <!-- Post Header -->
            <header class="stage max-w-7xl mx-auto mt-2 px-6 py-[clamp(4rem,9vw,7rem)] text-center">
                <div class="absolute inset-0 -z-10 bg-[radial-gradient(60%_62%_at_50%_50%,#060606b3_0%,#06060640_50%,transparent_80%)]" aria-hidden="true"></div>
                <div class="flex justify-center mb-6">
                    <span class="glass rounded-full px-3.5 py-1.5 font-mono text-[11px] text-cream [&_a]:hover:text-ink [&_a]:transition-colors">
                        <?php the_category(', '); ?>
                    </span>
                </div>
                <h1 class="max-w-4xl mx-auto">
                    <span class="title-sheen font-display font-light text-[clamp(2.4rem,5.5vw,4.5rem)] leading-[1] tracking-[-0.04em]"><?php the_title(); ?></span>
                </h1>
                <div class="mt-8 flex flex-wrap items-center justify-center gap-x-4 gap-y-2 font-mono text-xs text-faint">
                    <span class="flex items-center gap-2">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.6" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                        <?php echo get_the_date(); ?>
                    </span>
                    <span class="w-1 h-1 bg-white/20 rounded-full"></span>
                    <span class="flex items-center gap-2">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.6" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/></svg>
                        <?php the_author(); ?>
                    </span>
                    <span class="w-1 h-1 bg-white/20 rounded-full"></span>
                    <span class="flex items-center gap-2">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.6" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                        <?php echo ceil(str_word_count(strip_tags(get_the_content())) / 200); ?> min read
                    </span>
                </div>
            </header>

            <!-- Featured Image -->
            <?php if (has_post_thumbnail()) : ?>
                <div class="max-w-5xl mx-auto mt-6 rounded-[var(--radius-stage)] overflow-hidden border border-line">
                    <?php the_post_thumbnail('large', ['class' => 'w-full h-auto']); ?>
                </div>
            <?php endif; ?>

            <!-- Article Content -->
            <div class="max-w-3xl mx-auto pt-16">
                <div class="prose prose-lg prose-invert max-w-none
                    prose-headings:font-display prose-headings:font-normal prose-headings:tracking-[-0.025em] prose-headings:text-ink
                    prose-h2:text-3xl prose-h2:mt-14 prose-h2:mb-4
                    prose-h3:text-2xl prose-h3:mt-10 prose-h3:mb-3
                    prose-p:text-muted prose-p:leading-relaxed
                    prose-a:text-cream prose-a:underline-offset-4 prose-a:decoration-cream/30 hover:prose-a:decoration-cream
                    prose-strong:text-ink
                    prose-blockquote:border-l-cream/60 prose-blockquote:bg-white/[0.02] prose-blockquote:py-4 prose-blockquote:px-6 prose-blockquote:rounded-r-2xl prose-blockquote:not-italic prose-blockquote:text-ink
                    prose-code:bg-white/[0.06] prose-code:px-1.5 prose-code:py-0.5 prose-code:rounded-md prose-code:text-cream prose-code:font-mono prose-code:font-normal prose-code:before:content-none prose-code:after:content-none
                    prose-pre:bg-surface prose-pre:border prose-pre:border-line prose-pre:rounded-2xl
                    prose-img:rounded-2xl prose-img:border prose-img:border-line
                    prose-hr:border-line
                    prose-ul:text-muted prose-ol:text-muted
                    prose-li:marker:text-faint">
                    <?php the_content(); ?>
                </div>

                <!-- Tags -->
                <?php if (has_tag()) : ?>
                    <div class="mt-14 pt-8 border-t border-line">
                        <div class="flex flex-wrap items-center gap-2">
                            <span class="font-mono text-xs text-faint mr-2">Tags:</span>
                            <?php
                            $tags = get_the_tags();
                            if ($tags) {
                                foreach ($tags as $tag) {
                                    echo '<a href="' . get_tag_link($tag->term_id) . '" class="rounded-full border border-line px-3.5 py-1.5 text-sm text-muted hover:text-ink hover:border-line-hover transition-colors duration-300">' . $tag->name . '</a>';
                                }
                            }
                            ?>
                        </div>
                    </div>
                <?php endif; ?>

                <!-- Post Navigation -->
                <nav class="mt-12 pt-8 border-t border-line">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <?php
                        $prev_post = get_previous_post();
                        $next_post = get_next_post();
                        ?>

                        <?php if ($prev_post) : ?>
                            <a href="<?php echo get_permalink($prev_post); ?>" class="glow-edge group panel p-6">
                                <span class="font-mono text-[11px] text-faint flex items-center gap-2 mb-3">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.75" d="M7 16l-4-4m0 0l4-4m-4 4h18"/></svg>
                                    Previous Article
                                </span>
                                <span class="font-display text-lg text-ink group-hover:text-cream transition-colors duration-300 line-clamp-2">
                                    <?php echo get_the_title($prev_post); ?>
                                </span>
                            </a>
                        <?php else : ?>
                            <div></div>
                        <?php endif; ?>

                        <?php if ($next_post) : ?>
                            <a href="<?php echo get_permalink($next_post); ?>" class="glow-edge group panel p-6 text-right">
                                <span class="font-mono text-[11px] text-faint flex items-center justify-end gap-2 mb-3">
                                    Next Article
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.75" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                                </span>
                                <span class="font-display text-lg text-ink group-hover:text-cream transition-colors duration-300 line-clamp-2">
                                    <?php echo get_the_title($next_post); ?>
                                </span>
                            </a>
                        <?php endif; ?>
                    </div>
                </nav>
            </div>

        </article>
    <?php endwhile; ?>
<?php endif; ?>
</main>

<?php get_footer(); ?>
