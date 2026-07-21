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

            <!-- Intro Text Container -->
            <div class="contact-text-container">
                <div class="show-da">
                    <p style="margin-bottom: 1.5rem; font-family: var(--font-body); line-height: 1.8; font-size: 17px;">Velkommen til Lamfuz – hvor smag, hygge og gæstfrihed går hånd i hånd. Har du spørgsmål, vil du reservere bord, bestille take-away eller høre mere om vores catering? Så er du altid velkommen til at tage fat i os – vi elsker at høre fra dig!</p>
                    <p style="margin-bottom: 2rem; font-family: var(--font-body); line-height: 1.8; font-size: 17px;">Uanset om du skriver, ringer eller kigger forbi, står vi klar med åbne arme og duften af frisklavet nepalesisk mad.</p>

                    <h3 class="contact-sub-title">Reservation af bord</h3>
                    <p style="margin-bottom: 2rem; font-family: var(--font-body); line-height: 1.8; font-size: 17px;">Den hurtigste måde at sikre sig et bord på, især fredag og lørdag aften, er at booke direkte på vores hjemmeside eller ringe til os på +45 70 60 56 57. For større grupper eller særlige begivenheder giver det os mulighed for at forberede os ordentligt på jeres besøg, hvis I ringer i forvejen.</p>

                    <h3 class="contact-sub-title">Takeaway og catering</h3>
                    <p style="margin-bottom: 2rem; font-family: var(--font-body); line-height: 1.8; font-size: 17px;">Hele vores menukort, inklusive momo, dal bhat-tallerkener, sekuwa, choila, chow mein og stegte ris, kan bestilles som takeaway. Hvis du planlægger en frokost på kontoret, en fødselsdag eller en privat fest i København, kan du kontakte os angående catering, så hjælper vi dig med at sammensætte en menu, der passer til din gruppe.</p>

                    <h3 class="contact-sub-title">Følg Lamfuz</h3>
                    <p style="margin-bottom: 2rem; font-family: var(--font-body); line-height: 1.8; font-size: 17px;">Hold dig opdateret med nye retter, tilbud og øjeblikke bag kulisserne i vores køkken på Facebook og Instagram.</p>

                    <p style="margin-bottom: 3rem; font-family: var(--font-body); line-height: 1.8; font-size: 17px;">Vi glæder os to at byde dig velkommen hos Lamfuz, din nepalesiske restaurant i hjertet af København.</p>
                </div>
                <div class="show-en notranslate">
                    <p style="margin-bottom: 1.5rem; font-family: var(--font-body); line-height: 1.8; font-size: 17px;">Welcome to Lamfuz, where flavour, hygge and hospitality go hand in hand. Whether you have a question, want to reserve a table, order takeaway, or ask about catering for your next event, we would love to hear from you.</p>
                    <p style="margin-bottom: 2rem; font-family: var(--font-body); line-height: 1.8; font-size: 17px;">Whether you write, call, or simply walk in, we are always ready to welcome you with open arms and the smell of freshly cooked Nepalese food.</p>

                    <h3 class="contact-sub-title">Booking a Table</h3>
                    <p style="margin-bottom: 2rem; font-family: var(--font-body); line-height: 1.8; font-size: 17px;">The fastest way to secure a table, especially on Friday and Saturday evenings, is to book directly through our website or call us at +45 70 60 56 57. For larger groups or special occasions, calling ahead lets us prepare properly for your visit.</p>

                    <h3 class="contact-sub-title">Takeaway and Catering</h3>
                    <p style="margin-bottom: 2rem; font-family: var(--font-body); line-height: 1.8; font-size: 17px;">Our full menu, including momo, dal bhat platters, sekuwa, choila, chow mein and fried rice, is available for takeaway. If you are planning an office lunch, birthday, or private event anywhere in Copenhagen, get in touch about catering and we will help you build a menu that fits your group.</p>

                    <h3 class="contact-sub-title">Follow Lamfuz</h3>
                    <p style="margin-bottom: 2rem; font-family: var(--font-body); line-height: 1.8; font-size: 17px;">Stay up to date with new dishes, offers and behind-the-scenes moments from our kitchen on Facebook and Instagram.</p>

                    <p style="margin-bottom: 3rem; font-family: var(--font-body); line-height: 1.8; font-size: 17px;">We look forward to welcoming you to Lamfuz, your Nepalese restaurant in the heart of Copenhagen.</p>
                </div>

                <div style="text-align: center; margin-bottom: 2rem;">
                    <a href="<?php echo home_url('/book-et-bord'); ?>" class="btn-hero-red" style="font-size: 0.85rem; padding: 1rem 2.5rem; display: inline-block;">
                        <span class="show-da">BOOK ET BORD</span>
                        <span class="show-en notranslate">BOOK A TABLE</span>
                    </a>
                </div>
            </div>

            <!-- Details Row (Map and Card) -->
            <div class="contact-details-row" style="max-width: 1200px; margin: 0 auto; display: flex; gap: 4rem; align-items: stretch; flex-wrap: wrap;">
                
                <!-- Map Column -->
                <div class="map-embed-wrapper" style="flex: 1.2; min-width: 300px; display: flex; flex-direction: column;">
                    <div class="map-embed" style="width: 100%; height: 100%; min-height: 450px; background-color: #ddd;">
                        <iframe src="https://maps.google.com/maps?q=Lamfuz%2C%20Turesensgade%206%2C%201368%20K%C3%B8benhavn&t=&z=17&ie=UTF8&iwloc=&output=embed" width="100%" height="100%" style="border:0; filter: grayscale(30%) opacity(0.9);" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>

                <!-- Card Column -->
                <div class="contact-card-area" style="flex: 1; min-width: 300px;">
                    <div class="contact-card" style="background-color: #fff; padding: 3.5rem; box-shadow: 0 15px 45px rgba(0,0,0,0.06); height: 100%; border-radius: 0; border: 1px solid rgba(178, 81, 43, 0.1);">
                        
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
                                        <span class="show-da">Mandag – Torsdag</span>
                                        <span class="show-en notranslate">Monday – Thursday</span>
                                    </span>
                                    <span class="contact-hours-time">16:00 – 23:00</span>
                                </li>
                                <li class="contact-hours-row">
                                    <span class="contact-hours-day">
                                        <span class="show-da">Fredag – Lørdag</span>
                                        <span class="show-en notranslate">Friday – Saturday</span>
                                    </span>
                                    <span class="contact-hours-time">16:00 – 24:00</span>
                                </li>
                                <li class="contact-hours-row">
                                    <span class="contact-hours-day">
                                        <span class="show-da">Sidste ankomst</span>
                                        <span class="show-en notranslate">Last arrival</span>
                                    </span>
                                    <span class="contact-hours-time">21:30</span>
                                </li>
                                <li class="contact-hours-row">
                                    <span class="contact-hours-day">
                                        <span class="show-da">Søndag</span>
                                        <span class="show-en notranslate">Sunday</span>
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

    </main>
<?php get_footer(); ?>




