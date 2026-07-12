<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#b2512b">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preload" href="<?php echo get_template_directory_uri(); ?>/assets/fonts/Amagro-bold.ttf" as="font" type="font/ttf" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,700;1,400&family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>

    <!-- Top Header Navigation -->
    <header class="hero-header" id="siteHeader">
        <div class="header-container">
            <div class="header-left">
                <a href="<?php echo home_url('/'); ?>" class="hero-logo">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Lamfuz-Logo-Tagline-White-RGB-copy (2) - Copy.webp" class="logo-white" alt="Lamfuz Nepali Cuisine">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/output-onlinepngtools (1) - Copy.webp" class="logo-color" alt="Lamfuz Nepali Cuisine">
                </a>
                <nav class="hero-nav">
                    <?php
                    if ( has_nav_menu( 'primary-menu' ) ) {
                        wp_nav_menu( array(
                            'theme_location' => 'primary-menu',
                            'container'      => false,
                            'items_wrap'     => '%3$s', // removes the <ul> wrapper
                        ) );
                    } else {
                    ?>
                        <a href="<?php echo home_url('/'); ?>" class="hero-nav-link <?php echo is_front_page() ? 'active' : ''; ?>">FORSIDE</a>
                        <a href="<?php echo lamfuz_get_page_url('menu'); ?>" class="hero-nav-link <?php echo is_page('menu') ? 'active' : ''; ?>">MENU</a>
                        <a href="<?php echo lamfuz_get_page_url(array('about', 'om-lamfuz')); ?>" class="hero-nav-link <?php echo is_page('about') || is_page('om-lamfuz') ? 'active' : ''; ?>">OM LAMFUZ</a>
                        <a href="<?php echo lamfuz_get_page_url('blog'); ?>" class="hero-nav-link <?php echo is_page('blog') || is_page_template('page-blog.php') || (is_home() && !is_front_page()) || is_singular('post') ? 'active' : ''; ?>">BLOG</a>
                        <a href="<?php echo lamfuz_get_page_url(array('contact', 'kontakt')); ?>" class="hero-nav-link <?php echo is_page('contact') || is_page('kontakt') ? 'active' : ''; ?>">KONTAKT</a>
                    <?php } ?>
                </nav>
            </div>

            <div class="hero-header-right">
                <div class="lang-selector notranslate">
                    <span class="lang-da-btn active">
                        <svg class="flag-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 37 28" style="vertical-align: middle; display: inline-block; border-radius: 1px; box-shadow: 0 1px 2px rgba(0,0,0,0.2);"><rect width="37" height="28" fill="#C8102E"/><path d="M12 0h4v28h-4zM0 12h37v4H0z" fill="#FFF"/></svg>
                    </span>
                    <span class="lang-or">or</span>
                    <span class="lang-en-btn">
                        <svg class="flag-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 50 30" style="vertical-align: middle; display: inline-block; border-radius: 1px; box-shadow: 0 1px 2px rgba(0,0,0,0.2);"><rect width="50" height="30" fill="#012169"/><path d="M0 0 L50 30 M0 30 L50 0" stroke="#fff" stroke-width="6"/><path d="M0 0 L50 30 M0 30 L50 0" stroke="#C8102E" stroke-width="2"/><path d="M25 0 V30 M0 15 H50" stroke="#fff" stroke-width="10"/><path d="M25 0 V30 M0 15 H50" stroke="#C8102E" stroke-width="6"/></svg>
                    </span>
                </div>
                <a href="<?php echo home_url('/book-et-bord'); ?>" class="btn-header-book">
                    <span class="show-da">BOOK ET BORD</span>
                    <span class="show-en notranslate">BOOK A TABLE</span>
                </a>

                <button class="mobile-menu-toggle" id="mobileMenuToggle" aria-label="Toggle Menu">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
            </div>
        </div>
    </header>

    <!-- Mobile Navigation Drawer Overlay -->
    <div class="mobile-nav-overlay" id="mobileNavOverlay">
        <div class="mobile-nav-header">
            <a href="<?php echo home_url('/'); ?>" class="hero-logo">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Lamfuz-Logo-Tagline-White-RGB-copy (2) - Copy.webp" class="logo-white" alt="Lamfuz Nepali Cuisine">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/output-onlinepngtools (1) - Copy.webp" class="logo-color" alt="Lamfuz Nepali Cuisine">
            </a>
            <button class="mobile-menu-close" id="mobileMenuClose" aria-label="Close Menu">
                <svg viewBox="0 0 24 24" width="24" height="24">
                    <line x1="18" y1="6" x2="6" y2="18"></line>
                    <line x1="6" y1="6" x2="18" y2="18"></line>
                </svg>
            </button>
        </div>

        <div class="mobile-nav-links">
            <?php
            if ( has_nav_menu( 'mobile-menu' ) ) {
                wp_nav_menu( array(
                    'theme_location' => 'mobile-menu',
                    'container'      => false,
                    'items_wrap'     => '%3$s', // removes the <ul> wrapper
                ) );
            } else {
            ?>
                <a href="<?php echo home_url('/'); ?>" class="mobile-nav-link <?php echo is_front_page() ? 'active' : ''; ?>">FORSIDE</a>
                <a href="<?php echo lamfuz_get_page_url('menu'); ?>" class="mobile-nav-link <?php echo is_page('menu') ? 'active' : ''; ?>">MENU</a>
                <a href="<?php echo lamfuz_get_page_url(array('about', 'om-lamfuz')); ?>" class="mobile-nav-link <?php echo is_page('about') || is_page('om-lamfuz') ? 'active' : ''; ?>">OM LAMFUZ</a>
                <a href="<?php echo lamfuz_get_page_url('blog'); ?>" class="mobile-nav-link <?php echo is_page('blog') || is_page_template('page-blog.php') || (is_home() && !is_front_page()) || is_singular('post') ? 'active' : ''; ?>">BLOG</a>
                <a href="<?php echo lamfuz_get_page_url(array('contact', 'kontakt')); ?>" class="mobile-nav-link <?php echo is_page('contact') || is_page('kontakt') ? 'active' : ''; ?>">KONTAKT</a>
            <?php } ?>
        </div>

        <div class="mobile-nav-footer">
            <div class="mobile-lang-selector">
                <span class="lang-da-btn active">
                    <svg class="flag-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 37 28" style="vertical-align: middle; display: inline-block; border-radius: 1px; box-shadow: 0 1px 2px rgba(0,0,0,0.2);"><rect width="37" height="28" fill="#C8102E"/><path d="M12 0h4v28h-4zM0 12h37v4H0z" fill="#FFF"/></svg>
                </span>
                <span class="lang-or">or</span>
                <span class="lang-en-btn">
                    <svg class="flag-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 50 30" style="vertical-align: middle; display: inline-block; border-radius: 1px; box-shadow: 0 1px 2px rgba(0,0,0,0.2);"><rect width="50" height="30" fill="#012169"/><path d="M0 0 L50 30 M0 30 L50 0" stroke="#fff" stroke-width="6"/><path d="M0 0 L50 30 M0 30 L50 0" stroke="#C8102E" stroke-width="2"/><path d="M25 0 V30 M0 15 H50" stroke="#fff" stroke-width="10"/><path d="M25 0 V30 M0 15 H50" stroke="#C8102E" stroke-width="6"/></svg>
                </span>
            </div>
            <a href="<?php echo home_url('/book-et-bord'); ?>" class="btn-mobile-book">
                <span class="show-da">BOOK ET BORD</span>
                <span class="show-en notranslate">BOOK A TABLE</span>
            </a>
        </div>
    </div>

    <!-- Google Translate widget is loaded in footer.php -->
