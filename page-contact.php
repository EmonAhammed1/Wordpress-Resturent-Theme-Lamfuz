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

        <!-- Main Contact Section -->
        <section class="contact-info-section" style="background-color: #fff8e6; padding: 5rem 2rem;">

            <div class="contact-grid-container" style="max-width: 1100px; margin: 0 auto; display: flex; gap: 3.5rem; align-items: stretch; justify-content: center; flex-wrap: wrap;">
                
                <!-- Left Column: Google Map -->
                <div class="contact-map-column" style="flex: 1; min-width: 320px; max-width: 520px; display: flex; flex-direction: column;">
                    <div style="width: 100%; height: 100%; min-height: 480px; box-shadow: 0 12px 35px rgba(0,0,0,0.06); border: 1px solid rgba(178, 81, 43, 0.15); overflow: hidden; background-color: #fff;">
                        <iframe src="https://maps.google.com/maps?q=Lamfuz%2C%20Turesensgade%206%2C%201368%20K%C3%B8benhavn&t=&z=17&ie=UTF8&iwloc=&output=embed" width="100%" height="100%" style="border:0; min-height: 480px; width: 100%; height: 100%; filter: grayscale(15%) opacity(0.95); display: block;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>

                <!-- Right Column: Content & Contact Details -->
                <div class="contact-content-column" style="flex: 1; min-width: 320px; max-width: 520px; color: #b2512b; display: flex; flex-direction: column; justify-content: space-between;">
                    <div>
                        <h2 style="font-family: var(--font-heading); font-size: clamp(22px, 3.5vw, 32px); color: #b2512b; margin-top: 0; margin-bottom: 1.5rem; text-transform: uppercase; letter-spacing: 1px;">
                            <span class="show-da">FIND OS HER</span>
                            <span class="show-en notranslate">FIND US HERE</span>
                        </h2>

                        <div class="show-da">
                            <p style="margin-bottom: 1.2rem; font-family: var(--font-body); line-height: 1.8; font-size: 16px;">Velkommen til Lamfuz – hvor smag, hygge og gæstfrihed går hånd i hånd. Har du spørgsmål, vil du reservere bord, bestille take-away eller høre mere om vores catering? Så er du altid velkommen til at tage fat i os – vi elsker at høre fra dig!</p>
                            <p style="margin-bottom: 1.5rem; font-family: var(--font-body); line-height: 1.8; font-size: 16px;">Uanset om du skriver, ringer eller kigger forbi, står vi klar med åbne arme og duften af frisklavet nepalesisk mad.</p>
                        </div>
                        <div class="show-en notranslate">
                            <p style="margin-bottom: 1.2rem; font-family: var(--font-body); line-height: 1.8; font-size: 16px;">Welcome to Lamfuz, where flavour, hygge and hospitality go hand in hand. Whether you have a question, want to reserve a table, order takeaway, or ask about catering for your next event, we would love to hear from you.</p>
                            <p style="margin-bottom: 1.5rem; font-family: var(--font-body); line-height: 1.8; font-size: 16px;">Whether you write, call, or simply walk in, we are always ready to welcome you with open arms and the smell of freshly cooked Nepalese food.</p>
                        </div>

                        <!-- Info Box -->
                        <div style="background-color: #fff; padding: 1.5rem 1.8rem; border-left: 4px solid #b2512b; margin-bottom: 1.8rem; box-shadow: 0 6px 20px rgba(0,0,0,0.04);">
                            <div style="display: flex; align-items: center; gap: 0.8rem; margin-bottom: 0.8rem;">
                                <svg viewBox="0 0 24 24" width="20" height="20" stroke="#b3522a" stroke-width="2" fill="none"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>
                                <span style="font-family: var(--font-body); font-weight: 600; font-size: 15px;">Turesensgade 6, 1368 København K</span>
                            </div>
                            <div style="display: flex; align-items: center; gap: 0.8rem; margin-bottom: 0.8rem;">
                                <svg viewBox="0 0 24 24" width="20" height="20" stroke="#b3522a" stroke-width="2" fill="none"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
                                <a href="tel:+4570605657" style="color: #b2512b; text-decoration: none; font-weight: 600; font-size: 15px;">+45 70 60 56 57</a>
                            </div>
                            <div style="display: flex; align-items: center; gap: 0.8rem;">
                                <svg viewBox="0 0 24 24" width="20" height="20" stroke="#b3522a" stroke-width="2" fill="none"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg>
                                <span style="font-family: var(--font-body); font-weight: 600; font-size: 15px;">
                                    <span class="show-da">Man – Lør: 16:00 – 23:00 / 24:00 (Søn: Lukket)</span>
                                    <span class="show-en notranslate">Mon – Sat: 16:00 – 23:00 / 24:00 (Sun: Closed)</span>
                                </span>
                            </div>
                        </div>
                    </div>

                    <!-- Book Table Button -->
                    <div style="margin-top: 1rem;">
                        <a href="<?php echo home_url('/book-et-bord'); ?>" class="btn-hero-red" style="font-size: 0.9rem; padding: 1rem 2.5rem; display: inline-block;">
                            <span class="show-da">BOOK ET BORD</span>
                            <span class="show-en notranslate">BOOK A TABLE</span>
                        </a>
                    </div>
                </div>

            </div>

        </section>

    </main>
<?php get_footer(); ?>
