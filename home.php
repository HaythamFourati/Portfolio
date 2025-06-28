<?php get_header(); ?>

<div class="bg-gradient-to-br from-[#0A192F] to-[#112240] text-gray-300 py-12">
    <div class="container max-w-7xl mx-auto px-8">
        <h1 class="text-4xl font-bold mb-12 text-white text-center font-poppins">Blog Posts</h1>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>
                                        <?php get_template_part('template-parts/post-card'); ?>
                <?php endwhile; ?>
            <?php else : ?>
                <p class="text-gray-400 col-span-full text-center">No posts found.</p>
            <?php endif; ?>
        </div>

        <div class="mt-12 text-white">
            <?php 
            $pagination_links = paginate_links(array(
                'type' => 'array',
                'prev_text' => __('&laquo; Previous'),
                'next_text' => __('Next &raquo;'),
            ));

            if ($pagination_links) {
                echo '<nav class="flex justify-center">';
                echo '<ul class="flex space-x-2">';
                foreach ($pagination_links as $link) {
                    echo '<li>' . str_replace('page-numbers', 'page-numbers bg-gray-800/50 border border-gray-700 px-4 py-2 rounded-md hover:bg-blue-600 transition-colors duration-300', $link) . '</li>';
                }
                echo '</ul>';
                echo '</nav>';
            }
            ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>
