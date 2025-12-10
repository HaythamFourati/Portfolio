<?php get_header(); ?>

<div class="bg-gradient-to-br from-[#0A192F] to-[#112240] text-gray-300 py-12">
    <div class="container max-w-6xl mx-auto px-4">
        <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
                <article id="post-<?php the_ID(); ?>" <?php post_class('p-6 md:p-10'); ?>>
                    <header class="mb-8 text-center">
                        <div class="text-blue-400 uppercase tracking-wider text-sm mb-2">
                            <?php the_category(', '); ?>
                        </div>
                        <h1 class="text-3xl md:text-5xl font-bold text-white font-poppins mb-4"><?php the_title(); ?></h1>
                        <div class="text-gray-400 text-sm">
                            <span>Published on <?php echo get_the_date(); ?> by <?php the_author_posts_link(); ?></span>
                        </div>
                    </header>

                    <?php if (has_post_thumbnail()) : ?>
                        <div class="mb-8 max-w-6xl mx-auto">
                            <?php the_post_thumbnail('large', ['class' => 'w-full h-auto rounded-lg shadow-xl']); ?>
                        </div>
                    <?php endif; ?>

                    <div class="prose prose-invert prose-lg max-w-none prose-h2:font-poppins prose-h2:text-white prose-a:text-blue-400 hover:prose-a:text-blue-500 prose-strong:text-white">
                        <?php the_content(); ?>
                    </div>

                    <footer class="mt-10 pt-6 border-t border-gray-800">
                        <div class="text-gray-400">
                            <?php the_tags('<span class="font-semibold">Tags:</span> ', ', ', ''); ?>
                        </div>
                    </footer>
                </article>

                <nav class="mt-12 flex justify-between text-white">
                    <div class="prev-post text-left">
                        <?php previous_post_link('%link', '<span class="text-gray-400 block text-sm">Previous Post</span><span class="block mt-1 text-blue-400 hover:text-blue-500 transition-colors duration-300">&laquo; %title</span>'); ?>
                    </div>
                    <div class="next-post text-right">
                        <?php next_post_link('%link', '<span class="text-gray-400 block text-sm">Next Post</span><span class="block mt-1 text-blue-400 hover:text-blue-500 transition-colors duration-300">%title &raquo;</span>'); ?>
                    </div>
                </nav>

            <?php endwhile; ?>
        <?php endif; ?>
    </div>
</div>

<?php get_template_part('template-parts/cta'); ?>

<?php get_footer(); ?>