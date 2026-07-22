<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

function cmc_enqueue_scripts() {
    $theme_uri = get_template_directory_uri();
    $stylesheet_uri = get_stylesheet_uri();
    
    // Force cache bust to resolve persistent browser caching issues
    $cache_buster = time();

    wp_enqueue_style( 'cmc-main-style', $theme_uri . '/assets/css/main.css', array(), $cache_buster );
    wp_enqueue_style( 'cmc-style', $stylesheet_uri, array(), $cache_buster );
    wp_enqueue_script( 'cmc-main-js', $theme_uri . '/assets/js/main.js', array(), $cache_buster, true );
}
add_action( 'wp_enqueue_scripts', 'cmc_enqueue_scripts' );

// Automatically correct URL schemes for template directory and stylesheet to prevent mixed content blocking
function cmc_filter_template_directory_uri( $template_dir_uri ) {
    return set_url_scheme( $template_dir_uri );
}
add_filter( 'template_directory_uri', 'cmc_filter_template_directory_uri', 10, 1 );

function cmc_filter_stylesheet_uri( $stylesheet_uri ) {
    return set_url_scheme( $stylesheet_uri );
}
add_filter( 'stylesheet_uri', 'cmc_filter_stylesheet_uri', 10, 1 );

function cmc_theme_setup() {
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    
    // Add support for Block Editor styles so Gutenberg looks like the front-end
    add_theme_support( 'editor-styles' );
    // Enqueue the main css to the editor
    add_editor_style( 'assets/css/main.css' );
}
add_action( 'after_setup_theme', 'cmc_theme_setup' );


function cmc_force_page_templates($template) {
    if (is_page('contact') || is_page('kontakt')) {
        $new_template = locate_template(array('page-contact.php'));
        if ('' != $new_template) {
            return $new_template;
        }
    }
    if (is_page('about') || is_page('om-lamfuz')) {
        $new_template = locate_template(array('page-about.php'));
        if ('' != $new_template) {
            return $new_template;
        }
    }
    if (is_page('menu')) {
        $new_template = locate_template(array('page-menu.php'));
        if ('' != $new_template) {
            return $new_template;
        }
    }
    if (is_page('blog')) {
        $new_template = locate_template(array('page-blog.php'));
        if ('' != $new_template) {
            return $new_template;
        }
    }
    if (is_page('cookiepolicy') || is_page('cookie-policy') || is_page('cookiepolitik')) {
        $new_template = locate_template(array('page-cookiepolicy.php'));
        if ('' != $new_template) {
            return $new_template;
        }
    }
    return $template;
}
add_filter('template_include', 'cmc_force_page_templates', 99);

// Helper function to resolve page URLs dynamically based on available slugs (supports English/Danish fallbacks)
function lamfuz_get_page_url($slugs) {
    if (!is_array($slugs)) {
        $slugs = array($slugs);
    }
    foreach ($slugs as $slug) {
        $page = get_page_by_path($slug);
        if ($page) {
            return get_permalink($page->ID);
        }
    }
    return home_url('/' . $slugs[0]);
}

function cmc_register_menus() {
    register_nav_menus(
        array(
            'primary-menu' => __( 'Primary Menu', 'lamfuz' ),
            'mobile-menu'  => __( 'Mobile Menu', 'lamfuz' ),
            'footer-menu'  => __( 'Footer Menu', 'lamfuz' )
        )
    );
}
add_action( 'init', 'cmc_register_menus' );

function add_menu_link_class( $atts, $item, $args ) {
    if ( $args->theme_location == 'primary-menu' ) {
        $atts['class'] = 'hero-nav-link';
    } elseif ( $args->theme_location == 'mobile-menu' ) {
        $atts['class'] = 'mobile-nav-link';
    }
    return $atts;
}
add_filter( 'nav_menu_link_attributes', 'add_menu_link_class', 1, 3 );

// Custom SEO Page Title for Contact Page
function cmc_custom_seo_title( $title ) {
    if ( is_page_template( 'page-contact.php' ) || is_page( 'contact' ) ) {
        return 'Contact Lamfuz | Nepalese Restaurant Turesensgade, Copenhagen K';
    }
    return $title;
}
add_filter( 'pre_get_document_title', 'cmc_custom_seo_title', 50 );
