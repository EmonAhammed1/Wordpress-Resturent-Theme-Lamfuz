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
        <a href="#about-intro" class="hero-scroll-side">
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
            <a href="<?php echo home_url('/book-et-bord'); ?>" class="btn-hero-red">
                <span class="show-da">BOOK ET BORD</span>
                <span class="show-en notranslate">BOOK A TABLE</span>
            </a>
            <a href="<?php echo lamfuz_get_page_url('menu'); ?>" class="btn-hero-outline">
                <span class="show-da">VORES MENU</span>
                <span class="show-en notranslate">OUR MENU</span>
            </a>
        </div>
    </section>

    <!-- Home About Section -->
    <section class="home-about-section" id="about-intro">
        <div class="home-about-container">
            <div class="home-about-grid">
                <!-- Left Column: Content -->
                <div class="home-about-content">
                    <h2 class="home-about-title">
                        <span class="show-da">Lamfuz – En autentisk nepalesisk restaurant i København</span>
                        <span class="show-en notranslate">Lamfuz – An Authentic Nepali Restaurant in Copenhagen</span>
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
                <h2 class="gallery-title">
                    <span class="show-da">Hvorfor Lamfuz?</span>
                    <span class="show-en notranslate">Why Lamfuz?</span>
                </h2>
                
                <div class="gallery-reasons-list">
                    <!-- Item 1 -->
                    <div class="gallery-reason-item">
                        <h3 class="gallery-reason-title">
                            <span class="show-da">Afslappede rammer & varm gæstfrihed</span>
                            <span class="show-en notranslate">Relaxed Space & Warm Hospitality</span>
                        </h3>
                        <p class="gallery-reason-text">
                            <span class="show-da">Et varmt, hyggeligt og afslappet rum med rustikt interiør, naturligt træ, dæmpet musik og ægte nepalesisk gæstfrihed. Oplev glimt af vores kokke i arbejdet, hør lyden fra køkkenet og nyd aromaen af friskristede og malede krydderier. For en mere stille oplevelse rummer vores andet spiselokale op til 10 gæster. Oplev den hjertelige velkomst og venlige service, som nepalesisk kultur er kendt for, så du føler dig helt hjemme.</span>
                            <span class="show-en notranslate">A warm, cozy, and relaxed space with rustic interiors, natural wood, chilled music, and genuine Nepali hospitality. Catch glimpses of our chefs at work, hear the sounds of the kitchen, and enjoy the aroma of spices freshly toasted and ground in-house. For a quieter experience, our second dining room seats up to 10 guests. Experience the heartfelt welcome and friendly service that Nepali culture is known for, making you feel right at home.</span>
                        </p>
                    </div>
                    <!-- Item 2 -->
                    <div class="gallery-reason-item">
                        <h3 class="gallery-reason-title">
                            <span class="show-da">Autentisk nepalesisk kulturarv</span>
                            <span class="show-en notranslate">Authentic Nepali Heritage</span>
                        </h3>
                        <p class="gallery-reason-text">
                            <span class="show-da">Hos Lamfuz fejrer vi Nepals rige kulinariske kulturarv gennem familieopskrifter, traditionelle tilberedningsteknikker og retter lavet med omhu. Hvert måltid er en smag af Nepal, der bringer livlige smagsoplevelser, kultur og varm gæstfrihed til hjertet af København.</span>
                            <span class="show-en notranslate">At Lamfuz, we celebrate Nepal's rich culinary heritage through family recipes, traditional cooking techniques, and dishes made with care. Every meal is a taste of Nepal, bringing vibrant flavours, culture, and warm hospitality to the heart of Copenhagen.</span>
                        </p>
                    </div>
                    <!-- Item 3 -->
                    <div class="gallery-reason-item">
                        <h3 class="gallery-reason-title">
                            <span class="show-da">Frisktilberedt</span>
                            <span class="show-en notranslate">Freshly Prepared</span>
                        </h3>
                        <p class="gallery-reason-text">
                            <span class="show-da">Hver ret tilberedes efter bestilling med ingredienser af god kvalitet hentet på det lokale marked, sammen med vores egne hjemmelavede krydderiblandinger. Friskhed, kvalitet og omhu er kernen i hvert måltid.</span>
                            <span class="show-en notranslate">Every dish is cooked to order using good quality produce sourced on the local market, together with our own house made spice blends. Freshness, quality, and care are at the heart of every meal.</span>
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
                        <span class="show-en notranslate">Our Signature Nepali Dishes</span>
                    </h2>
                    <p class="signature-dishes-main-subtitle">
                        <span class="show-da">Lamfuz bringer dig smagen af Nepal, skabt ud fra familieopskrifter med et moderne tvist og de friskeste råvarer fra det lokale marked. Med lækre retter med kød, vegetariske og veganske muligheder er der noget for enhver smag. Kom for momoen. Bliv for oplevelsen.</span>
                        <span class="show-en notranslate">Lamfuz brings you the flavours of Nepal, crafted from family recipes with a modern twist and the freshest produce from the local market. With delicious meat, vegetarian, and vegan dishes, there's something for everyone. Come for the momo. Stay for the experience.</span>
                    </p>

                    <div class="signature-dishes-list">
                        <!-- Item 1 -->
                        <div class="sig-dish-item">
                            <h3 class="sig-dish-name">
                                <span class="show-da">Daal Bhat</span>
                                <span class="show-en notranslate">Daal Bhat</span>
                            </h3>
                            <p class="sig-dish-description">
                                <span class="show-da">Nepals hverdagsfavorit. Velduftende ris, langtidskogte linser, sæsonens tilbehør og dit valg af lam, kylling, vegetar eller vegansk. Vi serverer vores på samme måde, som den nydes i hele Nepal. Et måltid, der har samlet nepalesiske familier i generationer – Dal Bhat er Nepals nationalret, fordi enhver familie har sin egen elskede version.</span>
                                <span class="show-en notranslate">Nepal's everyday favourite. Fragrant rice, slow-cooked lentils, seasonal sides, and your choice of lamb, chicken, vegetarian, or vegan. We serve ours the same way it's enjoyed across Nepal. A meal that has brought Nepali families together for generations, Dal Bhat is Nepal's national dish because every family has its own cherished version.</span>
                            </p>
                        </div>

                        <!-- Item 2 -->
                        <div class="sig-dish-item">
                            <h3 class="sig-dish-name">
                                <span class="show-da">Momo-fest</span>
                                <span class="show-en notranslate">Momo Feast</span>
                            </h3>
                            <p class="sig-dish-description">
                                <span class="show-da">Momo nydes overalt i Nepal, fra ydmyge gadeboder til eksklusive restauranter, og er landets foretrukne comfort food. Vores håndfoldes dagligt og serveres med vores signatur-sesam- og tomat-chutney. Prøv vores <strong>Jhol Momo</strong> for et ekstra spark.</span>
                                <span class="show-en notranslate">Enjoyed everywhere in Nepal, from humble street stalls to high-end restaurants, momo is the country's favourite comfort food. Ours are hand-folded daily and served with our signature sesame & tomato chutney. Try our <strong>Jhol Momo</strong> for an extra kick.</span>
                            </p>
                        </div>

                        <!-- Item 3 -->
                        <div class="sig-dish-item">
                            <h3 class="sig-dish-name">
                                <span class="show-da">Fra grillen</span>
                                <span class="show-en notranslate">From the Grill</span>
                            </h3>
                            <p class="sig-dish-description">
                                <span class="show-da">Røget <strong>Sekuwa</strong> eller krydret <strong>Choila</strong> – dristig, autentisk og fuld af smag.</span>
                                <span class="show-en notranslate">Smoky <strong>Sekuwa</strong> or spicy <strong>Choila</strong> - bold, authentic, and full of flavour.</span>
                            </p>
                        </div>

                        <!-- Item 4 -->
                        <div class="sig-dish-item">
                            <h3 class="sig-dish-name">
                                <span class="show-da">Favoritter fra wokken</span>
                                <span class="show-en notranslate">Wok-Fired Favourites</span>
                            </h3>
                            <p class="sig-dish-description">
                                <span class="show-da">Frisk fra wokken – røget chow mein og velduftende stegte ris, serveret med dit valg af kylling, kæmperejer eller vegansk.</span>
                                <span class="show-en notranslate">Fresh from the wok - smoky chow mein and fragrant fried rice, served with your choice of chicken, king prawn, or vegan.</span>
                            </p>
                        </div>
                    </div>

                    <div class="signature-dishes-actions">
                        <a href="<?php echo lamfuz_get_page_url('menu'); ?>" class="btn-hero-red">
                            <span class="show-da">Se hele menukortet</span>
                            <span class="show-en notranslate">View Full Menu</span>
                        </a>
                        <a href="<?php echo lamfuz_get_page_url(array('book-et-bord', 'book-table')); ?>" class="btn-hero-outline">
                            <span class="show-da">Book et bord</span>
                            <span class="show-en notranslate">Book a table</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- TripAdvisor Reviews Section -->
    <section class="tripadvisor-section" style="background-color: #fff8e6; padding: 4rem 1.25rem 3rem 1.25rem; border-top: 1px dashed rgba(178, 81, 43, 0.2);">
        <div style="max-width: 1200px; margin: 0 auto;">
            
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

    <!-- Combined Instagram & Map Section -->
    <section class="insta-map-section">
        <div class="insta-map-container">
            <!-- Left Column: Instagram Feed (2 columns) -->
            <div class="insta-column">
                <div class="instagram-feed-wrapper" style="min-height: 100px;">
                    <?php echo do_shortcode('[instagram-feed cols=2 num=4]'); ?>
                </div>
            </div>
            <!-- Right Column: Map -->
            <div class="map-column">
                <h2 class="map-title">
                    <span class="show-da">Find os her</span>
                    <span class="show-en notranslate">Find us here</span>
                </h2>
                <div class="map-container">
                    <iframe src="https://maps.google.com/maps?q=Lamfuz%2C%20Turesensgade%206%2C%201368%20K%C3%B8benhavn&t=&z=17&ie=UTF8&iwloc=&output=embed" width="100%" height="100%" style="border:0; filter: grayscale(30%) contrast(110%) opacity(0.9);" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="faq-section" style="background-color: #fff8e6; padding: 0 1.25rem 7rem; font-family: var(--font-body);">
        <div class="faq-container" style="max-width: 1200px; margin: 0 auto;">
            <div class="faq-header" style="text-align: center; margin-bottom: 4rem;">
                <h2 class="faq-title" style="font-family: var(--font-heading); font-size: clamp(28px, 5vw, 38px); font-weight: 400; color: #b2512b; margin-top: 0; text-transform: uppercase; letter-spacing: 0.05em;">
                    <span class="show-da">Ofte stillede spørgsmål?</span>
                    <span class="show-en notranslate">Frequently Asked Questions?</span>
                </h2>
            </div>
            
            <div class="faq-grid">
                <!-- Column 1 -->
                <div class="faq-col">
                    <!-- FAQ 1 -->
                    <details class="faq-item">
                        <summary>
                            <span class="show-da">Hvornår kan jeg komme, og skal jeg skynde mig inden lukketid?</span>
                            <span class="show-en notranslate">What time can I come in, and do I need to rush before closing?</span>
                            <span class="faq-icon">+</span>
                        </summary>
                        <div class="faq-content">
                            <p class="show-da">Vi har åbent mandag til torsdag kl. 16:00 - 23:00, og fredag til lørdag kl. 16:00 - 23:30. Køkkenet lukker for bestillinger lidt før lukketid, så hvis du planlægger en sen middag på en travl aften, kan det betale sig at komme lidt tidligere for at få hele oplevelsen med.</p>
                            <p class="show-en notranslate">We're open Monday to Thursday, 16:00 to 23:00, and Friday to Saturday, 16:00 to 23:30. The kitchen does stop taking orders a little before we close, so if you're planning a later dinner on a busy night, it's worth arriving a bit earlier to make sure you get the full experience.</p>
                        </div>
                    </details>

                    <!-- FAQ 2 -->
                    <details class="faq-item">
                        <summary>
                            <span class="show-da">Kan jeg bestille bord i forvejen?</span>
                            <span class="show-en notranslate">Can I book a table ahead of time?</span>
                            <span class="faq-icon">+</span>
                        </summary>
                        <div class="faq-content">
                            <p class="show-da">Helt bestemt. Du kan reservere online via booking-knappen på vores hjemmeside, eller ringe til os på +45 70 60 56 57, hvis du foretrækker at tale med os direkte – især praktisk, hvis I kommer som en større gruppe.</p>
                            <p class="show-en notranslate">Definitely. You can reserve online through the booking button on our site, or give us a call on +45 70 60 56 57 if you'd rather chat with someone directly — especially handy if you're coming as a larger group.</p>
                        </div>
                    </details>

                    <!-- FAQ 3 -->
                    <details class="faq-item">
                        <summary>
                            <span class="show-da">Kan jeg bestille Lamfuz som takeaway?</span>
                            <span class="show-en notranslate">Can I order Lamfuz to take out?</span>
                            <span class="faq-icon">+</span>
                        </summary>
                        <div class="faq-content">
                            <p class="show-da">Selvfølgelig. Hele vores menu er tilgængelig som takeaway fra Turesensgade 6. Ring bare i forvejen eller kig forbi, så vil vi have din mad frisklavet og klar, når du ankommer.</p>
                            <p class="show-en notranslate">Of course. Our entire menu is available for take out from Turesensgade 6. Just call ahead or pop in, and we'll have your food freshly prepared and ready when you arrive.</p>
                        </div>
                    </details>

                    <!-- FAQ 4 -->
                    <details class="faq-item">
                        <summary>
                            <span class="show-da">Er nepalesisk mad meget stærk? Jeg er ikke så god til stærk mad.</span>
                            <span class="show-en notranslate">Is Nepali food very spicy? I'm not great with heat.</span>
                            <span class="faq-icon">+</span>
                        </summary>
                        <div class="faq-content">
                            <p class="show-da">Ikke nødvendigvis – nepalesisk mad handler om mange lag af smag, ikke kun styrke. Mange af vores retter, som dal bhat og momo, er milde og fyldige af natur. Hvis du vil have styrke, kan du prøve retter som choila eller jhol momo. Fortæl blot din tjener om dine præferencer for krydring, så tilpasser vi det derefter – vi vil hellere have, at du nyder hver mundfuld, end at du skal kæmpe dig igennem den.</p>
                            <p class="show-en notranslate">Not necessarily — Nepalese food is about layers of flavour, not just heat. Many of our dishes, like dal bhat and momo, are mild and comforting by nature. If you do want some heat, dishes like choila or jhol momo bring it on. Just let your server know your spice preference and we'll adjust accordingly — we'd rather you enjoy every bite than fight through it.</p>
                        </div>
                    </details>

                    <!-- FAQ 5 -->
                    <details class="faq-item">
                        <summary>
                            <span class="show-da">Kan jeg få min mad uden hvidløg, koriander eller forårsløg?</span>
                            <span class="show-en notranslate">Can I ask for my food without garlic, coriander, or spring onion?</span>
                            <span class="faq-icon">+</span>
                        </summary>
                        <div class="faq-content">
                            <p class="show-da">Absolut. Nepalesisk madlavning bruger ofte disse ingredienser, medmindre andet er angivet, men vores køkken tilpasser det gerne, hvor vi kan. Nævn det blot, når du bestiller, så gør vi vores bedste for at tilberede din ret, som du ønsker det.</p>
                            <p class="show-en notranslate">Absolutely. Nepalese cooking uses these ingredients often, but our kitchen is happy to adapt where we can. Just mention it when ordering, and we'll do our best to prepare your dish the way you like it.</p>
                        </div>
                    </details>

                    <!-- FAQ 6 -->
                    <details class="faq-item">
                        <summary>
                            <span class="show-da">Jeg har fødevareallergi – kan I håndtere det?</span>
                            <span class="show-en notranslate">I have food allergies — is that something you can handle?</span>
                            <span class="faq-icon">+</span>
                        </summary>
                        <div class="faq-content">
                            <p class="show-da">Ja, og vi tager det meget alvorligt. Fortæl venligst din tjener om eventuelle allergier, inden du bestiller, så vores køkken kan guide dig til sikre valg og tage de rette forholdsregler. Hvis du er i tvivl, så spørg endelig – vi gennemgår gerne ingredienserne ret for ret. Ingen af vores retter indeholder nødder.</p>
                            <p class="show-en notranslate">Yes, and we take it seriously. Please let your server know about any allergies before ordering so our kitchen can guide you toward safe options and take the right precautions. If you're ever unsure, just ask — we're happy to talk you through ingredients dish by dish. Contains no nuts in any of our dishes.</p>
                        </div>
                    </details>
                </div>

                <!-- Column 2 -->
                <div class="faq-col">
                    <!-- FAQ 7 -->
                    <details class="faq-item">
                        <summary>
                            <span class="show-da">Har I noget til små børn?</span>
                            <span class="show-en notranslate">Do you have anything for young kids?</span>
                            <span class="faq-icon">+</span>
                        </summary>
                        <div class="faq-content">
                            <p class="show-da">Ja. Selvom vi ikke har en separat børnemenu, er mange af vores retter – såsom almindelige ris, mild dal eller simpel chow mein – gode til de små, og portionerne kan ofte tilpasses. Spørg din tjener om forslag, så hjælper vi med at finde noget, dine børn rent faktisk vil spise.</p>
                            <p class="show-en notranslate">We do. While we don't have a separate children's menu, many of our dishes — like plain rice, mild dal, or simple chow mein — work well for little ones, and portions can often be adjusted. Just ask your server for suggestions and we'll help you put together something your kids will actually eat.</p>
                        </div>
                    </details>

                    <!-- FAQ 8 -->
                    <details class="faq-item">
                        <summary>
                            <span class="show-da">Har I noget til veganere eller vegetarer?</span>
                            <span class="show-en notranslate">Is there something for vegans or vegetarians?</span>
                            <span class="faq-icon">+</span>
                        </summary>
                        <div class="faq-content">
                            <p class="show-da">Ja, masser faktisk. Vi har en dedikeret vegansk platte samt veganske versioner af vores momo, chow mein og stegte ris. Nepalesisk mad er i forvejen rig på linser, grøntsager og bælgfrugter, så plantebaserede gæster er rigtig godt dækket ind hos os og ikke bare en eftertanke.</p>
                            <p class="show-en notranslate">Plenty, actually. We have a dedicated vegan platter, plus vegan versions of our momo, chow mein, and fried rice. Nepalese cuisine leans heavily on lentils, vegetables, and legumes anyway, so plant-based guests are genuinely well looked after here, not just an afterthought.</p>
                        </div>
                    </details>

                    <!-- FAQ 9 -->
                    <details class="faq-item">
                        <summary>
                            <span class="show-da">Kan I levere mad til en kontorfrokost eller et privat arrangement?</span>
                            <span class="show-en notranslate">Can you cater for an office lunch or private event?</span>
                            <span class="faq-icon">+</span>
                        </summary>
                        <div class="faq-content">
                            <p class="show-da">Ja, vi leverer mad til private fester, kontorfrokoster og fejringer i hele København. Du skal bare kontakte os med jeres gruppestørrelse og de retter, I ønsker, så sammensætter vi en menu til jeres arrangement.</p>
                            <p class="show-en notranslate">Yes, we cater private parties, office lunches, and celebrations across Copenhagen. Just reach out with your group size and any dishes you're keen on, and we'll build a menu around your event.</p>
                        </div>
                    </details>

                    <!-- FAQ 10 -->
                    <details class="faq-item">
                        <summary>
                            <span class="show-da">Hvad skal jeg bestille, hvis jeg ikke ved, hvor jeg skal starte?</span>
                            <span class="show-en notranslate">What should I order if I don't know where to start?</span>
                            <span class="faq-icon">+</span>
                        </summary>
                        <div class="faq-content">
                            <p class="show-da">Vores momo (dampede nepalesiske dumplings med sesam-tomat chutney) er den klare favorit og den mest bestilte ret på menuen. Lige efter kommer vores dal bhat platte, som er selve hjertet i den daglige nepalesiske madlavning i hjemmet.</p>
                            <p class="show-en notranslate">Our momo steamed Nepalese dumplings with sesame-tomato chutney are the clear favourite and the most ordered dish on the menu. Right behind it is our dal bhat platter, the true heart of everyday Nepali home cooking.</p>
                        </div>
                    </details>

                    <!-- FAQ 11 -->
                    <details class="faq-item">
                        <summary>
                            <span class="show-da">Jeg har aldrig fået nepalesisk mad før – er Lamfuz et godt sted at starte?</span>
                            <span class="show-en notranslate">I've never had Nepalese food before — is Lamfuz a good place to start?</span>
                            <span class="faq-icon">+</span>
                        </summary>
                        <div class="faq-content">
                            <p class="show-da">Helt ærligt, ja, det er en af de bedste grunde til at komme. Vores team elsker at guide nybegyndere gennem menuen, uanset om det betyder at starte med en omgang momo, gå direkte efter en dal bhat-platte eller prøve noget fra vores sekuwa- og choila-udvalg. Du kan ikke vælge forkert hos os.</p>
                            <p class="show-en notranslate">Honestly, it's one of the best reasons to come. Our team loves walking first-timers through the menu, whether that means starting with a plate of momo, going straight for a full dal bhat platter, or trying something from our sekuwa and choila selection. No wrong choices here.</p>
                        </div>
                    </details>

                    <!-- FAQ 12 -->
                    <details class="faq-item">
                        <summary>
                            <span class="show-da">Kan jeg holde private arrangementer hos Lamfuz?</span>
                            <span class="show-en notranslate">Can i host our private events at Lamfuz?</span>
                            <span class="faq-icon">+</span>
                        </summary>
                        <div class="faq-content">
                            <p class="show-da">Ja, du kan sagtens afholde dine private arrangementer, fødselsdage, bryllupper, frokoster, middage eller noget midt imellem hos os.</p>
                            <p class="show-en notranslate">Sure you can host your private events, birthdays, weddings, lunch or dinner or anything in between.</p>
                        </div>
                    </details>
                </div>
            </div>
        </div>
    </section>

    <style>
        @media (max-width: 768px) {
            .faq-section {
                padding-bottom: 2rem !important;
            }
        }
        .faq-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 2rem;
            align-items: start;
        }
        @media (max-width: 991px) {
            .faq-grid {
                grid-template-columns: 1fr;
                gap: 1.5rem;
            }
        }
        .faq-col {
            display: flex;
            flex-direction: column;
            gap: 1.5rem;
        }
        .faq-item {
            background-color: rgba(179, 82, 42, 0.02);
            border: 1px solid rgba(179, 82, 42, 0.15);
            border-radius: 0;
            transition: all 0.35s ease;
        }
        .faq-item[open] {
            background-color: rgba(179, 82, 42, 0.05);
            border-color: rgba(179, 82, 42, 0.4);
            box-shadow: 0 10px 30px rgba(179, 82, 42, 0.04);
        }
        .faq-item summary {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 1.5rem;
            font-family: var(--font-heading);
            font-size: 1.15rem;
            color: #b2512b;
            cursor: pointer;
            list-style: none;
            user-select: none;
            outline: none;
            font-weight: 500;
        }
        .faq-item summary::-webkit-details-marker {
            display: none;
        }
        .faq-icon {
            font-family: var(--font-body);
            font-size: 1.5rem;
            font-weight: 300;
            line-height: 1;
            color: #b2512b;
            transition: transform 0.3s ease;
            margin-left: 1rem;
            flex-shrink: 0;
        }
        .faq-item[open] .faq-icon {
            transform: rotate(45deg);
        }
        .faq-content {
            padding: 0 1.5rem 1.5rem;
            font-size: 0.95rem;
            line-height: 1.8;
            color: #b2512b;
            border-top: 1px solid rgba(179, 82, 42, 0.08);
            padding-top: 1.25rem;
        }
        .faq-content p {
            margin: 0;
        }
    </style>
</main>
<?php
get_footer();




