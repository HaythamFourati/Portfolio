<?php get_header(); ?>

<main class="px-[var(--gutter)]">
    <header class="stage max-w-7xl mx-auto mt-2 px-6 py-[clamp(4rem,9vw,7rem)] text-center">
        <div class="absolute inset-0 -z-10 bg-[radial-gradient(60%_62%_at_50%_50%,#060606b3_0%,#06060640_50%,transparent_80%)]" aria-hidden="true"></div>
        <?php
        the_archive_title('<h1 class="block"><span class="title-sheen font-display font-light text-[clamp(2.75rem,7vw,5.5rem)] leading-[0.92] tracking-[-0.05em]">', '</span></h1>');
        the_archive_description('<div class="text-muted mt-5 max-w-2xl mx-auto">', '</div>');
        ?>
    </header>

    <section class="max-w-7xl mx-auto pt-16">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
            <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>
                    <?php get_template_part('template-parts/post-card'); ?>
                <?php endwhile; ?>
            <?php else : ?>
                <p class="text-muted col-span-full text-center">No posts found.</p>
            <?php endif; ?>
        </div>

        <?php portfolio_pagination(__('&laquo; Previous'), __('Next &raquo;')); ?>
    </section>
</main>

<?php get_footer(); ?>
