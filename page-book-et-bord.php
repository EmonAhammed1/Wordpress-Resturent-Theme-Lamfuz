<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/**
 * Template Name: Book et bord
 */
get_header(); ?>

<main id="primary" class="site-main">

    <!-- HERO SECTION -->
    <section class="about-hero-section menu-hero-section">
        <div class="about-hero-bg">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Space-1_16-9_Side.webp" alt="Book et bord">
            <div class="about-hero-overlay menu-hero-overlay"></div>
        </div>
        <div class="about-container" style="width: 100%; position: relative; z-index: 10;">
            <div class="about-hero-content">
                <h1 class="about-hero-title">
                    <span class="show-da">BOOK ET BORD</span>
                    <span class="show-en notranslate">BOOK A TABLE</span>
                </h1>
            </div>
        </div>
    </section>

    <!-- BOOKING CONTENT SECTION -->
    <section class="booking-section" style="padding: 6rem 0; background-color: #fff8e6;">
        <div class="booking-container">
            <div class="booking-widget">
                <iframe src="https://booking.favouritetable.com/?SiteCode=2125&skin=lamfuz" width="100%" height="800" frameborder="0" scrolling="no" allowfullscreen></iframe>
            </div>
            <div class="booking-content">
                <h4 class="booking-subtitle">NEPALI KØKKEN MED SJÆL</h4>
                <div class="booking-image-wrap" style="margin: 1.5rem 0 2.5rem; overflow: hidden; border-radius: 0;">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Dish-3_16-9_Above.webp" alt="Nepali Food" style="width: 100%; display: block; height: auto;">
                </div>
                
                <h2 class="booking-title" style="text-transform: uppercase;">
                    <span class="show-da">
                        <span class="desktop-only-title">EN SMAG AF NEPAL &ndash;<br>SKABT MED KÆRLIGHED<br>OG TRADITION</span>
                        <span class="mobile-only-title">EN SMAG AF NEPAL &ndash; SKABT<br>MED KÆRLIGHED OG<br>TRADITION</span>
                    </span>
                    <span class="show-en notranslate">
                        <span class="desktop-only-title">A TASTE OF NEPAL &ndash;<br>CREATED WITH LOVE<br>AND TRADITION</span>
                        <span class="mobile-only-title">A TASTE OF NEPAL &ndash; CREATED<br>WITH LOVE AND<br>TRADITION</span>
                    </span>
                </h2>
                
                <p class="booking-text">
                    <span class="show-da">Hos Lamfuz mødes autentiske opskrifter, friskristede krydderier og lokale råvarer i en oplevelse, der bringer Himalayas varme smage til hjertet af København.</span>
                    <span class="show-en notranslate">At Lamfuz, authentic recipes, freshly roasted spices and local ingredients meet in an experience that brings the warm flavors of the Himalayas to the heart of Copenhagen.</span>
                </p>
            </div>
        </div>
    </section>

</main>

<?php get_footer(); ?>
