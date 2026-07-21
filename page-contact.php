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
        <section class="about-hero-section menu-hero-section">
            <div class="about-hero-bg">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Space-1_16-9_Side.webp" alt="Kontakt">
                <div class="about-hero-overlay menu-hero-overlay"></div>
            </div>
            <div class="about-container" style="width: 100%; position: relative; z-index: 10;">
                <div class="about-hero-content">
                    <h1 class="about-hero-title">
                        <span class="show-da">KONTAKT</span>
                        <span class="show-en notranslate">CONTACT</span>
                    </h1>
                </div>
            </div>
        </section>

        <!-- Section 1: Contact Details & Opening Hours -->
        <section class="contact-info-section" style="background-color: #fff8e6; padding: 5rem 2rem 4rem 2rem;">

            <!-- Full Width Heading -->
            <h2 class="contact-main-title">
                <span class="show-da">KONTAKT LAMFUZ –<br class="mobile-br">VI ER KLAR TIL AT HJÆLPE DIG</span>
                <span class="show-en notranslate">Contact Lamfuz -<br class="mobile-br">We're Ready to Help</span>
            </h2>

            <!-- Details Row (Text and Card) -->
            <div class="contact-details-row" style="max-width: 1050px; margin: 0 auto; display: flex; gap: 3.5rem; align-items: stretch; justify-content: center; flex-wrap: wrap;">
                
                <!-- Text Column -->
                <div class="contact-text-column" style="flex: 1; max-width: 500px; min-width: 320px; color: #b2512b; display: flex; flex-direction: column; justify-content: center; gap: 1.5rem;">
                    <div>
                        <div class="show-da">
                            <p style="margin-bottom: 1.2rem; font-family: var(--font-body); line-height: 1.8; font-size: 17px;">Velkommen til Lamfuz – hvor smag, hygge og gæstfrihed går hånd i hånd. Har du spørgsmål, vil du reservere bord, bestille take-away eller høre mere om vores catering? Så er du altid velkommen til at tage fat i os – vi elsker at høre fra dig!</p>
                            <p style="margin-bottom: 0; font-family: var(--font-body); line-height: 1.8; font-size: 17px;">Uanset om du skriver, ringer eller kigger forbi, står vi klar med åbne arme og duften af frisklavet nepalesisk mad.</p>
                        </div>
                        <div class="show-en notranslate">
                            <p style="margin-bottom: 1.2rem; font-family: var(--font-body); line-height: 1.8; font-size: 17px;">Welcome to Lamfuz, where flavour, hygge and hospitality go hand in hand. Whether you have a question, want to reserve a table, order takeaway, or ask about catering for your next event, we would love to hear from you.</p>
                            <p style="margin-bottom: 0; font-family: var(--font-body); line-height: 1.8; font-size: 17px;">Whether you write, call, or simply walk in, we are always ready to welcome you with open arms and the smell of freshly cooked Nepalese food.</p>
                        </div>
                    </div>
                    <div style="text-align: center;">
                        <a href="<?php echo home_url('/book-et-bord'); ?>" class="btn-hero-red" style="font-size: 0.85rem; padding: 1rem 2.5rem; display: inline-block;">
                            <span class="show-da">BOOK ET BORD</span>
                            <span class="show-en notranslate">BOOK A TABLE</span>
                        </a>
                    </div>
                </div>

                <!-- Card Column -->
                <div class="contact-card-area" style="flex: 1; max-width: 500px; min-width: 320px;">
                    <div class="contact-card" style="background-color: #fff; padding: 2.2rem 2.5rem; box-shadow: 0 15px 45px rgba(0,0,0,0.06); border-radius: 0; border: 1px solid rgba(178, 81, 43, 0.1); height: 100%; box-sizing: border-box;">
                        
                        <div class="contact-info-item">
                            <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
                            <a href="tel:+4570605657" class="contact-info-link">+45 70 60 56 57</a>
                        </div>
                        
                        <div class="contact-info-item">
                            <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
                            <a href="mailto:info@lamfuz.com" class="contact-info-link">info@lamfuz.com</a>
                        </div>
                        
                        <div class="contact-info-item align-start">
                            <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" style="margin-top: 3px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>
                            <span class="contact-info-text">Turesensgade 6,<br>1368 København K, Denmark</span>
                        </div>
                        
                        <hr class="contact-card-divider">
                        
                        <div class="contact-hours-container">
                            <div class="contact-hours-title">
                                <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg>
                                <span class="show-da">ÅBNINGSTIDER</span>
                                <span class="show-en notranslate">OPENING HOURS</span>
                            </div>
                            <ul class="contact-hours-list">
                                <li class="contact-hours-row">
                                    <span class="contact-hours-day">
                                        <span class="show-da">Mandag – Torsdag:</span>
                                        <span class="show-en notranslate">Monday – Thursday:</span>
                                    </span>
                                    <span class="contact-hours-time">16:00 – 23:00</span>
                                </li>
                                <li class="contact-hours-row">
                                    <span class="contact-hours-day">
                                        <span class="show-da">Fredag – Lørdag:</span>
                                        <span class="show-en notranslate">Friday – Saturday:</span>
                                    </span>
                                    <span class="contact-hours-time">16:00 – 24:00</span>
                                </li>
                                <li class="contact-hours-row">
                                    <span class="contact-hours-day">
                                        <span class="show-da">Sidste ankomst:</span>
                                        <span class="show-en notranslate">Last arrival:</span>
                                    </span>
                                    <span class="contact-hours-time">21:30</span>
                                </li>
                                <li class="contact-hours-row">
                                    <span class="contact-hours-day">
                                        <span class="show-da">Søndag:</span>
                                        <span class="show-en notranslate">Sunday:</span>
                                    </span>
                                    <span class="contact-hours-time" style="color: #c0392b;">
                                        <span class="show-da">Lukket</span>
                                        <span class="show-en notranslate">Closed</span>
                                    </span>
                                </li>
                            </ul>
                        </div>
                        
                    </div>
                </div>
            </div>

        </section>

        <!-- TripAdvisor Reviews Section -->
        <section class="tripadvisor-section" style="background-color: #fff8e6; padding: 3rem 2rem 4rem 2rem; border-top: 1px dashed rgba(178, 81, 43, 0.2);">
            <div style="max-width: 1050px; margin: 0 auto;">
                
                <!-- Section Title -->
                <div style="text-align: center; margin-bottom: 2.5rem;">
                    <h2 style="font-family: var(--font-heading); font-size: clamp(24px, 4vw, 32px); color: #b2512b; margin: 0; text-transform: uppercase; letter-spacing: 1px;">
                        <span class="show-da">HVAD VORES GÆSTER SIGER</span>
                        <span class="show-en notranslate">WHAT OUR GUESTS SAY</span>
                    </h2>
                </div>

                <!-- Trustindex TripAdvisor Slider Widget -->
                <div class="tripadvisor-content-wrapper" style="min-height: 180px;">
                    <?php 
                    $trustindex_output = do_shortcode('[trustindex no-registration=tripadvisor]');
                    if ( ! empty( $trustindex_output ) && $trustindex_output !== '[trustindex no-registration=tripadvisor]' ) :
                        echo $trustindex_output;
                    else : 
                    ?>
                        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 1.8rem;">
                            <!-- Review Card 1 -->
                            <div style="background-color: #fff; padding: 2rem; border: 1px solid rgba(178, 81, 43, 0.12); box-shadow: 0 8px 25px rgba(0,0,0,0.04); display: flex; flex-direction: column; justify-content: space-between;">
                                <div>
                                    <div style="color: #00af87; font-size: 1.2rem; margin-bottom: 0.8rem;">●●●●●</div>
                                    <h4 style="font-family: var(--font-heading); color: #b2512b; margin: 0 0 0.5rem 0; font-size: 1.1rem;">"Fantastisk nepalesisk mad!"</h4>
                                    <p style="font-family: var(--font-body); color: #666; font-size: 0.95rem; line-height: 1.6; margin: 0;">Super lækker mad og ualmindelig venlig betjening. Byens bedste nepalesiske restaurant uden tvivl!</p>
                                </div>
                                <div style="margin-top: 1.5rem; padding-top: 1rem; border-top: 1px solid #f0f0f0; display: flex; justify-content: space-between; align-items: center;">
                                    <span style="font-family: var(--font-body); font-weight: 600; color: #b2512b; font-size: 0.9rem;">Mette S.</span>
                                    <span style="font-family: var(--font-body); color: #999; font-size: 0.8rem;">København</span>
                                </div>
                            </div>

                            <!-- Review Card 2 -->
                            <div style="background-color: #fff; padding: 2rem; border: 1px solid rgba(178, 81, 43, 0.12); box-shadow: 0 8px 25px rgba(0,0,0,0.04); display: flex; flex-direction: column; justify-content: space-between;">
                                <div>
                                    <div style="color: #00af87; font-size: 1.2rem; margin-bottom: 0.8rem;">●●●●●</div>
                                    <h4 style="font-family: var(--font-heading); color: #b2512b; margin: 0 0 0.5rem 0; font-size: 1.1rem;">"Authentic & Cozy Atmosphere"</h4>
                                    <p style="font-family: var(--font-body); color: #666; font-size: 0.95rem; line-height: 1.6; margin: 0;">The momos and butter chicken were incredible. Very cozy ambiance in Turesensgade. Will definitely return!</p>
                                </div>
                                <div style="margin-top: 1.5rem; padding-top: 1rem; border-top: 1px solid #f0f0f0; display: flex; justify-content: space-between; align-items: center;">
                                    <span style="font-family: var(--font-body); font-weight: 600; color: #b2512b; font-size: 0.9rem;">James R.</span>
                                    <span style="font-family: var(--font-body); color: #999; font-size: 0.8rem;">TripAdvisor Guest</span>
                                </div>
                            </div>

                            <!-- Review Card 3 -->
                            <div style="background-color: #fff; padding: 2rem; border: 1px solid rgba(178, 81, 43, 0.12); box-shadow: 0 8px 25px rgba(0,0,0,0.04); display: flex; flex-direction: column; justify-content: space-between;">
                                <div>
                                    <div style="color: #00af87; font-size: 1.2rem; margin-bottom: 0.8rem;">●●●●●</div>
                                    <h4 style="font-family: var(--font-heading); color: #b2512b; margin: 0 0 0.5rem 0; font-size: 1.1rem;">"Udsøgt smagsoplevelse"</h4>
                                    <p style="font-family: var(--font-body); color: #666; font-size: 0.95rem; line-height: 1.6; margin: 0;">Autentiske krydderier, perfekt tilberedt kød og skøn hyggelig stemning. Varmeste anbefalinger herfra.</p>
                                </div>
                                <div style="margin-top: 1.5rem; padding-top: 1rem; border-top: 1px solid #f0f0f0; display: flex; justify-content: space-between; align-items: center;">
                                    <span style="font-family: var(--font-body); font-weight: 600; color: #b2512b; font-size: 0.9rem;">Lars K.</span>
                                    <span style="font-family: var(--font-body); color: #999; font-size: 0.8rem;">Danmark</span>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>
                </div>

            </div>
        </section>

        <!-- Section 2: Find Us Here (Map Left | Text & Booking Right) -->
        <section class="find-us-section" style="background-color: #fff8e6; padding: 2rem 2rem 5rem 2rem;">

            <!-- Mobile Title (Appears above map on mobile) -->
            <h2 class="find-us-mobile-title" style="font-family: var(--font-heading); font-size: clamp(22px, 3.5vw, 32px); color: #b2512b; margin-top: 0; text-transform: uppercase; letter-spacing: 1px; text-align: center;">
                <span class="show-da">FIND OS HER</span>
                <span class="show-en notranslate">FIND US HERE</span>
            </h2>

            <div class="contact-grid-container" style="max-width: 1050px; margin: 0 auto; display: flex; gap: 3.5rem; align-items: stretch; justify-content: center; flex-wrap: wrap;">
                
                <!-- Left Column: Google Map -->
                <div class="contact-map-column" style="flex: 1; min-width: 320px; max-width: 500px; display: flex; flex-direction: column;">
                    <div style="width: 100%; height: 100%; min-height: 420px; box-shadow: 0 12px 35px rgba(0,0,0,0.06); border: 1px solid rgba(178, 81, 43, 0.15); overflow: hidden; background-color: #fff;">
                        <iframe src="https://maps.google.com/maps?q=Lamfuz%2C%20Turesensgade%206%2C%201368%20K%C3%B8benhavn&t=&z=17&ie=UTF8&iwloc=&output=embed" width="100%" height="100%" style="border:0; min-height: 420px; width: 100%; height: 100%; filter: grayscale(15%) opacity(0.95); display: block;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>

                <!-- Right Column: Content & Booking Button -->
                <div class="contact-content-column" style="flex: 1; min-width: 320px; max-width: 500px; color: #b2512b; display: flex; flex-direction: column; justify-content: center; gap: 1.5rem;">
                    <div>
                        <!-- Desktop Title (Hidden on mobile) -->
                        <h2 class="find-us-desktop-title" style="font-family: var(--font-heading); font-size: clamp(22px, 3.5vw, 32px); color: #b2512b; margin-top: 0; margin-bottom: 1.5rem; text-transform: uppercase; letter-spacing: 1px;">
                            <span class="show-da">FIND OS HER</span>
                            <span class="show-en notranslate">FIND US HERE</span>
                        </h2>

                        <div class="show-da">
                            <p style="margin-bottom: 1.2rem; font-family: var(--font-body); line-height: 1.8; font-size: 16px;">Du finder Lamfuz i hjertet af København på Turesensgade 6. Vores hyggelige restaurant ligger perfekt placeret til en skøn middag med venner, familie eller kolleger.</p>
                            <p style="margin-bottom: 0; font-family: var(--font-body); line-height: 1.8; font-size: 16px;">Kom forbi og oplev vores autentiske nepalesisk mad, god stemning og varme gæstfrihed.</p>
                        </div>
                        <div class="show-en notranslate">
                            <p style="margin-bottom: 1.2rem; font-family: var(--font-body); line-height: 1.8; font-size: 16px;">You will find Lamfuz in the heart of Copenhagen at Turesensgade 6. Our cozy restaurant is perfectly located for a wonderful dinner with friends, family, or colleagues.</p>
                            <p style="margin-bottom: 0; font-family: var(--font-body); line-height: 1.8; font-size: 16px;">Drop by and experience our authentic Nepalese dishes, great atmosphere, and warm hospitality.</p>
                        </div>
                    </div>

                    <!-- Book Table Button -->
                    <div style="margin-top: 0.5rem;" class="find-us-button-wrapper">
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
