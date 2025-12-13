<?php get_header(); ?>

<!-- Single Post Hero -->
<section class="bg-[#FAFAFA] pt-32 pb-12 relative overflow-hidden">
    <!-- Background decoration -->
    <div class="absolute top-0 right-0 w-96 h-96 bg-violet-100/50 rounded-full blur-3xl -translate-y-1/2"></div>
    <div class="absolute bottom-0 left-0 w-80 h-80 bg-lime-100/50 rounded-full blur-3xl translate-y-1/2"></div>
    
    <div class="max-w-4xl mx-auto px-4 relative z-10">
        <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <!-- Post Header -->
                    <header class="text-center mb-12">
                        <div class="flex items-center justify-center gap-3 mb-6">
                            <span class="inline-block bg-violet-100 text-violet-700 text-sm font-semibold px-4 py-2 rounded-full">
                                <?php the_category(', '); ?>
                            </span>
                        </div>
                        <h1 class="text-3xl md:text-4xl lg:text-5xl font-medium text-gray-900 mb-6 leading-tight" style="font-family: 'Outfit', sans-serif;">
                            <?php the_title(); ?>
                        </h1>
                        <div class="flex items-center justify-center gap-4 text-gray-500 text-sm">
                            <span class="flex items-center gap-2">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                                </svg>
                                <?php echo get_the_date(); ?>
                            </span>
                            <span class="w-1 h-1 bg-gray-300 rounded-full"></span>
                            <span class="flex items-center gap-2">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                                </svg>
                                <?php the_author(); ?>
                            </span>
                            <span class="w-1 h-1 bg-gray-300 rounded-full"></span>
                            <span class="flex items-center gap-2">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                </svg>
                                <?php echo ceil(str_word_count(strip_tags(get_the_content())) / 200); ?> min read
                            </span>
                        </div>
                    </header>

                    <!-- Featured Image -->
                    <?php if (has_post_thumbnail()) : ?>
                        <div class="mb-12 rounded-3xl overflow-hidden shadow-2xl">
                            <?php the_post_thumbnail('large', ['class' => 'w-full h-auto']); ?>
                        </div>
                    <?php endif; ?>
</section>

<!-- Post Content -->
<section class="bg-white py-12">
    <div class="max-w-3xl mx-auto px-4">
                    <!-- Article Content -->
                    <div class="prose prose-lg max-w-none 
                        prose-headings:font-medium prose-headings:text-gray-900
                        prose-h2:text-2xl prose-h2:mt-12 prose-h2:mb-4
                        prose-h3:text-xl prose-h3:mt-8 prose-h3:mb-3
                        prose-p:text-gray-600 prose-p:leading-relaxed
                        prose-a:text-violet-600 prose-a:no-underline hover:prose-a:underline
                        prose-strong:text-gray-900
                        prose-blockquote:border-l-violet-500 prose-blockquote:bg-violet-50 prose-blockquote:py-4 prose-blockquote:px-6 prose-blockquote:rounded-r-2xl prose-blockquote:not-italic
                        prose-code:bg-gray-100 prose-code:px-2 prose-code:py-1 prose-code:rounded-lg prose-code:text-violet-600 prose-code:before:content-none prose-code:after:content-none
                        prose-pre:bg-gray-900 prose-pre:rounded-2xl
                        prose-img:rounded-2xl prose-img:shadow-lg
                        prose-ul:text-gray-600 prose-ol:text-gray-600
                        prose-li:marker:text-violet-500"
                        style="font-family: 'Inter', sans-serif;">
                        <?php the_content(); ?>
                    </div>

                    <!-- Tags -->
                    <?php if (has_tag()) : ?>
                        <div class="mt-12 pt-8 border-t border-gray-200">
                            <div class="flex flex-wrap items-center gap-3">
                                <span class="text-gray-500 text-sm font-medium">Tags:</span>
                                <?php 
                                $tags = get_the_tags();
                                if ($tags) {
                                    foreach ($tags as $tag) {
                                        echo '<a href="' . get_tag_link($tag->term_id) . '" class="bg-gray-100 text-gray-600 text-sm px-4 py-2 rounded-full hover:bg-violet-100 hover:text-violet-700 transition-colors duration-300">' . $tag->name . '</a>';
                                    }
                                }
                                ?>
                            </div>
                        </div>
                    <?php endif; ?>

                    <!-- Post Navigation -->
                    <nav class="mt-12 pt-8 border-t border-gray-200">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <?php 
                            $prev_post = get_previous_post();
                            $next_post = get_next_post();
                            ?>
                            
                            <?php if ($prev_post) : ?>
                                <a href="<?php echo get_permalink($prev_post); ?>" class="group p-6 bg-gray-50 rounded-2xl hover:bg-gray-100 transition-colors duration-300">
                                    <span class="text-sm text-gray-400 flex items-center gap-2 mb-2">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16l-4-4m0 0l4-4m-4 4h18"/>
                                        </svg>
                                        Previous Article
                                    </span>
                                    <span class="text-gray-900 font-medium group-hover:text-violet-600 transition-colors duration-300 line-clamp-2" style="font-family: 'Outfit', sans-serif;">
                                        <?php echo get_the_title($prev_post); ?>
                                    </span>
                                </a>
                            <?php else : ?>
                                <div></div>
                            <?php endif; ?>
                            
                            <?php if ($next_post) : ?>
                                <a href="<?php echo get_permalink($next_post); ?>" class="group p-6 bg-gray-50 rounded-2xl hover:bg-gray-100 transition-colors duration-300 text-right">
                                    <span class="text-sm text-gray-400 flex items-center justify-end gap-2 mb-2">
                                        Next Article
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                                        </svg>
                                    </span>
                                    <span class="text-gray-900 font-medium group-hover:text-violet-600 transition-colors duration-300 line-clamp-2" style="font-family: 'Outfit', sans-serif;">
                                        <?php echo get_the_title($next_post); ?>
                                    </span>
                                </a>
                            <?php endif; ?>
                        </div>
                    </nav>

                </article>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>
</section>

<?php get_footer(); ?>