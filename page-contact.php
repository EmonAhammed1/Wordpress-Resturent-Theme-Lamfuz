<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/**
 * Template Name: Contact
 */
get_header();
?>
<main id="primary" class="site-main">
        
        <!-- Hero Banner -->
        <section class="hero-section hero-about" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/Space-1_16-9_Side.webp'); height: 60vh; min-height: 400px; display: flex; align-items: flex-end; padding: 4rem 0;">
            <div class="hero-overlay"></div>
            <div class="about-container" style="width: 100%; position: relative; z-index: 10;">
                <div class="about-hero-content">
                    <h1 class="about-hero-title">KONTAKT</h1>
                </div>
            </div>
        </section>

        <!-- Contact Info Section -->
        <section class="contact-info-section" style="background-color: #fff8e6; padding: 6rem 2rem;">

            <!-- Full Width Heading -->
            <h2 class="contact-main-title">
                <span class="show-da">KONTAKT LAMFUZ –<br class="mobile-br">VI ER KLAR TIL AT HJÆLPE DIG</span>
                <span class="show-en notranslate">Contact Lamfuz -<br class="mobile-br">We're Ready to Help</span>
            </h2>

        </section>

        <!-- Map Section -->
        <section class="contact-map-section" style="width: 100%; height: 500px; background-color: #ddd;">
            <iframe src="https://maps.google.com/maps?q=Lamfuz%2C%20Turesensgade%206%2C%201368%20K%C3%B8benhavn&t=&z=17&ie=UTF8&iwloc=&output=embed" width="100%" height="100%" style="border:0; filter: grayscale(30%) opacity(0.9); display: block;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </section>

    </main>
<?php get_footer(); ?>




