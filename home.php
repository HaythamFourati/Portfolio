<?php get_header(); ?>

<!-- Blog Hero Section -->
<section class="bg-[#FAFAFA] pt-32 pb-16 relative overflow-hidden">
    <!-- Background decoration -->
    <div class="absolute top-0 right-0 w-96 h-96 bg-violet-100/50 rounded-full blur-3xl -translate-y-1/2"></div>
    <div class="absolute bottom-0 left-0 w-80 h-80 bg-lime-100/50 rounded-full blur-3xl translate-y-1/2"></div>
    
    <div class="max-w-7xl mx-auto px-4 relative z-10">
        <div class="text-center">
            <span class="inline-block bg-violet-100 text-violet-700 text-sm font-semibold px-4 py-2 rounded-full mb-4">BLOG</span>
            <h1 class="text-4xl md:text-5xl lg:text-6xl font-medium text-gray-900 mb-4" style="font-family: 'Outfit', sans-serif;">
                Latest Articles
            </h1>
            <p class="text-lg text-gray-500 max-w-2xl mx-auto">
                Thoughts, tutorials, and insights on web development, WordPress, and design.
            </p>
        </div>
    </div>
</section>

<!-- Blog Posts Grid -->
<section class="bg-white py-16">
    <div class="max-w-7xl mx-auto px-4">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>
                    <?php get_template_part('template-parts/post-card'); ?>
                <?php endwhile; ?>
            <?php else : ?>
                <p class="text-gray-500 col-span-full text-center py-12">No posts found.</p>
            <?php endif; ?>
        </div>

        <!-- Pagination -->
        <div class="mt-16">
            <?php 
            $pagination_links = paginate_links(array(
                'type' => 'array',
                'prev_text' => __('← Previous'),
                'next_text' => __('Next →'),
            ));

            if ($pagination_links) {
                echo '<nav class="flex justify-center">';
                echo '<ul class="flex items-center gap-2">';
                foreach ($pagination_links as $link) {
                    $is_current = strpos($link, 'current') !== false;
                    $classes = $is_current 
                        ? 'page-numbers bg-gray-900 text-white px-4 py-2 rounded-xl font-medium' 
                        : 'page-numbers bg-gray-100 text-gray-700 px-4 py-2 rounded-xl hover:bg-gray-200 transition-colors duration-300';
                    echo '<li>' . str_replace('page-numbers', $classes, $link) . '</li>';
                }
                echo '</ul>';
                echo '</nav>';
            }
            ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>
