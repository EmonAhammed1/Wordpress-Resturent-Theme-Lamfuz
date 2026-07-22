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
                    <span class="show-da">FAQ?</span>
                    <span class="show-en notranslate">FAQ?</span>
                </h2>
            </div>
            
            <div class="faq-grid">
                <!-- Column 1 -->
                <div class="faq-col">
                    <!-- FAQ 1 -->
                    <details class="faq-item">
                        <summary>
                            <span class="show-da">Hvad er jeres åbningstider?</span>
                            <span class="show-en notranslate">What are your opening hours?</span>
                            <span class="faq-icon">+</span>
                        </summary>
                        <div class="faq-content">
                            <p class="show-da">Vi har åbent mandag – torsdag: 16:00 – 23:00 og fredag – lørdag: 16:00 – 23:30. Vores køkken modtager de sidste madbestillinger kl. 22:00, så vi anbefaler at komme inden da for at nyde den fulde Lamfuz-oplevelse.</p>
                            <p class="show-en notranslate">We're open Monday - Thursday: 16:00 - 23:00 and Friday - Saturday: 16:00 - 23:30. Our kitchen takes the last food orders at 22:00, so we recommend arriving before then to enjoy the full Lamfuz experience.</p>
                        </div>
                    </details>

                    <!-- FAQ 2 -->
                    <details class="faq-item">
                        <summary>
                            <span class="show-da">Kan jeg bestille bord i forvejen?</span>
                            <span class="show-en notranslate">Can I book a table in advance?</span>
                            <span class="faq-icon">+</span>
                        </summary>
                        <div class="faq-content">
                            <p class="show-da">Helt sikkert. Reserver dit bord online via vores bookingsystem eller ring til os på +45 70 60 56 57. Hvis du booker til mere end 8 gæster, bedes du sende os en e-mail, så vi kan hjælpe med at arrangere dit besøg.</p>
                            <p class="show-en notranslate">Absolutely. Reserve your table online through our booking system or call us on +45 70 60 56 57. If you're booking for more than 8 guests, please send us an email so we can help arrange your visit.</p>
                        </div>
                    </details>

                    <!-- FAQ 3 -->
                    <details class="faq-item">
                        <summary>
                            <span class="show-da">Kan jeg bestille Lamfuz som takeaway?</span>
                            <span class="show-en notranslate">Can I order Lamfuz for takeout?</span>
                            <span class="faq-icon">+</span>
                        </summary>
                        <div class="faq-content">
                            <p class="show-da">Ja. Vores fulde menukort er tilgængeligt som takeaway. Bestil nemt online, ring til os eller kig forbi, så tilbereder vi din mad frisk til afhentning.</p>
                            <p class="show-en notranslate">Yes. Our full menu is available for takeout. Simply order online, give us a call, or stop by, and we'll have your food freshly prepared for collection.</p>
                        </div>
                    </details>

                    <!-- FAQ 4 -->
                    <details class="faq-item">
                        <summary>
                            <span class="show-da">Er nepalesisk mad meget stærk?</span>
                            <span class="show-en notranslate">Is Nepali food very spicy?</span>
                            <span class="faq-icon">+</span>
                        </summary>
                        <div class="faq-content">
                            <p class="show-da">Ikke nødvendigvis. Det nepalesiske køkken handler om afbalancerede smage, ikke kun stærk mad. Mange af vores retter er naturally milde, og vi tilpasser gerne krydderiniveauet efter din smag. Giv blot tjeneren besked ved bestilling.</p>
                            <p class="show-en notranslate">Not necessarily. Nepali cuisine is all about balanced flavours, not just heat. Many of our dishes are naturally mild, and we're happy to adjust the spice level to suit your taste. Just let your server know when you order.</p>
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
                            <p class="show-da">Helt sikkert. Nepalesisk madlavning bruger ofte disse ingredienser, men vores køkken tilpasser det gerne, hvor vi kan. Nævn det blot ved bestilling, så gør vi vores bedste for at tilberede din ret, som du ønsker det.</p>
                            <p class="show-en notranslate">Absolutely. Nepalese cooking uses these ingredients often, but our kitchen is happy to adapt where we can. Just mention it when ordering, and we'll do our best to prepare your dish the way you like it.</p>
                        </div>
                    </details>

                    <!-- FAQ 6 -->
                    <details class="faq-item">
                        <summary>
                            <span class="show-da">Jeg har fødevareallergi – kan I håndtere det?</span>
                            <span class="show-en notranslate">I have food allergies, is that something you can handle?</span>
                            <span class="faq-icon">+</span>
                        </summary>
                        <div class="faq-content">
                            <p class="show-da">Ja, og vi tager det meget alvorligt. Ingen af vores retter indeholder nødder. Oplys venligst din tjener om eventuelle allergier inden bestilling, så vi kan anbefale egnede retter og tage de nødvendige forholdsregler.</p>
                            <p class="show-en notranslate">Yes, and we take it seriously. None of our dishes contain nuts. Please let your server know about any allergies before ordering so we can recommend suitable options and take the necessary precautions.</p>
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
                            <p class="show-da">Ja. Vi har en børnemenu med børnevenlige retter, herunder kylling, almindelige ris, dal, grøntsager og enkel chow mein, og vi foreslår gerne gode retter til de mindste.</p>
                            <p class="show-en notranslate">Yes. We have a children's menu with kid-friendly options, including chicken, plain rice, dal, vegetables, and simple chow mein and we're happy to suggest options suitable for little ones.</p>
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
                            <p class="show-da">Helt sikkert. Vi tilbyder en dedikeret vegansk platte samt et stort udvalg af veganske og vegetariske forretter, momo, chow mein, stegte ris og andre nepalesiske favoritter.</p>
                            <p class="show-en notranslate">Absolutely. We offer a dedicated vegan platter, plus a great selection of vegan and vegetarian appetisers, momo, chow mein, fried rice, and other Nepali favourites.</p>
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
                            <p class="show-da">Ja. Vi leverer catering til kontorfrokoster, private fester, bryllupper og fejringer i hele København. Send os en e-mail med antal gæster og detaljer om arrangementet, så sammensætter vi en menu, der passer til jeres anledning.</p>
                            <p class="show-en notranslate">Yes. We cater office lunches, private parties, weddings, and celebrations across Copenhagen. Send us an email with your group size and event details, and we'll create a menu to suit your occasion.</p>
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
                            <p class="show-da">Vores momo (dampede nepalesiske dumplings med sesam-tomat-chutney) er den klare favorit og den mest bestilte ret på menuen. Lige derefter kommer vores dal bhat-platte, selve hjertet i nepalesisk hverdagsmad.</p>
                            <p class="show-en notranslate">Our momo (steamed Nepalese dumplings with sesame - tomato chutney) are the clear favourite and the most ordered dish on the menu. Right behind it is our dal bhat platter, the true heart of everyday Nepali home cooking.</p>
                        </div>
                    </details>

                    <!-- FAQ 11 -->
                    <details class="faq-item">
                        <summary>
                            <span class="show-da">Jeg har aldrig fået nepalesisk mad før – er Lamfuz et godt sted at starte?</span>
                            <span class="show-en notranslate">I've never had Nepali food before - is Lamfuz a good place to start?</span>
                            <span class="faq-icon">+</span>
                        </summary>
                        <div class="faq-content">
                            <p class="show-da">Helt sikkert. Vores team elsker at introducere førstegangsgæster til det nepalesiske køkken. Start med vores håndlavede momo, prøv vores traditionelle dal bhat-platte, eller udforsk vores sekuwa- og choila-favoritter. Uanset hvad du vælger, hjælper vi dig med at opdage smagen af Nepal.</p>
                            <p class="show-en notranslate">Absolutely. Our team loves introducing first-time guests to Nepali cuisine. Start with our handmade momo, try our traditional dal bhat platter, or explore our sekuwa and choila favourites. Whatever you choose, we'll help you discover the flavours of Nepal.</p>
                        </div>
                    </details>

                    <!-- FAQ 12 -->
                    <details class="faq-item">
                        <summary>
                            <span class="show-da">Kan jeg holde private arrangementer hos Lamfuz?</span>
                            <span class="show-en notranslate">Can I host our private events at Lamfuz?</span>
                            <span class="faq-icon">+</span>
                        </summary>
                        <div class="faq-content">
                            <p class="show-da">Ja, selvfølgelig! Du kan afholde dine private arrangementer, fødselsdage, bryllupper, frokoster eller middage hos os.</p>
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
            padding: 1.1rem 1.35rem;
            font-family: var(--font-heading);
            font-size: 0.92rem;
            color: #b2512b;
            cursor: pointer;
            list-style: none;
            user-select: none;
            outline: none;
            font-weight: 500;
            line-height: 1.4;
        }
        @media (max-width: 768px) {
            .faq-item summary {
                font-size: 0.75rem;
                padding: 0.75rem 0.9rem;
            }
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




