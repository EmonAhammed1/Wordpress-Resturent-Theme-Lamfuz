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
        <a href="<?php echo home_url('/about'); ?>" class="hero-scroll-side">
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

    <!-- Home Intro Section -->
    <section class="home-intro-section">
        <div class="home-intro-container">
            <h2 class="home-intro-title">
                Lamfuz – Authentic Nepalese Restaurant in Copenhagen
            </h2>
            <p class="home-intro-subtitle">
                <span class="show-da">Nepalesisk restaurant i København | Lamfuz – Autentisk momo & dal bhat i Indre By</span>
                <span class="show-en notranslate">Nepalese Restaurant in Copenhagen | Lamfuz – Authentic Momo & Dal Bhat in Indre By</span>
            </p>
            <div class="home-intro-content">
                <div class="show-da home-intro-grid">
                    <div class="home-intro-col">
                        <p class="lead-text">Velkommen til Lamfuz, en nepalesisk restaurant på Turesensgade i hjertet af København, hvor mad og gæstfrihed går hånd i hånd. Hvert måltid her er en invitation til at opdage de rige smage, traditioner og varme gæstfrihed fra Nepal.</p>
                        <p>Hos Lamfuz handler middagen om mere end god mad, det handler om at få hver gæst til at føle sig oprigtigt velkommen. Fra det øjeblik du ankommer, er vores mål at skabe en afslappet, mindeværdig oplevelse inspireret af nepalesisk kulturs varme og generøsitet.</p>
                    </div>
                    <div class="home-intro-col">
                        <p>Fra håndfoldede momos og langtidskogt dal bhat til røget sekuwa og friskkværnede krydderier, enhver ret er rodfæstet i traditionelle familieopskrifter med et gennemtænkt moderne præg.</p>
                        <p>Uanset om du opdager det nepalesiske køkken for første gang eller vender tilbage for endnu et besøg, inviterer vi dig til at opleve den autentiske smag af Nepal med et moderne tvist.</p>
                    </div>
                </div>
                <div class="show-en notranslate home-intro-grid">
                    <div class="home-intro-col">
                        <p class="lead-text">Welcome to Lamfuz, a Nepalese restaurant at Turesensgade in the heart of Copenhagen where meals & hospitality go hand in hand. Every meal here is an invitation to discover the rich flavours, traditions, and warm hospitality of Nepal.</p>
                        <p>At Lamfuz, dining is about more than great food, it's about making every guest feel genuinely welcome. From the moment you arrive, our goal is to create a relaxed, memorable experience inspired by the warmth and generosity of Nepalese culture.</p>
                    </div>
                    <div class="home-intro-col">
                        <p>From hand-folded momo and slow-cooked dal bhat to smoky sekuwa and freshly ground spices, every dish is rooted in traditional family recipes with a thoughtful modern touch.</p>
                        <p>Whether you're discovering Nepalese cuisine for the first time or returning for another visit, we invite you to experience the authentic taste of Nepal with a modern twist.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Gallery Section -->
    <section class="gallery-section" id="gallery">
        <div class="gallery-container">
            <div class="gallery-content">
                <h4 class="gallery-subtitle">
                    <span class="show-da">VORES GALLERI</span>
                    <span class="show-en notranslate">OUR GALLERY</span>
                </h4>
                <h2 class="gallery-title">
                    <span class="show-da">GIV DINE SMAGSLØG EN RUTSJEBANETUR!</span>
                    <span class="show-en notranslate">GIVE YOUR TASTE BUDS A ROLLER COASTER RIDE!</span>
                </h2>
                <p class="gallery-text">
                    <span class="show-da">Leder du efter eksotisk og velsmagende mad? Vil du gerne udfordre dig med en rutsjebanetur for jeres smagsløg?</span>
                    <span class="show-en notranslate">Are you looking for exotic and tasty food? Would you like to challenge yourself with a rollercoaster ride for your taste buds?</span>
                </p>
                <p class="gallery-text">
                    <span class="show-da">Så er Lamfuz for dig!</span>
                    <span class="show-en notranslate">Then Lamfuz is for you!</span>
                </p>
                <p class="gallery-text">
                    <span class="show-da">I lamfuz vi brænder for at lave mad inspireret af den eksplosion af smag, som det nepalesiske køkken byder på. Vi tilbyder DINE IN, takeout og catering til dig, der længes efter eksotisk mad og nye smage – på en sund måde og uden at tømme din pung!</span>
                    <span class="show-en notranslate">At lamfuz we are passionate about cooking inspired by the explosion of flavors that Nepalese cuisine offers. We offer DINE IN, takeout and catering for those of you who long for exotic food and new flavors - in a healthy way and without emptying your wallet!</span>
                </p>
                <a href="<?php echo home_url('/about'); ?>" class="btn-hero-red" style="margin-top: 1.5rem; text-transform: uppercase; font-size: 0.85rem; padding: 1rem 1.8rem;">
                    <span class="show-da">LÆS MERE OM OS</span>
                    <span class="show-en notranslate">READ MORE ABOUT US</span>
                </a>
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

    <!-- Booking Section -->
    <section class="booking-section" id="book">
        <div class="booking-container">
            <div class="booking-widget">
                <iframe src="https://booking.favouritetable.com/?SiteCode=2125&skin=lamfuz" width="100%" height="560" frameborder="0" scrolling="no" allowfullscreen></iframe>
            </div>
            <div class="booking-content">
                <h4 class="booking-subtitle">NEPALI KØKKEN MED SJÆL</h4>
                <h2 class="booking-title">
                    <span class="desktop-only-title">EN SMAG AF NEPAL –<br>SKABT MED KÆRLIGHED<br>OG TRADITION</span>
                    <span class="mobile-only-title">EN SMAG AF NEPAL – SKABT<br>MED KÆRLIGHED OG<br>TRADITION</span>
                </h2>
                <p class="booking-text">Hos Lamfuz mødes autentiske opskrifter, friskristeder krydderier og lokale råvarer i en oplevelse, der bringer Nepal varme smage til hjertet af København.</p>
            </div>
        </div>

    </section><!-- END booking-section -->

    <!-- Signature Dishes Section -->
    <section class="signature-dishes-section">
        <div class="signature-dishes-container">
            <h2 class="signature-dishes-title">
                <span class="show-da">Vores signaturretter fra Nepal</span>
                <span class="show-en notranslate">Our Signature Nepalese Dishes</span>
            </h2>
            <p class="signature-dishes-subtitle">
                <span class="show-da">Hos Lamfuz er mad ikke bare noget, vi serverer – det er vores måde at byde dig velkommen på. Hver ret på vores menukort er rodfæstet i traditionelle nepalesiske opskrifter, lavet med friske råvarer og krydderier, der er afbalanceret præcis som de skal være. Uanset om det er din første smag af det nepalesiske køkken, eller du vender tilbage for at få de smage, du allerede elsker, så har vi noget, der vil falde i din smag.</span>
                <span class="show-en notranslate">At Lamfuz, food isn't just something we serve — it's how we welcome you. Every dish on our menu is rooted in traditional Nepalese recipes, made with fresh ingredients and spices balanced the way they should be. Whether this is your first taste of Nepalese cuisine or you're coming back for flavours you already love, we've got something that'll hit the spot.</span>
            </p>

            <div class="signature-dishes-grid">
                <!-- Card 1: Momo -->
                <div class="dish-card">
                    <div class="dish-img-container">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/JholMoMo_9-16_Above.webp" alt="Jhol Momo" class="dish-img">
                    </div>
                    <div class="dish-info">
                        <span class="dish-badge">
                            <span class="show-da">Kokkens anbefaling</span>
                            <span class="show-en notranslate">Chef's Recommendation</span>
                        </span>
                        <h3 class="dish-name">Momos & Jhol Momo</h3>
                        <p class="dish-desc">
                            <span class="show-da">Ingen to dage er ens, men én ting ændrer sig aldrig – vores momos laves friske, hver eneste dag. Vælg mellem saftig kylling eller et fyldigt vegansk alternativ, begge serveret med vores signatur-sesam- og tomat-chutney. Vil du have noget med lidt mere spark i? Vælg vores jhol momo, serveret i en rig, syrlig suppe, der løfter denne nepalesiske favorit til et helt nyt niveau.</span>
                            <span class="show-en notranslate">No two days are the same, but one thing never changes — our momo are made fresh, every single day. Pick from juicy chicken or a filling vegan option, both served with our signature sesame and tomato chutney. Want something with a bit more kick? Go for our jhol momo, dunked in a rich, tangy broth that takes this Nepalese favourite to another level.</span>
                        </p>
                    </div>
                </div>

                <!-- Card 2: Dal Bhat Platter -->
                <div class="dish-card">
                    <div class="dish-img-container">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/DhalBhatPlatter_9-16_Above.webp" alt="Dal Bhat Platter" class="dish-img">
                    </div>
                    <div class="dish-info">
                        <span class="dish-badge">
                            <span class="show-da">Husets favorit</span>
                            <span class="show-en notranslate">House Favourite</span>
                        </span>
                        <h3 class="dish-name">Dal Bhat Platter</h3>
                        <p class="dish-desc">
                            <span class="show-da">Spørger du en hvilken som helst person i Nepal, hvad de spiser hver dag, er sandsynligheden stor for, at det er dal bhat. Det er simpel mad lavet rigtigt – velduftende basmatiris, langtidskogte linser, sæsonens grøntsager, hjemmelavet chutney, sprød papadum og præcis de rigtige krydderier, der alle samles på én tilfredsstillende tallerken. Dette er nepalesisk hjemmelavet mad, når det er bedst.</span>
                            <span class="show-en notranslate">If you ask anyone in Nepal what they eat every day, chances are it's dal bhat. It's simple food done right — fragrant basmati rice, slow-cooked lentils, seasonal veg, house-made chutneys, crispy papad, and just the right spices, all coming together in one satisfying plate. This is Nepalese home cooking at its best.</span>
                        </p>
                    </div>
                </div>

                <!-- Card 3: From the Grill -->
                <div class="dish-card">
                    <div class="dish-img-container">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/ChickenChoila_9-16_Above.webp" alt="Sekuwa & Choila" class="dish-img">
                    </div>
                    <div class="dish-info">
                        <span class="dish-badge">
                            <span class="show-da">Fra grillen</span>
                            <span class="show-en notranslate">From the Grill</span>
                        </span>
                        <h3 class="dish-name">Sekuwa & Choila</h3>
                        <p class="dish-desc">
                            <span class="show-da">Røget, krydret og fyldt med smag – det er vores sekuwa, lavet med mørt kyllinge- eller lammekød grillet på traditionel vis. Længes du efter noget lidt mere intenst? Prøv vores choila. Friske krydderurter, hvidløg, ingefær, tomater, løg og chili forenes i en ret, der er kraftfuld fra allerførste mundfuld.</span>
                            <span class="show-en notranslate">Smoky, spiced, and packed with flavour — that's our sekuwa, made with tender chicken or lamb grilled the traditional way. Craving something a little more intense? Try our choila. Fresh herbs, garlic, ginger, tomatoes, onions, and chilli come together for a dish that's bold from the first bite.</span>
                        </p>
                    </div>
                </div>

                <!-- Card 4: Stir-Fried Classics -->
                <div class="dish-card">
                    <div class="dish-img-container">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/ChowMein_9-16_Above.webp" alt="Chow Mein & Fried Rice" class="dish-img">
                    </div>
                    <div class="dish-info">
                        <span class="dish-badge">
                            <span class="show-da">Friske wok-klassikere</span>
                            <span class="show-en notranslate">Freshly Stir-Fried Classics</span>
                        </span>
                        <h3 class="dish-name">Chow Mein & Fried Rice</h3>
                        <p class="dish-desc">
                            <span class="show-da">Tilberedt efter bestilling, aldrig færdiglavet på forhånd – vores chow mein og stegte ris i nepalesisk stil vendes med sæsonens grøntsager, hvidløg, grøn chili og forårsløg. Vælg mellem kylling, kæmperejer eller vegansk, og del det ved bordet eller nyd det hele selv. Ingen dømmer dig uanset hvad.</span>
                            <span class="show-en notranslate">Cooked to order, never sitting around — our Nepalese-style chow mein and fried rice are tossed with seasonal vegetables, garlic, green chilli, and spring onions. Choose chicken, king prawn, or vegan, and share it at the table or enjoy it all to yourself. No judgement either way.</span>
                        </p>
                    </div>
                </div>
            </div>

            <!-- Outro & CTA -->
            <div class="signature-dishes-outro">
                <p class="outro-welcome">
                    <span class="show-da">Uanset om du er her for en hurtig tallerken momos eller et bord fyldt med retter til deling, håber vi, at hvert måltid giver dig en lille smag af Nepal.</span>
                    <span class="show-en notranslate">Whether you're here for a quick plate of momo or a table full of dishes to share, we hope every meal gives you a little taste of Nepal.</span>
                </p>
                <div class="outro-cta-box">
                    <h4 class="outro-cta-title">
                        <span class="show-da">Der er mere at opdage</span>
                        <span class="show-en notranslate">There's More to Discover</span>
                    </h4>
                    <p class="outro-cta-text">
                        <span class="show-da">Forretter, hovedretter, vegetariske specialiteter, grillretter, desserter og kolde drikke til at skylle det hele ned med – vores fulde menukort har meget mere at byde på. Kom sulten.</span>
                        <span class="show-en notranslate">Starters, mains, vegetarian specialities, grills, desserts, and drinks to wash it all down — our full menu has plenty more to explore. Come hungry.</span>
                    </p>
                    <a href="<?php echo home_url('/menu'); ?>" class="btn-hero-red" style="margin-top: 1.5rem; display: inline-block;">
                        <span class="show-da">SE HELE MENUKORTET →</span>
                        <span class="show-en notranslate">VIEW FULL MENU →</span>
                    </a>
                </div>
            </div>
        </div>
    </section>


    <!-- Menu Section -->
    <section class="menu-section" id="menu">
        <div class="menu-container">
            <h2 class="menu-title">OUR MENU</h2>
            <div class="menu-accordion">
                <div class="menu-accordion-item">
                    <div class="menu-accordion-header">
                        <h3>APPETIZERS & SKEWERS</h3>
                        <span class="menu-accordion-icon">+</span>
                    </div>
                    <div class="menu-accordion-content">
                        <div class="menu-item"><span class="menu-item-name">Lamb Sekuwa</span><span class="menu-item-price">99 kr.</span></div>
                        <div class="menu-item"><span class="menu-item-name">Chicken Sekuwa</span><span class="menu-item-price">79 kr.</span></div>
                        <div class="menu-item"><span class="menu-item-name">Chicken Choila</span><span class="menu-item-price">79 kr.</span></div>
                    </div>
                </div>
                <div class="menu-accordion-item">
                    <div class="menu-accordion-header">
                        <h3>MAINS</h3>
                        <span class="menu-accordion-icon">+</span>
                    </div>
                    <div class="menu-accordion-content">
                        <div class="menu-item"><span class="menu-item-name">Daal Bhat Platter</span><span class="menu-item-price">169 kr.</span></div>
                        <div class="menu-item"><span class="menu-item-name">Lamb Platter</span><span class="menu-item-price">250 kr.</span></div>
                        <div class="menu-item"><span class="menu-item-name">Chicken Platter</span><span class="menu-item-price">230 kr.</span></div>
                        <div class="menu-item"><span class="menu-item-name">Vegan Platter</span><span class="menu-item-price">220 kr.</span></div>
                        <div class="menu-item"><span class="menu-item-name">Jhol MoMo</span><span class="menu-item-price">149 kr.</span></div>
                    </div>
                </div>
                <div class="menu-accordion-item">
                    <div class="menu-accordion-header">
                        <h3>PAGES</h3>
                        <span class="menu-accordion-icon">+</span>
                    </div>
                    <div class="menu-accordion-content">
                        <div class="menu-item"><span class="menu-item-name">Lamb Gravy</span><span class="menu-item-price">99 kr.</span></div>
                        <div class="menu-item"><span class="menu-item-name">Chicken Gravy</span><span class="menu-item-price">79 kr.</span></div>
                        <div class="menu-item"><span class="menu-item-name">Rice</span><span class="menu-item-price">39 kr.</span></div>
                    </div>
                </div>
                <div class="menu-accordion-item">
                    <div class="menu-accordion-header">
                        <h3>CHILDREN'S MENU</h3>
                        <span class="menu-accordion-icon">+</span>
                    </div>
                    <div class="menu-accordion-content">
                        <div class="menu-item"><span class="menu-item-name">Chicken Curry</span><span class="menu-item-price">79 kr.</span></div>
                        <div class="menu-item"><span class="menu-item-name">Daal, Rice & Veggies</span><span class="menu-item-price">79 kr.</span></div>
                    </div>
                </div>
                <div class="menu-accordion-item">
                    <div class="menu-accordion-header">
                        <h3>DESSERTS</h3>
                        <span class="menu-accordion-icon">+</span>
                    </div>
                    <div class="menu-accordion-content">
                        <div class="menu-item"><span class="menu-item-name">Ice Cream</span><span class="menu-item-price">69 kr.</span></div>
                        <div class="menu-item"><span class="menu-item-name">Dessert of the Day</span><span class="menu-item-price">69 kr.</span></div>
                    </div>
                </div>
                <div class="menu-accordion-item">
                    <div class="menu-accordion-header">
                        <h3>BEVERAGES</h3>
                        <span class="menu-accordion-icon">+</span>
                    </div>
                    <div class="menu-accordion-content">
                        <div class="menu-item"><span class="menu-item-name">Organic Pilsner</span><span class="menu-item-price">45/65 kr.</span></div>
                        <div class="menu-item"><span class="menu-item-name">Organic IPA</span><span class="menu-item-price">50/70 kr.</span></div>
                        <div class="menu-item"><span class="menu-item-name">Barahsinghe Pilsner</span><span class="menu-item-price">59 kr.</span></div>
                    </div>
                </div>
            </div>
            <div class="menu-actions">
                <a href="<?php echo home_url('/menu'); ?>" class="btn-hero-red" style="text-transform: uppercase; font-size: 0.85rem; padding: 1rem 2.5rem; letter-spacing: 0.02em;">
                    <span class="show-da">SE HELE MENUKORTET</span>
                    <span class="show-en notranslate">SEE THE FULL MENU</span>
                </a>
            </div>
        </div>
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







