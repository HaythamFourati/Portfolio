<?php get_header(); ?>

<main class="px-[var(--gutter)]">
    <!-- Blog Hero -->
    <section class="stage max-w-7xl mx-auto mt-2 px-6 py-[clamp(4.5rem,10vw,8rem)] text-center">
        <div class="absolute inset-0 -z-10 bg-[radial-gradient(60%_62%_at_50%_50%,#060606b3_0%,#06060640_50%,transparent_80%)]" aria-hidden="true"></div>
        <span class="eyebrow justify-center mb-6">BLOG</span>
        <h1 class="block">
            <span class="title-sheen font-display font-light text-[clamp(3rem,8vw,6.5rem)] leading-[0.9] tracking-[-0.05em]">Latest Articles</span>
        </h1>
        <p class="mt-6 text-lg text-muted max-w-2xl mx-auto">
            Thoughts, tutorials, and insights on web development, WordPress, and design.
        </p>
    </section>

    <!-- Posts -->
    <section class="max-w-7xl mx-auto pt-16">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
            <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>
                    <?php get_template_part('template-parts/post-card'); ?>
                <?php endwhile; ?>
            <?php else : ?>
                <p class="text-muted col-span-full text-center py-12">No posts found.</p>
            <?php endif; ?>
        </div>

        <?php portfolio_pagination(__('← Previous'), __('Next →')); ?>
    </section>
</main>

<?php get_footer(); ?>
