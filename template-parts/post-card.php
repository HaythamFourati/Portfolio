<article id="post-<?php the_ID(); ?>" <?php post_class('group bg-white border border-gray-200 rounded-3xl overflow-hidden hover:shadow-xl hover:border-gray-300 transition-all duration-300 flex flex-col'); ?>>
    <?php if (has_post_thumbnail()) : ?>
        <a href="<?php the_permalink(); ?>" class="block h-52 overflow-hidden">
            <?php the_post_thumbnail('post-thumbnail', ['class' => 'w-full h-full object-cover group-hover:scale-105 transition-transform duration-500']); ?>
        </a>
    <?php else : ?>
        <a href="<?php the_permalink(); ?>" class="block h-52 bg-gradient-to-br from-violet-100 to-lime-100 flex items-center justify-center">
            <svg class="w-16 h-16 text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"/>
            </svg>
        </a>
    <?php endif; ?>
    <div class="p-6 flex flex-col flex-grow">
        <div class="flex items-center gap-3 mb-3">
            <span class="text-sm text-gray-400"><?php echo get_the_date(); ?></span>
            <span class="w-1 h-1 bg-gray-300 rounded-full"></span>
            <span class="text-sm text-violet-600 font-medium"><?php the_category(', '); ?></span>
        </div>
        <h2 class="text-xl font-semibold text-gray-900 mb-3 flex-grow leading-snug" style="font-family: 'Outfit', sans-serif;">
            <a href="<?php the_permalink(); ?>" class="hover:text-violet-600 transition-colors duration-300"><?php the_title(); ?></a>
        </h2>
        <p class="text-gray-500 text-sm mb-4 line-clamp-2">
            <?php echo wp_trim_words(get_the_excerpt(), 20, '...'); ?>
        </p>
        <a href="<?php the_permalink(); ?>" class="inline-flex items-center gap-2 text-sm font-semibold text-gray-900 hover:text-violet-600 transition-colors duration-300 mt-auto group/link">
            Read Article 
            <svg class="w-4 h-4 group-hover/link:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
            </svg>
        </a>
    </div>
</article>
