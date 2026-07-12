<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/**
 * Template Name: About
 */
get_header(); ?>

<main id="primary" class="site-main">

    <!-- HERO SECTION -->
    <section class="about-hero-section">
        <div class="about-hero-bg">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Space-1_16-9_Side.webp" alt="Om Lamfuz">
            <div class="about-hero-overlay"></div>
        </div>
        <div class="about-container" style="width: 100%; position: relative; z-index: 10;">
            <div class="about-hero-content">
                <h1 class="about-hero-title">OM LAMFUZ</h1>
            </div>
        </div>
    </section>

    <!-- INTRO SECTION -->
    <section class="about-intro-section">
        <div class="about-container">
            <div class="about-intro-image">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Dish-3_16-9_Above.webp" alt="Lamfuz Table">
            </div>
            
            <div class="about-intro-text">
                <div class="about-intro-black">
                    <p>At Lamfuz, it's about more than food — it's about creating an unforgettable experience. We bring the authentic flavours of Nepal to the heart of Copenhagen with passion, carefully selected spices, and a deep respect for our culinary heritage.</p>

                    <p>Every dish we prepare is inspired by childhood memories of growing up in Nepal, where the aromas of garlic, ginger, chilli, cumin, and coriander filled family kitchens and meals were always shared with warmth and hospitality. Those traditions continue to inspire everything we do today.</p>
                </div>

                <div class="about-intro-orange">
                    <p>Our cuisine is about more than recipes. It reflects craftsmanship, authenticity, and the welcoming spirit that defines Nepalese culture. From freshly prepared vegetables and slow-cooked sauces to our signature spice blends, every plate is created with precision, care, and respect for the ingredients. Here in Copenhagen, we proudly share those traditions while combining them with modern presentation, locally sourced seasonal ingredients, and genuine Nepalese hospitality.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- STORY SECTION -->
    <section class="about-story-section">
        <div class="about-container">
            <div class="about-split">
                <div class="about-split-image">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Dish-1_4-5_Side.webp" alt="Authentic Taste">
                </div>
                <div class="about-split-content">
                    <h2 class="about-section-title">
                        Experience the Authentic Taste of Nepal at Lamfuz
                    </h2>
                    <p>Lamfuz offers a dining experience where traditional Nepalese flavours meet contemporary Copenhagen. The restaurant itself reflects the same care that goes into every meal. Much of the interior was personally built by chef Krishna using reclaimed and recycled materials, creating a warm, welcoming atmosphere that feels both personal and authentic. Every detail has been thoughtfully chosen, from the handcrafted décor to the carefully selected ingredients that define our menu.</p>
                    <p>Our kitchen prepares homemade spice blends that are freshly roasted to bring out their rich aromas and distinctive flavours. Alongside these authentic Nepalese ingredients, we use high-quality Danish seasonal produce to create dishes that honour our roots while embracing the best local ingredients.</p>
                    <p>Guests will also discover traditional Nepalese tea, celebrated for its smooth, delicate flavour and subtle umami notes, served alongside carefully selected Danish beverages. Every dish tells a story of Nepal — one that celebrates tradition while embracing modern culinary craftsmanship.</p>
                    <a href="<?php echo home_url('/book-et-bord'); ?>" class="btn-hero-red" style="margin-top: 1.5rem; text-transform: uppercase; font-size: 0.85rem; padding: 1rem 1.8rem; display: inline-block;">RESERVE A TABLE</a>
                </div>
            </div>
        </div>
    </section>

    <!-- BANNER SECTION -->
    <section class="about-banner-section">
        <div class="about-container">
            <div class="about-split">
                <div class="about-split-image">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Dish-3_16-9_Above.webp" alt="About Lamfuz">
                </div>
                <div class="about-split-content">
                    <h2 class="about-section-title">About Lamfuz</h2>
                    <p>Lamfuz invites you to experience the vibrant flavours and rich culinary traditions of Nepal. Whether you choose to dine in or enjoy takeaway, our goal is to offer authentic Nepalese cuisine in a relaxed and welcoming environment where everyone feels at home.</p>
                    <p>The bold combination of cumin, turmeric, coriander, garlic, ginger, and fresh chilli creates the distinctive flavours that define Nepalese cooking. These carefully balanced spices bring every dish to life, delivering both incredible taste and wholesome goodness.</p>
                    <p>Our menu has something for everyone. We proudly serve a wide selection of vegetarian and vegan dishes, alongside authentic Nepalese lamb, chicken, and seasonal fish prepared using traditional recipes. Whether you're discovering Nepalese cuisine for the first time or returning for your favourite dish, Lamfuz offers an authentic dining experience full of flavour, warmth, and hospitality.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- TEAM SECTION -->
    <section class="about-team-section">
        <div class="about-container">
            <div class="about-split">
                <div class="about-split-content">
                    <h2 class="about-section-title" style="margin-bottom: 1.5rem;">Our Team</h2>
                    <p>Behind Lamfuz are Krishna Adhikari and Badal Maharjan, two friends brought together by a shared love for Nepalese food and the desire to introduce its incredible flavours to Denmark.</p>
                    <p>Growing up in Nepal, both spent their childhoods surrounded by rice fields, family kitchens, and the herbs and spices that make Nepalese cuisine so distinctive. Those early experiences shaped not only their love of food but also their appreciation for the traditions and hospitality that continue to inspire Lamfuz today.</p>
                    <p>After moving to Denmark, Krishna and Badal spent nearly nine years working in Danish cafés and restaurants, developing their culinary expertise while gaining a deep understanding of local ingredients, service, and hospitality. During those years, their shared dream gradually became clear—to create a restaurant where authentic Nepalese food could be enjoyed without compromise.</p>
                    <p>Many evenings were spent talking over food and drinks, discussing ideas and imagining what that restaurant could become. One memorable late-night conversation turned that dream into a decision: to build something together that reflected both their heritage and their passion.</p>
                </div>
                <div class="about-split-image about-team-image">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/LAMFUZ-team.webp" alt="Lamfuz Team">
                </div>
            </div>
        </div>
    </section>

</main>

<?php get_footer(); ?>




