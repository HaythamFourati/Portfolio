<?php

function boilerplate_load_assets() {
  wp_enqueue_script('ourmainjs', get_theme_file_uri('/build/index.js'), array('wp-element', 'react-jsx-runtime'), filemtime(get_theme_file_path('/build/index.js')), true);
  wp_enqueue_script('animations', get_theme_file_uri('/build/animations.js'), array(), filemtime(get_theme_file_path('/build/animations.js')), true);
  wp_enqueue_style('ourmaincss', get_theme_file_uri('/build/index.css'), array(), filemtime(get_theme_file_path('/build/index.css')));
  // Type system: General Sans (display) + Onest (body) + Geist Mono (labels).
  wp_enqueue_style('fontshare-general-sans', 'https://api.fontshare.com/v2/css?f[]=general-sans@300,400,500,600&display=swap', array(), null);
  wp_enqueue_style('google-fonts-onest-geist-mono', 'https://fonts.googleapis.com/css2?family=Onest:wght@300..600&family=Geist+Mono:wght@400;500&display=swap', array(), null);
}

add_action('wp_enqueue_scripts', 'boilerplate_load_assets');

function boilerplate_add_support() {
  add_theme_support('title-tag');
  add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'boilerplate_add_support');

// Add preconnect resource hints for Google Fonts
function boilerplate_add_google_fonts_preconnect($hints, $relation_type) {
    if ('preconnect' === $relation_type) {
        $hints[] = [
            'href' => 'https://fonts.googleapis.com',
        ];
        $hints[] = [
            'href' => 'https://fonts.gstatic.com',
            'crossorigin' => 'anonymous',
        ];
        $hints[] = [
            'href' => 'https://api.fontshare.com',
            'crossorigin' => 'anonymous',
        ];
    }
    return $hints;
}
add_filter('wp_resource_hints', 'boilerplate_add_google_fonts_preconnect', 10, 2);

// Control excerpt length
function custom_excerpt_length( $length ) {
    return 20;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

// Pill pagination shared by the blog index and archives.
function portfolio_pagination( $prev_text, $next_text ) {
    $links = paginate_links( array( 'type' => 'array', 'prev_text' => $prev_text, 'next_text' => $next_text ) );
    if ( ! $links ) {
        return;
    }
    echo '<nav class="mt-16 flex justify-center" aria-label="Pagination"><ul class="flex flex-wrap items-center gap-2 font-mono text-xs">';
    foreach ( $links as $link ) {
        $classes = strpos( $link, 'current' ) !== false
            ? 'page-numbers grid place-items-center min-w-10 h-10 px-4 rounded-full bg-ink text-canvas'
            : 'page-numbers grid place-items-center min-w-10 h-10 px-4 rounded-full border border-line text-muted hover:text-ink hover:border-line-hover transition-colors duration-300';
        echo '<li>' . str_replace( 'page-numbers', $classes, $link ) . '</li>';
    }
    echo '</ul></nav>';
}
