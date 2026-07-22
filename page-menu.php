<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/**
 * Template Name: Menu
 */
get_header(); ?>

<main id="primary" class="site-main">

    <!-- HERO SECTION -->
    <section class="about-hero-section menu-hero-section">
        <div class="about-hero-bg">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Dish-3_16-9_Above.webp" alt="Menu">
            <div class="about-hero-overlay menu-hero-overlay"></div>
        </div>
        <div class="about-container" style="width: 100%; position: relative; z-index: 10;">
            <div class="about-hero-content">
                <h1 class="about-hero-title">MENU</h1>
            </div>
        </div>
    </section>

    <!-- MENU CONTENT SECTION -->
    <section class="menu-page-section">
        <div class="menu-page-container">

            <!-- MENU INTRO / SEO SECTION -->
            <div class="menu-intro-section">
                <h2 class="menu-intro-title">
                    <span class="show-da">Vores menu: Autentisk nepalesisk mad i København</span>
                    <span class="show-en notranslate">Our Menu: Authentic Nepali Food in Copenhagen</span>
                </h2>
                <p class="menu-intro-seo-subtitle visually-hidden">
                    <span class="show-da">SEO-sidetitel: Nepalesisk menu København | Momo, Dal Bhat og Chow Mein priser - Lamfuz</span>
                    <span class="show-en notranslate">SEO Page Title: Nepalese Menu Copenhagen | Momo, Dal Bhat &amp; Chow Mein Prices - Lamfuz</span>
                </p>
                <p class="menu-intro-desc">
                    <span class="show-da">Opdag vores menu af nepalesiske favoritter, frisk tilberedt hver dag med omhu. Udforsk vores mad, drikkevarer og aktuelle priser nedenfor med veganske og glutenfrie muligheder overalt på vores menukort.</span>
                    <span class="show-en notranslate">Discover our menu of Nepali favourites, freshly prepared every day with care. Explore our food, drinks, and current prices below, with vegan and gluten-free options available across our menu.</span>
                </p>
            </div>

            <!-- DRINKS SECTION -->
            <div class="menu-group-container">
                <div class="menu-group-header">
                    <span class="menu-ornament-leaf left">
                        <svg viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="#b3522a" stroke-width="1.5">
                            <path d="M12,2 Q15,8 20,8 Q15,12 12,22 Q9,12 4,8 Q9,8 12,2" />
                        </svg>
                    </span>
                    <h2 class="menu-group-title">
                        <span class="show-da">DRIKKEVARER</span>
                        <span class="show-en notranslate">DRINKS</span>
                    </h2>
                    <span class="menu-ornament-leaf right">
                        <svg viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="#b3522a" stroke-width="1.5">
                            <path d="M12,2 Q15,8 20,8 Q15,12 12,22 Q9,12 4,8 Q9,8 12,2" />
                        </svg>
                    </span>
                </div>

                <div class="menu-drinks-grid">
                    <!-- BEER & WINE CARD -->
                    <div class="menu-card">
                        <div class="menu-card-icon">
                            <svg viewBox="0 0 24 24" width="32" height="32" fill="none" stroke="#b3522a" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M6 20h10a2 2 0 0 0 2-2V8a2 2 0 0 0-2-2H6a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2z" />
                                <path d="M6 10h10" />
                                <path d="M6 14h10" />
                                <path d="M18 8h1a3 3 0 0 1 3 3v4a3 3 0 0 1-3 3h-1" />
                            </svg>
                        </div>
                        <h3 class="menu-card-title">BEER & WINE</h3>
                        <ul class="menu-items-list">
                            <li class="menu-item-row">
                                <span class="item-name">Pilsner</span>
                                <span class="item-spacer"></span>
                                <span class="item-price">45 / 65 kr.</span>
                            </li>
                            <li class="menu-item-row">
                                <span class="item-name">IPA</span>
                                <span class="item-spacer"></span>
                                <span class="item-price">50 / 70 kr.</span>
                            </li>
                            <li class="menu-item-row">
                                <span class="item-name">Non alcoholic beer</span>
                                <span class="item-spacer"></span>
                                <span class="item-price">59 kr.</span>
                            </li>
                            <li class="menu-item-row">
                                <span class="item-name">Barashinghe Pilsner</span>
                                <span class="item-spacer"></span>
                                <span class="item-price">59 kr.</span>
                            </li>
                            <li class="menu-item-row">
                                <span class="item-name">Riesling - Brand bros 2024 - unfiltered</span>
                                <span class="item-spacer"></span>
                                <span class="item-price">80 / 375 kr.</span>
                            </li>
                            <li class="menu-item-row">
                                <span class="item-name">Red - Cala Nieru-Frappato & Nero d'avola-Sicily Italy</span>
                                <span class="item-spacer"></span>
                                <span class="item-price">80 / 375 kr.</span>
                            </li>
                            <li class="menu-item-row">
                                <span class="item-name">Sparkling - Cremant d'Alsace-Louis Maurer - FR - Pinot Blanc, riesling & pinot noir</span>
                                <span class="item-spacer"></span>
                                <span class="item-price">90 / 425 kr.</span>
                            </li>
                        </ul>
                    </div>

                    <!-- HOUSE MIX CARD -->
                    <div class="menu-card">
                        <div class="menu-card-icon">
                            <svg viewBox="0 0 24 24" width="32" height="32" fill="none" stroke="#b3522a" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M12 22V12" />
                                <path d="M5 12h14" />
                                <path d="M19 3v1l-7 8-7-8V3Z" />
                                <path d="M10 22h4" />
                                <circle cx="8" cy="7" r="1.5" fill="#b3522a" />
                            </svg>
                        </div>
                        <h3 class="menu-card-title">HOUSE MIX</h3>
                        <ul class="menu-items-list">
                            <li class="menu-item-row">
                                <span class="item-name">Temple Ginter twist</span>
                                <span class="item-spacer"></span>
                                <span class="item-price">99 kr.</span>
                            </li>
                            <li class="menu-item-row">
                                <span class="item-name">Nepali Punch</span>
                                <span class="item-spacer"></span>
                                <span class="item-price">99 kr.</span>
                            </li>
                            <li class="menu-item-row">
                                <span class="item-name">Gurans Fizz</span>
                                <span class="item-spacer"></span>
                                <span class="item-price">89 kr.</span>
                            </li>
                            <li class="menu-item-row">
                                <span class="item-name">Terai Cooler</span>
                                <span class="item-spacer"></span>
                                <span class="item-price">89 kr.</span>
                            </li>
                            <li class="menu-item-row">
                                <span class="item-name">Gin & Tonic</span>
                                <span class="item-spacer"></span>
                                <span class="item-price">89 kr.</span>
                            </li>
                        </ul>
                        <div class="menu-card-note">
                            Shots = Timur Tg from 35,- / Mezcal 70,- / Whisky on the Rocks from 50,-
                        </div>
                    </div>

                    <!-- HOUSE REFRESHERS CARD -->
                    <div class="menu-card">
                        <div class="menu-card-icon">
                            <svg viewBox="0 0 24 24" width="32" height="32" fill="none" stroke="#b3522a" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M5 2h14v2H5z" />
                                <path d="M6 6h12l-1.5 15.5A1.5 1.5 0 0 1 15 23H9a1.5 1.5 0 0 1-1.5-1.5L6 6z" />
                                <path d="M15 2v4" />
                                <path d="M15 2H9" />
                                <path d="m13 6 4-4" />
                            </svg>
                        </div>
                        <h3 class="menu-card-title">HOUSE REFRESHERS</h3>
                        <ul class="menu-items-list">
                            <li class="menu-item-row">
                                <span class="item-name">Signature House Soda / Lemonade</span>
                                <span class="item-spacer"></span>
                                <span class="item-price">59 kr.</span>
                            </li>
                            <li class="menu-item-row">
                                <span class="item-name">Anaperitivo/Craft alc free aperetif</span>
                                <span class="item-spacer"></span>
                                <span class="item-price">69 kr.</span>
                            </li>
                            <li class="menu-item-row">
                                <span class="item-name">Filtered water</span>
                                <span class="item-spacer"></span>
                                <span class="item-price">30 kr.</span>
                            </li>
                            <li class="menu-item-row">
                                <span class="item-name">Sparkling water</span>
                                <span class="item-spacer"></span>
                                <span class="item-price">40 kr.</span>
                            </li>
                        </ul>
                    </div>

                    <!-- HOT CARD -->
                    <div class="menu-card">
                        <div class="menu-card-icon">
                            <svg viewBox="0 0 24 24" width="32" height="32" fill="none" stroke="#b3522a" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M18 8h1a4 4 0 0 1 0 8h-1" />
                                <path d="M2 8h16v9a4 4 0 0 1-4 4H6a4 4 0 0 1-4-4V8z" />
                                <path d="M6 1v3" />
                                <path d="M10 1v3" />
                                <path d="M14 1v3" />
                            </svg>
                        </div>
                        <h3 class="menu-card-title">HOT</h3>
                        <ul class="menu-items-list">
                            <li class="menu-item-row">
                                <span class="item-name">Tea pot</span>
                                <span class="item-spacer"></span>
                                <span class="item-price">135 kr. / Tea Cup - 39 kr.</span>
                            </li>
                            <li class="menu-item-row">
                                <span class="item-name">Nepali Chiya</span>
                                <span class="item-spacer"></span>
                                <span class="item-price">45 kr.</span>
                            </li>
                            <li class="menu-item-row">
                                <span class="item-name">Coffee - Espresso</span>
                                <span class="item-spacer"></span>
                                <span class="item-price">35 kr.</span>
                            </li>
                            <li class="menu-item-row">
                                <span class="item-name">Americano</span>
                                <span class="item-spacer"></span>
                                <span class="item-price">39 kr.</span>
                            </li>
                            <li class="menu-item-row">
                                <span class="item-name">Cappuccino/Latte/Cortado</span>
                                <span class="item-spacer"></span>
                                <span class="item-price">49 kr.</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- FOOD SECTION -->
            <div class="menu-group-container" style="margin-top: 5rem;">
                <div class="menu-group-header">
                    <span class="menu-ornament-leaf left">
                        <svg viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="#b3522a" stroke-width="1.5">
                            <path d="M12,2 Q15,8 20,8 Q15,12 12,22 Q9,12 4,8 Q9,8 12,2" />
                        </svg>
                    </span>
                    <h2 class="menu-group-title">
                        <span class="show-da">MAD</span>
                        <span class="show-en notranslate">FOOD</span>
                    </h2>
                    <span class="menu-ornament-leaf right">
                        <svg viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="#b3522a" stroke-width="1.5">
                            <path d="M12,2 Q15,8 20,8 Q15,12 12,22 Q9,12 4,8 Q9,8 12,2" />
                        </svg>
                    </span>
                </div>

                <div class="menu-food-grid">
                    <!-- 1. APPETIZERS & SKEWERS -->
                    <div class="menu-card">
                        <div class="menu-card-icon">
                            <svg viewBox="0 0 24 24" width="32" height="32" fill="none" stroke="#b3522a" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                <line x1="2" y1="22" x2="22" y2="2" />
                                <rect x="5" y="13" width="4" height="4" rx="1" transform="rotate(45 7 15)" />
                                <rect x="10" y="8" width="4" height="4" rx="1" transform="rotate(45 12 10)" />
                                <rect x="15" y="3" width="4" height="4" rx="1" transform="rotate(45 17 5)" />
                            </svg>
                        </div>
                        <h3 class="menu-card-title">APPETIZERS & SKEWERS</h3>
                        <ul class="menu-items-list">
                            <li class="menu-item-row-with-desc">
                                <div class="menu-item-row">
                                    <span class="item-name">Lamb Sekuwa</span>
                                    <span class="item-spacer"></span>
                                    <span class="item-price">99 kr.</span>
                                </div>
                                <div class="item-description">Smoky BBQ Nepali-spiced lamb cubes with a hint of tingling timur.</div>
                            </li>
                            <li class="menu-item-row-with-desc">
                                <div class="menu-item-row">
                                    <span class="item-name">Chicken Sekuwa</span>
                                    <span class="item-spacer"></span>
                                    <span class="item-price">79 kr.</span>
                                </div>
                                <div class="item-description">Smoky BBQ Nepali-spiced Chicken chunks with a hint of tingling timur.</div>
                            </li>
                            <li class="menu-item-row-with-desc">
                                <div class="menu-item-row">
                                    <span class="item-name">Chicken Choila</span>
                                    <span class="item-spacer"></span>
                                    <span class="item-price">79 kr.</span>
                                </div>
                                <div class="item-description">BBQ Chicken seasoned with onion, tomato, garlic-ginger, chili, coriander & lime.</div>
                            </li>
                            <li class="menu-item-row-with-desc">
                                <div class="menu-item-row">
                                    <span class="item-name">Spicy Prawn</span>
                                    <span class="item-spacer"></span>
                                    <span class="item-price">89 kr.</span>
                                </div>
                                <div class="item-description">Spiced King Prawns wok fried with onion, tomato, garlic-ginger, chili, coriander, spring onion & lemon.</div>
                            </li>
                            <li class="menu-item-row-with-desc">
                                <div class="menu-item-row">
                                    <span class="item-name">Spicy Mushroom</span>
                                    <span class="item-spacer"></span>
                                    <span class="item-price">79 kr.</span>
                                </div>
                                <div class="item-description">Stir-fried Mushrooms seasoned with onion, tomato, garlic-ginger, chili, coriander & lemon.</div>
                            </li>
                            <li class="menu-item-row-with-desc">
                                <div class="menu-item-row">
                                    <span class="item-name">Papad</span>
                                    <span class="item-spacer"></span>
                                    <span class="item-price">20 kr.</span>
                                </div>
                                <div class="item-description">Crispy lentil flatbread.</div>
                            </li>
                            <li class="menu-item-row-with-desc">
                                <div class="menu-item-row">
                                    <span class="item-name">Cucumber Bites</span>
                                    <span class="item-spacer"></span>
                                    <span class="item-price">59 kr.</span>
                                </div>
                                <div class="item-description">Peeled cucumber cubes seasoned with toasted ground sesame, sesame oil & coriander.</div>
                            </li>
                            <li class="menu-item-row-with-desc">
                                <div class="menu-item-row">
                                    <span class="item-name">Salad Bowl</span>
                                    <span class="item-spacer"></span>
                                    <span class="item-price">59 kr.</span>
                                </div>
                                <div class="item-description">Crudite salad seasoned with toasted ground sesame, coriander & turmeric infused oil (add chicken/Tofu +29 / King Prawn +39).</div>
                            </li>
                            <li class="menu-item-row-with-desc">
                                <div class="menu-item-row">
                                    <span class="item-name">Jeera Aalu</span>
                                    <span class="item-spacer"></span>
                                    <span class="item-price">39 kr.</span>
                                </div>
                                <div class="item-description">Cumin stir-fried small potatoes.</div>
                            </li>
                        </ul>
                    </div>

                    <!-- 2. SIGNATURE PLATTERS -->
                    <div class="menu-card">
                        <div class="menu-card-icon">
                            <svg viewBox="0 0 24 24" width="32" height="32" fill="none" stroke="#b3522a" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M2 18h20" />
                                <path d="M5 18a7 7 0 0 1 14 0" />
                                <circle cx="12" cy="11" r="1.5" fill="#b3522a" />
                            </svg>
                        </div>
                        <h3 class="menu-card-title">SIGNATURE PLATTERS</h3>
                        <div class="menu-card-intro-text" style="font-size: 0.9rem; font-style: italic; color: #b3522a; text-align: center; margin-bottom: 2rem;">
                            Experience the true heart of Nepali Cuisine with our complete traditional meal.
                        </div>
                        <ul class="menu-items-list">
                            <li class="menu-item-row-with-desc">
                                <div class="menu-item-row">
                                    <span class="item-name">Daal Bhat platter</span>
                                    <span class="item-spacer"></span>
                                    <span class="item-price">169 kr.</span>
                                </div>
                                <div class="item-description">Our Platter is served with fragrant long-grain basmati rice, garlic-ginger & Jimbu-tempered daal, stir-fried seasonal greens, house-fermented greens, wok-fired rayo saag, spiced fried bitter gourd, tomato-timur chutney, crispy papad & Ghiu (clarified butter).</div>
                            </li>
                            <li class="menu-item-row-with-desc">
                                <div class="menu-item-row">
                                    <span class="item-name">Lamb Platter</span>
                                    <span class="item-spacer"></span>
                                    <span class="item-price">250 kr.</span>
                                </div>
                                <div class="item-description">Stir fried tender lamb cubes marinated in Nepali spices coated in spicy gravy.</div>
                            </li>
                            <li class="menu-item-row-with-desc">
                                <div class="menu-item-row">
                                    <span class="item-name">Chicken Platter</span>
                                    <span class="item-spacer"></span>
                                    <span class="item-price">230 kr.</span>
                                </div>
                                <div class="item-description">Stir fried chicken cubes marinated in Nepali spices coated in spicy gravy.</div>
                            </li>
                            <li class="menu-item-row-with-desc">
                                <div class="menu-item-row">
                                    <span class="item-name">Vegan Platter</span>
                                    <span class="item-spacer"></span>
                                    <span class="item-price">220 kr.</span>
                                </div>
                                <div class="item-description">Stir fried tofu cubes marinated in Nepali spices coated in spicy gravy.</div>
                            </li>
                        </ul>
                    </div>

                    <!-- 3. MOMO FEASTS -->
                    <div class="menu-card">
                        <div class="menu-card-icon">
                            <svg viewBox="0 0 24 24" width="32" height="32" fill="none" stroke="#b3522a" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M3 10h18v4H3z" />
                                <path d="M3 6h18v4H3z" />
                                <path d="M12 2a4 4 0 0 1 4 4H8a4 4 0 0 1 4-4z" />
                                <path d="M4 14a8 8 0 0 0 16 0" />
                            </svg>
                        </div>
                        <h3 class="menu-card-title">MOMO FEASTS</h3>
                        <ul class="menu-items-list">
                            <li class="menu-item-row-with-desc">
                                <div class="menu-item-row">
                                    <span class="item-name">MoMo Big <small style="font-weight: 500; font-size: 0.8em; opacity: 0.85;">(Chicken/Vegan – 10 stk)</small></span>
                                    <span class="item-spacer"></span>
                                    <span class="item-price">149 kr.</span>
                                </div>
                                <div class="item-description">Steamed Nepalese dumplings served on sesame-tomato chutney and fresh coriander.</div>
                            </li>
                            <li class="menu-item-row-with-desc">
                                <div class="menu-item-row">
                                    <span class="item-name">Jhol MoMo <small style="font-weight: 500; font-size: 0.8em; opacity: 0.85;">(Chicken/Vegan – 8 stk)</small></span>
                                    <span class="item-spacer"></span>
                                    <span class="item-price">149 kr.</span>
                                </div>
                                <div class="item-description">Steamed Nepalese dumplings served in hot and spicy soup.</div>
                            </li>
                            <li class="menu-item-row-with-desc">
                                <div class="menu-item-row">
                                    <span class="item-name">MoMo <small style="font-weight: 500; font-size: 0.8em; opacity: 0.85;">(Chicken/Vegan – 5 stk)</small></span>
                                    <span class="item-spacer"></span>
                                    <span class="item-price">75 kr.</span>
                                </div>
                                <div class="item-description">Steamed Nepalese dumplings served on sesame-tomato chutney and fresh coriander.</div>
                            </li>
                        </ul>
                    </div>

                    <!-- 4. RICE & NOODLES -->
                    <div class="menu-card">
                        <div class="menu-card-icon">
                            <svg viewBox="0 0 24 24" width="32" height="32" fill="none" stroke="#b3522a" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M2 12a10 10 0 0 0 20 0H2Z" />
                                <line x1="18" y1="2" x2="11" y2="12" />
                                <line x1="21" y1="3" x2="14" y2="12" />
                            </svg>
                        </div>
                        <h3 class="menu-card-title">RICE & NOODLES</h3>
                        <ul class="menu-items-list">
                            <li class="menu-item-row-with-desc">
                                <div class="menu-item-row">
                                    <span class="item-name">Chow Mein <span style="font-weight: normal; font-size: 0.9em;">(Spicy Nepali Noodles)</span></span>
                                    <span class="item-spacer"></span>
                                    <span class="item-price">129 / 145 kr.</span>
                                </div>
                                <div class="item-description notranslate">Chicken/Vegan: DKK 129 | King Prawn: DKK 145. Noodles stir-fried with green chili, garlic, <span class="notranslate">seasons</span> greens, spring onion & coriander (add Fried Egg +20).</div>
                            </li>
                            <li class="menu-item-row-with-desc">
                                <div class="menu-item-row">
                                    <span class="item-name">Traditional Fried Rice</span>
                                    <span class="item-spacer"></span>
                                    <span class="item-price">129 / 145 kr.</span>
                                </div>
                                <div class="item-description notranslate">Chicken/Vegan: DKK 129 | King Prawn: DKK 145. Fragrant rice stir-fried with Nepali spices, <span class="notranslate">seasons</span> greens, chili, spring onion & coriander (add Fried Egg DKK 20).</div>
                            </li>
                        </ul>
                    </div>

                    <!-- 5. CHILDREN'S MENU -->
                    <div class="menu-card">
                        <div class="menu-card-icon">
                            <svg viewBox="0 0 24 24" width="32" height="32" fill="none" stroke="#b3522a" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                <circle cx="12" cy="12" r="10" />
                                <circle cx="8" cy="10" r="1.5" fill="#b3522a" />
                                <circle cx="16" cy="10" r="1.5" fill="#b3522a" />
                                <path d="M8 15a4 4 0 0 0 8 0" />
                                <path d="M12 2c1.5 2 3.5 2 5 0" />
                            </svg>
                        </div>
                        <h3 class="menu-card-title">CHILDREN'S MENU</h3>
                        <ul class="menu-items-list">
                            <li class="menu-item-row">
                                <span class="item-name">Kylling med ris og stegte grøntsager</span>
                                <span class="item-spacer"></span>
                                <span class="item-price">79 kr.</span>
                            </li>
                            <li class="menu-item-row">
                                <span class="item-name">Daal med ris og stegte grøntsager</span>
                                <span class="item-spacer"></span>
                                <span class="item-price">79 kr.</span>
                            </li>
                        </ul>
                    </div>

                    <!-- 6. SIDES -->
                    <div class="menu-card">
                        <div class="menu-card-icon">
                            <svg viewBox="0 0 24 24" width="32" height="32" fill="none" stroke="#b3522a" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M4 14a8 8 0 0 0 16 0H4Z" />
                                <path d="M6 10c0-3 3-4 6-4s6 1 6 4" />
                            </svg>
                        </div>
                        <h3 class="menu-card-title">SIDES</h3>
                        <ul class="menu-items-list">
                            <li class="menu-item-row">
                                <span class="item-name">Rice</span>
                                <span class="item-spacer"></span>
                                <span class="item-price">39 kr.</span>
                            </li>
                            <li class="menu-item-row">
                                <span class="item-name">Lamb Gravy</span>
                                <span class="item-spacer"></span>
                                <span class="item-price">99 kr.</span>
                            </li>
                            <li class="menu-item-row">
                                <span class="item-name">Chicken Gravy</span>
                                <span class="item-spacer"></span>
                                <span class="item-price">79 kr.</span>
                                <li class="menu-item-row">
                                    <span class="item-name">Stir-fried greens</span>
                                    <span class="item-spacer"></span>
                                    <span class="item-price">69 kr.</span>
                                </li>
                                <li class="menu-item-row">
                                    <span class="item-name">Ginger-Garlic & Jimbu tempered Daal</span>
                                    <span class="item-spacer"></span>
                                    <span class="item-price">69 kr.</span>
                                </li>
                                <li class="menu-item-row">
                                    <span class="item-name">Wok Fired Mustard green</span>
                                    <span class="item-spacer"></span>
                                    <span class="item-price">69 kr.</span>
                                </li>
                                <li class="menu-item-row">
                                    <span class="item-name">Salad</span>
                                    <span class="item-spacer"></span>
                                    <span class="item-price">39 kr.</span>
                                </li>
                                <li class="menu-item-row">
                                    <span class="item-name">Fermented Greens</span>
                                    <span class="item-spacer"></span>
                                    <span class="item-price">29 kr.</span>
                                </li>
                            </ul>
                        </div>

                        <!-- 7. DESSERT -->
                        <div class="menu-card">
                            <div class="menu-card-icon">
                                <svg viewBox="0 0 24 24" width="32" height="32" fill="none" stroke="#b3522a" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M2 20h20" />
                                    <path d="M21 20V12L12 4L3 12v8Z" />
                                    <path d="M3 12h18" />
                                    <circle cx="12" cy="2" r="1.5" fill="#b3522a" />
                                </svg>
                            </div>
                            <h3 class="menu-card-title">DESSERT</h3>
                            <ul class="menu-items-list">
                                <li class="menu-item-row">
                                    <span class="item-name">Today's Dessert</span>
                                    <span class="item-spacer"></span>
                                    <span class="item-price">69 kr.</span>
                                </li>
                                <li class="menu-item-row">
                                    <span class="item-name">Sorbet</span>
                                    <span class="item-spacer"></span>
                                    <span class="item-price">69 kr.</span>
                                </li>
                            </ul>
                        </div>

                        <!-- 8. HOUSE DIPS -->
                        <div class="menu-card">
                            <div class="menu-card-icon">
                                <svg viewBox="0 0 24 24" width="32" height="32" fill="none" stroke="#b3522a" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M6 12a6 6 0 0 0 12 0H6Z" />
                                    <rect x="4" y="8" width="16" height="4" rx="1" />
                                </svg>
                            </div>
                            <h3 class="menu-card-title">HOUSE DIPS</h3>
                            <ul class="menu-items-list">
                                <li class="menu-item-row">
                                    <span class="item-name">Tomato Chutney</span>
                                    <span class="item-spacer"></span>
                                    <span class="item-price">20 kr.</span>
                                </li>
                                <li class="menu-item-row">
                                    <span class="item-name">Chili Sauce</span>
                                    <span class="item-spacer"></span>
                                    <span class="item-price">20 kr.</span>
                                </li>
                                <li class="menu-item-row">
                                    <span class="item-name">MoMo Chutney</span>
                                    <span class="item-spacer"></span>
                                    <span class="item-price">20 kr.</span>
                                </li>
                                <li class="menu-item-row">
                                    <span class="item-name">Mango Chutney</span>
                                    <span class="item-spacer"></span>
                                    <span class="item-price">20 kr.</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- Footer Info Note -->
        <section class="menu-footer-note-section" style="background-color: #fff8e6; padding: 0 0 6rem 0; overflow: hidden;">
            <div class="menu-page-container">
                <div class="menu-food-footer" style="margin-top: 0;">
                    <p class="menu-intro-desc" style="margin-top: 0;">
                        <span class="show-da">Vi glæder os til at dele Nepals smage med dig. Vores team hjælper altid gerne med anbefalinger eller ønsker til kostbehov.</span>
                        <span class="show-en notranslate">We look forward to sharing the flavours of Nepal with you. Our team is always happy to help with recommendations or dietary requests.</span>
                    </p>
                </div>
            </div>
        </section>

    </main>

    <?php get_footer(); ?>
