<?php
if (! function_exists('chessbox_setup') ) :
    /**
     * Chessbox Setup
     *
     * Sets up the theme defaults and registers various WP features.
     */
    function chessbox_setup()
    {
        // Add RSS feed links to <head> for posts and comments.
        add_theme_support('automatic-feed-links');

        // Enable support for Post Thumbnails, and declare two sizes.
        add_theme_support('post-thumbnails');
        
        // This theme uses wp_nav_menu() in two locations.
        register_nav_menus(
            array(
            'primary'   => __('Top primary menu', 'chessbox'),
            'secondary' => __('Secondary menu in left sidebar', 'chessbox'),
            ) 
        );

        /*
        * Switch default core markup for search form, comment form, and comments
        * to output valid HTML5.
        */
        add_theme_support(
            'html5', array(
            'search-form', 'comment-form', 'comment-list',
            ) 
        );

        /*
        * Enable support for Post Formats.
        * See http://codex.wordpress.org/Post_Formats
        */
        add_theme_support(
            'post-formats', array(
            'aside', 'image', 'video', 'audio', 'quote', 'link', 'gallery',
            ) 
        );

        // This theme allows users to set a custom background.
        add_theme_support(
            'custom-background', apply_filters(
                'chessbox_custom_background_args', array(
                'default-color' => 'e7e7e7',
                ) 
            ) 
        );

        // Add support for featured content.
        add_theme_support(
            'featured-content', array(
            'featured_content_filter' => 'chessbox_get_featured_posts',
            'max_posts' => 6,
            ) 
        );
        
            // Add suport for HTML5 Search form
            add_theme_support('html5', array( 'search-form' ));
    }
endif; // chessbox_setup
add_action('after_setup_theme', 'chessbox_setup');

/**
 * Register Footer Sidebar
 */
function chessbox_widgets_init()
{
    register_sidebar(
        array(
        'name'          => __('Footer Widget Area', 'chessbox'),
        'id'            => 'sidebar-1',
        'description'   => __('Appears in the footer section of the site.', 'chessbox'),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
        ) 
    );
        
        register_sidebar(
            array(
            'name'          => __('Content Sidebar', 'chessbox'),
            'id'            => 'sidebar-2',
            'description'   => __('Additional sidebar that appears at the bottom of category-anime-manga.', 'chessbox'),
            'before_widget' => '<aside id="%1$s" class="widget %2$s">',
            'after_widget'  => '</aside>',
            'before_title'  => '<h2 class="widget-title">',
            'after_title'   => '</h2>',
            ) 
        );
        
    register_sidebar(
        array(
        'name'          => __('Content Sidebar', 'chessbox'),
        'id'            => 'sidebar-3',
        'description'   => __('Additional sidebar that appears at the bottom of category-film-tv.', 'chessbox'),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
        ) 
    );
                
        register_sidebar(
            array(
            'name'          => __('Content Sidebar', 'chessbox'),
            'id'            => 'sidebar-4',
            'description'   => __('Additional sidebar that appears at the bottom of category-musik.', 'chessbox'),
            'before_widget' => '<aside id="%1$s" class="widget %2$s">',
            'after_widget'  => '</aside>',
            'before_title'  => '<h2 class="widget-title">',
            'after_title'   => '</h2>',
            ) 
        );
                        
        register_sidebar(
            array(
            'name'          => __('Content Sidebar', 'chessbox'),
            'id'            => 'sidebar-5',
            'description'   => __('Additional sidebar that appears at the bottom of category-spel.', 'chessbox'),
            'before_widget' => '<aside id="%1$s" class="widget %2$s">',
            'after_widget'  => '</aside>',
            'before_title'  => '<h2 class="widget-title">',
            'after_title'   => '</h2>',
            ) 
        );
}
add_action('widgets_init', 'chessbox_widgets_init');

/**
 * Custom fonts via Google Fonts
 */
function load_custom_fonts()
{
    wp_register_style('googleFonts', 'http://fonts.googleapis.com/css?family=Open+Sans|Vollkorn');
    wp_enqueue_style('googleFonts');
}
add_action('wp_print_styles', 'load_custom_fonts');

/**
 * CSS & Javascript Enqueued
 */
function chessbox_scripts()
{
    wp_enqueue_style('style', get_stylesheet_uri());
    wp_enqueue_script('custom', get_template_directory_uri().'/js/custom.js');
}
add_action('wp_enqueue_scripts', 'chessbox_scripts');

/**
 * Changes the title in <head> depending on where you are.
 */
function chessbox_wp_title( $title, $sep )
{
    global $paged, $page;

    if (is_feed() ) {
        return $title;
    }

    // Add the site name.
    $title .= get_bloginfo('name');

    // Add the site description for the home/front page.
    $site_description = get_bloginfo('description', 'display');
    if ($site_description && ( is_home() || is_front_page() ) ) {
        $title = "$title $sep $site_description";
    }

    // Add a page number if necessary.
    if ($paged >= 2 || $page >= 2 ) {
        $title = "$title $sep " . sprintf(__('Page %s', 'chessbox'), max($paged, $page));
    }

    return $title;
}
add_filter('wp_title', 'chessbox_wp_title', 10, 2);

/**
 * Excerpt code fixes: Display less words than default. Display text instead of [...] on excerpt.
 */

function custom_excerpt_length( $length )
{
    return 30;
}
add_filter('excerpt_length', 'custom_excerpt_length', 999);

function new_excerpt_more( $more )
{
    return ' <a class="read-more" href="'. get_permalink(get_the_ID()) . '">' . __('Läs vidare', 'chessbox') . '</a>';
}
add_filter('excerpt_more', 'new_excerpt_more');

// Custom template tags for this theme.
require get_template_directory() . '/inc/template-tags.php';

function chessbox_load_theme_textdomain()
{
    load_theme_textdomain('chessbox', get_template_directory() . '/languages');
}
add_action('after_setup_theme', 'chessbox_load_theme_textdomain');
