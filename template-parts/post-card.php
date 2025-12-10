<article id="post-<?php the_ID(); ?>" <?php post_class('bg-gray-900/50 border border-gray-800 rounded-lg shadow-lg overflow-hidden transform hover:-translate-y-2 transition duration-300 flex flex-col'); ?>>
    <?php if (has_post_thumbnail()) : ?>
        <a href="<?php the_permalink(); ?>" class="block h-48 overflow-hidden">
            <?php the_post_thumbnail('post-thumbnail', ['class' => 'w-full h-full object-cover group-hover:scale-105 transition-transform duration-300']); ?>
        </a>
    <?php endif; ?>
    <div class="p-6 flex flex-col flex-grow">
        <div class="mb-4 text-sm text-gray-400">
            <span class="mr-2"><?php echo get_the_date(); ?></span>
            <span class="mr-2">•</span>
            <span><?php the_category(', '); ?></span>
        </div>
        <h2 class="text-2xl font-bold mb-4 text-white font-poppins flex-grow">
            <a href="<?php the_permalink(); ?>" class="hover:text-blue-400 transition-colors duration-300"><?php the_title(); ?></a>
        </h2>
        <div class="text-gray-400 mb-6">
            <?php the_excerpt(); ?>
        </div>
        <a href="<?php the_permalink(); ?>" class="text-blue-400 hover:text-blue-500 font-semibold mt-auto">Read More &rarr;</a>
    </div>
</article>
