<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();
?>

<main id="primary" class="site-main">
    <!-- Hero Section with Background Video -->
    <section class="hero-section">
        <!-- Video Background Wrapper -->
        <div class="hero-video-wrapper">
            <video autoplay muted loop playsinline id="hero-bg-video">
                <source src="https://lamfuz.inkbytestudio.ink/wp-content/uploads/2026/07/hero-bg.mp4" type="video/mp4">
            </video>
        </div>

        <!-- Dark Overlay Vignette -->
        <div class="hero-overlay"></div>


        <!-- Vertical Sidebar Scroll Indicator (Right Side) -->
        <a href="<?php echo lamfuz_get_page_url(array('about', 'om-lamfuz')); ?>" class="hero-scroll-side">
            <span class="hero-vertical-text">OPDAG LAMFUZ</span>
            <div class="hero-scroll-arrow">
                <svg viewBox="0 0 24 24">
                    <line x1="12" y1="5" x2="12" y2="19"></line>
                    <polyline points="19 12 12 19 5 12"></polyline>
                </svg>
            </div>
        </a>

        <!-- Bottom Action Buttons (Left Side on Desktop / Stacked on Mobile) -->
        <div class="hero-bottom-actions">
            <a href="#book" class="btn-hero-red">BOOK ET BORD</a>
            <a href="#menu" class="btn-hero-outline">VORES MENU</a>
        </div>
    </section>

    <!-- Home About Section -->
    <section class="home-about-section">
        <div class="home-about-container">
            <div class="home-about-grid">
                <!-- Left Column: Content -->
                <div class="home-about-content">
                    <h2 class="home-about-title">
                        <span class="show-da">Lamfuz – En nepalesisk restaurant i København</span>
                        <span class="show-en notranslate">Lamfuz – A Nepali Restaurant in Copenhagen</span>
                    </h2>
                    <div class="home-about-text">
                        <p class="lead-text">
                            <span class="show-da">Længes du efter dristige, eksotiske smagsoplevelser? Lad Lamfuz tage dine smagsløg med på en uforglemmelig rejse.</span>
                            <span class="show-en notranslate">Craving bold, exotic flavours? Let Lamfuz take your taste buds on an unforgettable journey.</span>
                        </p>
                        <p class="body-text">
                            <span class="show-da">Velkommen til Lamfuz, en autentisk nepalesisk restaurant i hjertet af København, hvor livlige smage møder ægte gæstfrihed. Hver ret fejrer Nepals rige traditioner, serveret med varme, lidenskab og omhu.</span>
                            <span class="show-en notranslate">Welcome to Lamfuz, an authentic Nepalese restaurant in the heart of Copenhagen, where vibrant flavours meet genuine hospitality. Every dish celebrates the rich traditions of Nepal, served with warmth, passion, and care.</span>
                        </p>
                        <p class="tagline-text">
                            <span class="show-da">Kom for maden. Bliv for oplevelsen.</span>
                            <span class="show-en notranslate">Come for the food. Stay for the experience.</span>
                        </p>
                    </div>
                </div>
                <!-- Right Column: Image -->
                <div class="home-about-image-wrapper">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Space-1_16-9_Side.webp" alt="Lamfuz Restaurant" class="home-about-img">
                </div>
            </div>
        </div>
    </section>

    <!-- Gallery Section -->
    <section class="gallery-section" id="gallery">
        <div class="gallery-container">
            <div class="gallery-content">
                <h4 class="gallery-subtitle">
                    <span class="show-da">HVORFOR VÆLGE OS</span>
                    <span class="show-en notranslate">WHY CHOOSE US</span>
                </h4>
                <h2 class="gallery-title">
                    <span class="show-da">Hvorfor vælge Lamfuz?</span>
                    <span class="show-en notranslate">Why Choose Lamfuz?</span>
                </h2>
                
                <div class="gallery-reasons-list">
                    <!-- Item 1 -->
                    <div class="gallery-reason-item">
                        <h3 class="gallery-reason-title">
                            <span class="show-da">Autentisk nepalesisk kulturarv</span>
                            <span class="show-en notranslate">Authentic Nepalese Heritage</span>
                        </h3>
                        <p class="gallery-reason-text">
                            <span class="show-da">Traditionelle opskrifter og tidstypisk madlavning, der bringer de ægte smage af Nepal til København.</span>
                            <span class="show-en notranslate">Traditional recipes and time-honoured cooking, bringing the true flavours of Nepal to Copenhagen.</span>
                        </p>
                    </div>
                    <!-- Item 2 -->
                    <div class="gallery-reason-item">
                        <h3 class="gallery-reason-title">
                            <span class="show-da">Frisktilberedt</span>
                            <span class="show-en notranslate">Freshly Prepared</span>
                        </h3>
                        <p class="gallery-reason-text">
                            <span class="show-da">Hver ret tilberedes efter bestilling med ingredienser af god kvalitet og vores egne hjemmelavede krydderiblandinger.</span>
                            <span class="show-en notranslate">Every dish is cooked to order using good quality ingredients and our own house-made spice blends.</span>
                        </p>
                    </div>
                    <!-- Item 3 -->
                    <div class="gallery-reason-item">
                        <h3 class="gallery-reason-title">
                            <span class="show-da">Varm gæstfrihed</span>
                            <span class="show-en notranslate">Warm Hospitality</span>
                        </h3>
                        <p class="gallery-reason-text">
                            <span class="show-da">Oplev den ægte velkomst og venlige service, som nepalesisk kultur er kendt for.</span>
                            <span class="show-en notranslate">Experience the genuine welcome and friendly service that Nepalese culture is known for.</span>
                        </p>
                    </div>
                    <!-- Item 4 -->
                    <div class="gallery-reason-item">
                        <h3 class="gallery-reason-title">
                            <span class="show-da">Alle er velkomne</span>
                            <span class="show-en notranslate">Everyone's Welcome</span>
                        </h3>
                        <p class="gallery-reason-text">
                            <span class="show-da">Uanset om du er kødelsker, vegetar eller veganer, er der noget for enhver smag.</span>
                            <span class="show-en notranslate">Whether you're a meat lover, vegetarian, or vegan, there's something for everyone to enjoy.</span>
                        </p>
                    </div>
                </div>

                <p class="gallery-outro-text">
                    <span class="show-da">Autentiske smage. Ægte gæstfrihed. En spiseoplevelse at huske.</span>
                    <span class="show-en notranslate">Authentic flavours. Genuine hospitality. A dining experience to remember.</span>
                </p>
            </div>
            <!-- Swiper Slider -->
            <div class="swiper mySwiper gallery-swiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/DhalBhatPlatter_9-16_Above.webp" alt="Dhal Bhat Platter" class="gallery-img"></div>
                    <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/JholMoMo_9-16_Above.webp" alt="Jhol MoMo" class="gallery-img"></div>
                    <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/ChickenChoila_9-16_Above.webp" alt="Chicken Choila" class="gallery-img"></div>
                    <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/ChowMein_9-16_Above.webp" alt="Chow Mein" class="gallery-img"></div>
                    <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/FriedRice_9-16_Above.webp" alt="Fried Rice" class="gallery-img"></div>
                    <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/SaladBowl_9-16_Above.webp" alt="Salad Bowl" class="gallery-img"></div>
                </div>
            </div>
        </div>
    </section>



    <!-- Signature Dishes Section -->
    <section class="signature-dishes-section">
        <div class="signature-dishes-container">
            <div class="signature-dishes-grid-layout">
                <!-- Left Column: Image -->
                <div class="signature-dishes-image-column">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Dish-3_16-9_Above_portrait.jpg" alt="Signature Nepalese Dishes" class="signature-dishes-img">
                </div>
                <!-- Right Column: Content -->
                <div class="signature-dishes-content-column">
                    <h2 class="signature-dishes-main-title">
                        <span class="show-da">Vores signaturretter fra Nepal</span>
                        <span class="show-en notranslate">Our Signature Nepalese Dishes</span>
                    </h2>
                    <p class="signature-dishes-main-subtitle">
                        <span class="show-da">Autentiske nepalesiske smage, skabt ud fra familieopskrifter med et moderne tvist. Med vegetariske og veganske muligheder overalt på vores menukort, er der noget for enhver smag.</span>
                        <span class="show-en notranslate">Authentic Nepalese flavours, crafted from family recipes with a modern twist. With vegetarian and vegan options available across our menu, there's something for everyone to enjoy.</span>
                    </p>

                    <div class="signature-dishes-list">
                        <!-- Item 1 -->
                        <div class="sig-dish-item">
                            <h3 class="sig-dish-name">
                                <span class="show-da">Dal Bhat</span>
                                <span class="show-en notranslate">Dal Bhat</span>
                            </h3>
                            <p class="sig-dish-description">
                                <span class="show-da">Nepals hverdagsfavorit. Velduftende ris, langtidskogte linser, sæsonens tilbehør og dit valg af lam, kylling, vegetar eller vegansk.</span>
                                <span class="show-en notranslate">Nepal's everyday favourite. Fragrant rice, slow-cooked lentils, seasonal sides, and your choice of lamb, chicken, vegetarian, or vegan.</span>
                            </p>
                        </div>

                        <!-- Item 2 -->
                        <div class="sig-dish-item">
                            <h3 class="sig-dish-name">
                                <span class="show-da">Friske Momos</span>
                                <span class="show-en notranslate">Fresh Momo</span>
                            </h3>
                            <p class="sig-dish-description">
                                <span class="show-da">Håndfoldet dagligt og serveret med vores signatur-sesam- og tomat-chutney. Prøv vores <strong>Jhol Momo</strong> for et ekstra spark.</span>
                                <span class="show-en notranslate">Hand-folded daily and served with our signature sesame & tomato chutney. Try our <strong>Jhol Momo</strong> for an extra kick.</span>
                            </p>
                        </div>

                        <!-- Item 3 -->
                        <div class="sig-dish-item">
                            <h3 class="sig-dish-name">
                                <span class="show-da">Fra grillen</span>
                                <span class="show-en notranslate">From the Grill</span>
                            </h3>
                            <p class="sig-dish-description">
                                <span class="show-da">Røget <strong>Sekuwa</strong> eller krydret <strong>Choila</strong> – dristig, autentisk smag og fuld af kraft.</span>
                                <span class="show-en notranslate">Smoky <strong>Sekuwa</strong> or spicy <strong>Choila</strong>—bold, authentic taste and full of flavour.</span>
                            </p>
                        </div>

                        <!-- Item 4 -->
                        <div class="sig-dish-item">
                            <h3 class="sig-dish-name">
                                <span class="show-da">Favoritter fra wokken</span>
                                <span class="show-en notranslate">Wok-Fired Favourites</span>
                            </h3>
                            <p class="sig-dish-description">
                                <span class="show-da">Frisktilberedt chow mein og stegte ris med dit valg af kylling, kæmperejer eller vegansk.</span>
                                <span class="show-en notranslate">Freshly cooked chow mein and fried rice with your choice of chicken, king prawn, or vegan.</span>
                            </p>
                        </div>
                    </div>

                    <p class="signature-dishes-note">
                        <span class="show-da">Uanset om du er kødelsker, vegetar eller veganer, er hver ret lavet til at bringe dig de autentiske smage af Nepal. Kom for momoen. Bliv for oplevelsen.</span>
                        <span class="show-en notranslate">Whether you're a meat lover, vegetarian, or vegan, every dish is made to bring you the authentic flavours of Nepal. Come for the momo. Stay for the experience.</span>
                    </p>

                    <div class="signature-dishes-actions">
                        <a href="<?php echo lamfuz_get_page_url('menu'); ?>" class="btn-sig-menu-link">
                            <span class="show-da">[Se hele menukortet →]</span>
                            <span class="show-en notranslate">[View Full Menu →]</span>
                        </a>
                        <a href="<?php echo lamfuz_get_page_url(array('book-et-bord', 'book-table')); ?>" class="btn-hero-red btn-sig-book">
                            <span class="show-da">Book et bord</span>
                            <span class="show-en notranslate">Book a table</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Map Section -->
    <section class="map-section" style="width: 100%; height: 450px; line-height: 0; display: block; overflow: hidden; border-top: 1px solid rgba(179, 82, 42, 0.2); border-bottom: 1px solid rgba(179, 82, 42, 0.2);">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2249.198305886987!2d12.56201387693952!3d55.68114499757657!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4652531065e1bc35%3A0x6e88e894086e7a2b!2sTuresensgade%206%2C%201368%20K%C3%B8benhavn!5e0!3m2!1sen!2sdk!4v1700000000000!5m2!1sen!2sdk" width="100%" height="100%" style="border:0; filter: grayscale(30%) contrast(110%) opacity(0.9);" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </section>

    <!-- Instagram Section -->
    <section class="instagram-section" style="background-color: #fff8e6; padding: 5rem 1.25rem; text-align: center;">
        <div class="instagram-container" style="max-width: 1200px; margin: 0 auto;">
            <h4 class="instagram-subtitle" style="font-family: var(--font-body); font-size: 0.9rem; letter-spacing: 0.2em; color: #b2512b; text-transform: uppercase; margin-bottom: 0.5rem; font-weight: 600;">
                <span class="show-da">FØLG OS PÅ INSTAGRAM</span>
                <span class="show-en notranslate">FOLLOW US ON INSTAGRAM</span>
            </h4>
            <h2 class="instagram-title" style="font-family: var(--font-heading); font-size: clamp(22px, 5vw, 32px); font-weight: 400; color: #b2512b; margin-top: 0; margin-bottom: 2.5rem; text-transform: uppercase; letter-spacing: 0.05em;">
                <a href="https://www.instagram.com/lamfuz.dk/" target="_blank" rel="noopener noreferrer" style="color: inherit; text-decoration: none;">@lamfuz.dk</a>
            </h2>
            <div class="instagram-feed-wrapper" style="min-height: 100px;">
                <?php echo do_shortcode('[instagram-feed]'); ?>
            </div>
        </div>
    </section>
</main>
<?php
get_footer();







