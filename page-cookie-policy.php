<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/**
 * Template Name: Cookie Policy
 */
get_header(); ?>

<main id="primary" class="site-main" style="background-color: #fff8e6;">

    <!-- HERO SECTION -->
    <section class="about-hero-section menu-hero-section">
        <div class="about-hero-bg">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Dish-3_16-9_Above.webp" alt="Cookie Policy">
            <div class="about-hero-overlay menu-hero-overlay"></div>
        </div>
        <div class="about-container" style="width: 100%; position: relative; z-index: 10;">
            <div class="about-hero-content">
                <h1 class="about-hero-title">
                    <span class="show-da">COOKIEPOLITIK</span>
                    <span class="show-en notranslate">COOKIE POLICY</span>
                </h1>
            </div>
        </div>
    </section>

    <!-- COOKIE POLICY CONTENT SECTION -->
    <section class="cookie-policy-section" style="padding: 5rem 1.5rem 6rem; background-color: #fff8e6;">
        <div class="cookie-policy-container" style="max-width: 860px; margin: 0 auto; color: #b3522a; font-family: var(--font-body, 'Inter', sans-serif); font-size: 1.05rem; line-height: 1.8;">

            <!-- INTRO PARAGRAPH -->
            <div class="cookie-intro-box" style="margin-bottom: 2.5rem;">
                <p>This cookie policy explains how <strong>Lamfuz</strong> uses cookies on our website. We use cookies to ensure functionality, analyze traffic and &ndash; in some cases &ndash; for marketing and improving the user experience.</p>
            </div>

            <!-- SECTION 1 -->
            <div class="cookie-block" style="margin-bottom: 2.5rem;">
                <h2 style="color: #b3522a; font-family: var(--font-heading, 'Playfair Display', serif); font-size: 1.35rem; font-weight: 700; text-transform: uppercase; margin-bottom: 0.75rem; letter-spacing: 0.03em;">
                    1. Hvad er cookies?
                </h2>
                <p>Cookies are small text files that are stored on your computer or device when you visit a website. They enable us to recognize your device, remember your preferences and create a more personalized experience the next time you visit Lamfuz.dk.</p>
            </div>

            <!-- SECTION 2 -->
            <div class="cookie-block" style="margin-bottom: 2.5rem;">
                <h2 style="color: #b3522a; font-family: var(--font-heading, 'Playfair Display', serif); font-size: 1.35rem; font-weight: 700; text-transform: uppercase; margin-bottom: 0.75rem; letter-spacing: 0.03em;">
                    2. Hvilke typer cookies bruger vi?
                </h2>
                
                <ul style="list-style-type: disc; padding-left: 1.5rem; margin-top: 0.5rem; display: flex; flex-direction: column; gap: 0.75rem;">
                    <li><strong>Necessary cookies:</strong> Ensures that the website functions properly (e.g. navigation and booking forms).</li>
                    <li><strong>Preference cookies:</strong> Remember your choices and settings to give you a more tailored experience.</li>
                    <li><strong>Statistical cookies:</strong> Help us understand how visitors use the site so we can improve our content.</li>
                    <li><strong>Marketing cookies:</strong> Used in some cases to display relevant offers or campaigns via, for example, Google or social media.</li>
                </ul>
            </div>

            <!-- SECTION 3 -->
            <div class="cookie-block" style="margin-bottom: 2.5rem;">
                <h2 style="color: #b3522a; font-family: var(--font-heading, 'Playfair Display', serif); font-size: 1.35rem; font-weight: 700; text-transform: uppercase; margin-bottom: 0.75rem; letter-spacing: 0.03em;">
                    3. Samtykke
                </h2>
                <p>When you first visit Lamfuz.dk, we ask for your consent to the use of cookies. You can change or withdraw your consent at any time via our cookie settings at the bottom of the page.</p>
            </div>

            <!-- SECTION 4 -->
            <div class="cookie-block" style="margin-bottom: 2.5rem;">
                <h2 style="color: #b3522a; font-family: var(--font-heading, 'Playfair Display', serif); font-size: 1.35rem; font-weight: 700; text-transform: uppercase; margin-bottom: 0.75rem; letter-spacing: 0.03em;">
                    4. Sletning af cookies
                </h2>
                <p>You can always delete cookies from your browser. How you do this depends on which browser you use. Read more here: <a href="https://minecookies.org/cookiehaandtering" target="_blank" rel="noopener noreferrer" style="color: #b3522a; text-decoration: underline;">minecookies.org/cookiehandtering</a></p>
            </div>

            <!-- SECTION 5 -->
            <div class="cookie-block" style="margin-bottom: 2.5rem;">
                <h2 style="color: #b3522a; font-family: var(--font-heading, 'Playfair Display', serif); font-size: 1.35rem; font-weight: 700; text-transform: uppercase; margin-bottom: 0.75rem; letter-spacing: 0.03em;">
                    5. Kontakt
                </h2>
                <p style="margin-bottom: 1rem;">If you have any questions about this cookie policy, you are always welcome to contact us:</p>
                
                <div style="line-height: 1.7; color: #b3522a;">
                    <strong>Lamfuz</strong><br>
                    Turesensgade 6<br>
                    1368 Copenhagen K, Denmark<br>
                    Telephone: <a href="tel:+4570605657" style="color: #b3522a; text-decoration: underline;">+45 70 60 56 57</a><br>
                    E-mail: <a href="mailto:info@lamfuz.com" style="color: #b3522a; text-decoration: underline;">info@lamfuz.com</a>
                </div>
            </div>

            <!-- SECTION 6 -->
            <div class="cookie-block" style="margin-bottom: 1rem;">
                <h2 style="color: #b3522a; font-family: var(--font-heading, 'Playfair Display', serif); font-size: 1.35rem; font-weight: 700; text-transform: uppercase; margin-bottom: 0.75rem; letter-spacing: 0.03em;">
                    6. Opdateringer
                </h2>
                <p>We may change this cookie policy at any time. The latest version will always be available on the website.<br><span style="font-size: 0.94rem; opacity: 0.9;">Last updated: <strong>October 2025</strong>.</span></p>
            </div>

        </div>
    </section>

</main>

<?php get_footer(); ?>
