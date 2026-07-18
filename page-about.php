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
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/LAMFUZ-team.webp" alt="Om Lamfuz">
            <div class="about-hero-overlay"></div>
        </div>
        <div class="about-container" style="width: 100%; position: relative; z-index: 10;">
            <div class="about-hero-content">
                <h1 class="about-hero-title">
                    <span class="show-da">OM LAMFUZ</span>
                    <span class="show-en notranslate">ABOUT LAMFUZ</span>
                </h1>
            </div>
        </div>
    </section>

    <!-- INTRO SECTION -->
    <section class="about-intro-section">
        <div class="about-container">
            <div class="about-split">
                <div class="about-split-content">
                    <h2 class="about-section-title" style="text-align: left; margin-bottom: 1rem;">
                        <span class="show-da">Et autentisk nepalesisk køkken i hjertet af København</span>
                        <span class="show-en notranslate">An Authentic Nepali Kitchen in the Heart of Copenhagen</span>
                    </h2>
                    <h4 class="about-section-subtitle" style="font-weight: 700; color: #b2512b; margin-bottom: 1.5rem; text-transform: none; letter-spacing: normal; font-size: 1.15rem; font-family: var(--font-body);">
                        <span class="show-da">Autentisk smag. Moderne udtryk. Forankret i Nepal. Skabt til København.</span>
                        <span class="show-en notranslate">Authentic Taste. Modern Expression. Rooted in Nepal. Made for Copenhagen.</span>
                    </h4>
                    <div class="show-da" style="color: #b3522a; font-family: var(--font-body); font-size: 1.05rem; line-height: 1.8;">
                        <p style="margin-bottom: 1.2rem;">Lamfuz er mere end en restaurant. Det er en fejring af nepalesisk kultur, smag og gæstfrihed, bragt til hjertet af København. Hver ret, vi serverer, fortæller en historie - en der begynder i Nepals bjerge og dale, fortsætter gennem mange års erfaring i danske køkkener, og vækkes til live i dag på Turesensgade.</p>
                        <p style="margin-bottom: 1.2rem;">Vores filosofi er enkel: at ære traditionen og samtidig omfavne nutiden. Vi forbliver tro mod autentiske nepalesiske opskrifter, tilbereder hver ret med omhu og bruger de fineste danske sæsonbestemte ingredienser til at skabe mad, der føles både tidløs og moderne. Det er det, vi kalder en autentisk smag med et moderne udtryk.</p>
                        <p style="margin-bottom: 0;">Mere end noget andet er Lamfuz bygget på mennesker, familie, venskab, håndværk og troen på, at god mad har styrken til at samle alle omkring det samme bord.</p>
                    </div>
                    <div class="show-en notranslate" style="color: #b3522a; font-family: var(--font-body); font-size: 1.05rem; line-height: 1.8;">
                        <p style="margin-bottom: 1.2rem;">Lamfuz is more than a restaurant. It is a celebration of Nepali culture, flavours, and hospitality, brought to the heart of Copenhagen. Every dish we serve tells a story, one that begins in the mountains and valleys of Nepal, continues through years of experience in Danish kitchens, and comes to life today on Turesensgade.</p>
                        <p style="margin-bottom: 1.2rem;">Our philosophy is simple: honour tradition while embracing the present. We stay true to authentic Nepali recipes, prepare every dish with care, and use the finest Danish seasonal ingredients to create food that feels both timeless and contemporary. It's what we call an <strong>authentic taste with a modern expression</strong>.</p>
                        <p style="margin-bottom: 0;">More than anything, Lamfuz is built on people, family, friendship, craftsmanship, and the belief that great food has the power to bring everyone around the same table.</p>
                    </div>
                </div>
                <div class="about-split-image">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Dish-3_2_4-5_Above.webp" alt="Authentic Nepali Kitchen">
                </div>
            </div>
        </div>
    </section>

    <!-- HISTORY SECTION -->
    <section class="about-history-section" style="background-color: #fff8e6; padding: 3rem 0 6rem 0; border-bottom: 1px solid rgba(168, 144, 102, 0.2);">
        <div class="about-container">
            <div class="about-split">
                <div class="about-split-image">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Space-1_1-1_Side.webp" alt="Building Lamfuz on Turesensgade">
                </div>
                <div class="about-split-content">
                    <h2 class="about-section-title" style="text-align: left; margin-bottom: 1rem;">
                        <span class="show-da">Opbygningen af Lamfuz på Turesensgade</span>
                        <span class="show-en notranslate">Building Lamfuz on Turesensgade</span>
                    </h2>
                    <h4 class="about-section-subtitle" style="font-weight: 700; color: #b2512b; margin-bottom: 1.5rem; text-transform: none; letter-spacing: normal; font-size: 1.15rem; font-family: var(--font-body);">
                        <span class="show-da">Familieejet. Uafhængigt drevet. Skabt med tradition. Serveret med hjerte.</span>
                        <span class="show-en notranslate">Family Owned. Independently Run. Crafted with Tradition. Served with Heart.</span>
                    </h4>
                    <div class="show-da" style="color: #b3522a; font-family: var(--font-body); font-size: 1.05rem; line-height: 1.8;">
                        <p style="margin-bottom: 1.2rem;">I dag er Lamfuz stolte af at have til huse på Turesensgade 6 i hjertet af København. Restauranten er bygget af køkkenchef Krishna sammen med hans familie og venner ved hjælp af genanvendte materialer, og den afspejler den samme omhu og det samme håndværk, som du finder i vores køkken.</p>
                        <p style="margin-bottom: 2rem;">Navnet Lamfuz er inspireret af et nepalesisk ord forbundet med en let, afslappet livsstil - en filosofi, der præger alt, hvad vi gør. Bag den varme atmosfære ligger et stort fokus på kvalitet, hvor hver eneste håndlavede momo, friskkværnede krydderiblanding og omhyggeligt tilberedte ret afspejler de værdier, som Lamfuz blev bygget på.</p>
                        
                        <h3 style="font-family: var(--font-body); font-size: 1.35rem; font-weight: 700; color: #b2512b; margin-bottom: 1rem; text-transform: uppercase; letter-spacing: normal;">Før Turesensgade: En spæd start ved Krudttønden</h3>
                        <p style="margin-bottom: 1.2rem;">Lamfuz startede som et lille takeaway- og eventsted ved Krudttønden på Østerbro, hvor Krishna og Badal for første gang introducerede det nepalesiske køkken til København. De opbyggede hurtigt en loyal kundeskare, hvilket bekræftede københavnernes appetit på nepalesisk mad.</p>
                        <p style="margin-bottom: 0;">I 2022 trådte Badal ud af projektet, mens Krishna fortsatte rejsen. Da caféen lukkede i 2023, havde den allerede opfyldt sit formål, hvilket banede vejen for åbningen af Lamfuz på Turesensgade, hvor smagen af Nepal i dag serveres med et gennemtænkt, moderne strejf.</p>
                    </div>
                    <div class="show-en notranslate" style="color: #b3522a; font-family: var(--font-body); font-size: 1.05rem; line-height: 1.8;">
                        <p style="margin-bottom: 1.2rem;">Today, Lamfuz is proudly located on Turesensgade 6 in the heart of Copenhagen. Built by Chef Krishna, together with his family and friends, using reclaimed and recycled materials, the restaurant reflects the same care and craftsmanship found in our kitchen.</p>
                        <p style="margin-bottom: 2rem;">The name Lamfuz is inspired by a Nepali word associated with an easy, relaxed way of life, a philosophy that shapes everything we do. Behind the welcoming atmosphere is a commitment to quality, where every handmade momo, freshly ground spice blend, and carefully prepared dish reflects the values on which Lamfuz was built.</p>
                        
                        <h3 style="font-family: var(--font-body); font-size: 1.35rem; font-weight: 700; color: #b2512b; margin-bottom: 1rem; text-transform: uppercase; letter-spacing: normal;">Before Turesensgade: A Small Beginning at Krudttønden</h3>
                        <p style="margin-bottom: 1.2rem;">Lamfuz began as a small takeaway & event space at Krudttønden in Østerbro, where Krishna and Badal first introduced Nepali cuisine to Copenhagen. They quickly built a loyal following, proving the city's appetite for Nepali food.</p>
                        <p style="margin-bottom: 0;">In 2022, Badal stepped away from the project, while Krishna continued the journey. When the café closed in 2023, it had already fulfilled its purpose, leading to the opening of Lamfuz on Turesensgade, where the taste of Nepal is served with a thoughtful modern touch.</p>
                    </div>
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
                        <span class="show-da">
                            <span style="display: inline-block; white-space: nowrap;">OPLEV DEN AUTENTISKE SMAG</span><br>
                            <span style="display: inline-block; white-space: nowrap;">AF NEPAL I LAMFUZ</span>
                        </span>
                        <span class="show-en notranslate">
                            <span style="display: inline-block; white-space: nowrap;">Experience the Authentic Taste</span><br>
                            <span style="display: inline-block; white-space: nowrap;">of Nepal at Lamfuz</span>
                        </span>
                    </h2>
                    <div class="show-da">
                        <p>Lamfuz betyder slendrian, men med et interior bygget af kokken selv i genbrugsmaterialer og med alle detaljer kælet for, fornemmer man tydeligt den kærlighed, Krishna lægger i sin restaurant. Fra det kompromisløse valg of specialvarer til de hjemmelavede og til perfektion ristede krydderiblandinger, er man ikke i tvivl om, at Krishnas ambition er at placere Nepal solidt på den københavnske spisescene som et unikum af en oplevelse.</p>
                        <p>På hylden står den nepalesiske te – kendt for sin særlige blødhed og umamismag – side om side med danskproducerede sodavand, og i vitualrummet finder man kun de bedste koldpressede rapsolier. Retterne designes med udgangspunkt i danske råvarer i sæson og formes med Krishnas fornemmelse for Nepal, fuld of historier. På tallerkenerne i Lamfuz introduceres man til en moderne fortælling om den nepalesiske smagspalet i varme og muntre omgivelser.</p>
                        <a href="<?php echo home_url('/book-et-bord'); ?>" class="btn-hero-red" style="margin-top: 1.5rem; text-transform: uppercase; font-size: 0.85rem; padding: 1rem 1.8rem; display: inline-block;">RESERVER ET BORD</a>
                    </div>
                    <div class="show-en notranslate">
                        <p>Lamfuz offers a dining experience where traditional Nepalese flavours meet contemporary Copenhagen. The restaurant itself reflects the same care that goes into every meal. Much of the interior was personally built by chef Krishna using reclaimed and recycled materials, creating a warm, welcoming atmosphere that feels both personal and authentic. Every detail has been thoughtfully chosen, from the handcrafted décor to the carefully selected ingredients that define our menu.</p>
                        <p>Our kitchen prepares homemade spice blends that are freshly roasted to bring out their rich aromas and distinctive flavours. Alongside these authentic Nepalese ingredients, we use high-quality Danish seasonal produce to create dishes that honour our roots while embracing the best local ingredients.</p>
                        <p>Guests will also discover traditional Nepalese tea, celebrated for its smooth, delicate flavour and subtle umami notes, served alongside carefully selected Danish beverages. Every dish tells a story of Nepal — one that celebrates tradition while embracing modern culinary craftsmanship.</p>
                        <a href="<?php echo home_url('/book-et-bord'); ?>" class="btn-hero-red" style="margin-top: 1.5rem; text-transform: uppercase; font-size: 0.85rem; padding: 1rem 1.8rem; display: inline-block;">RESERVE A TABLE</a>
                    </div>
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
                    <h2 class="about-section-title">
                        <span class="show-da">OM LAMFUZ</span>
                        <span class="show-en notranslate">About Lamfuz</span>
                    </h2>
                    <div class="show-da">
                        <p>Lamfuz er mere end blot en restaurant; det er en portal til de pulserende markeder og gadekøkkener i Kathmandu. Hver ret, vi serverer, bærer på en historie, et minde fra vores hjemland.</p>
                        <p>Fra de dampende Momos, der vækker barndomsminder, til den rige, krydrede Dhal Bhat, som er rygraden i ethvert nepalesisk måltid, stræber vi efter at give dig en bid of Nepal, hver gang du besøger os. Det handler ikke kun om maden – det er en kulturel udveksling, en rejse i smag, der inviterer dig indenfor i vores verden.</p>
                    </div>
                    <div class="show-en notranslate">
                        <p>Lamfuz invites you to experience the vibrant flavours and rich culinary traditions of Nepal. Whether you choose to dine in or enjoy takeaway, our goal is to offer authentic Nepalese cuisine in a relaxed and welcoming environment where everyone feels at home.</p>
                        <p>The bold combination of cumin, turmeric, coriander, garlic, ginger, and fresh chilli creates the distinctive flavours that define Nepalese cooking. These carefully balanced spices bring every dish to life, delivering both incredible taste and wholesome goodness.</p>
                        <p>Our menu has something for everyone. We proudly serve a wide selection of vegetarian and vegan dishes, alongside authentic Nepalese lamb, chicken, and seasonal fish prepared using traditional recipes. Whether you're discovering Nepalese cuisine for the first time or returning for your favourite dish, Lamfuz offers an authentic dining experience full of flavour, warmth, and hospitality.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- TEAM SECTION -->
    <section class="about-team-section">
        <div class="about-container">
            <div class="about-split">
                <div class="about-split-content">
                    <h2 class="about-section-title" style="margin-bottom: 1.5rem;">
                        <span class="show-da">VORES TEAM</span>
                        <span class="show-en notranslate">Our Team</span>
                    </h2>
                    <div class="show-da">
                        <p class="about-team-subtitle" style="font-weight: 600; margin-bottom: 1.5rem;">Bag Lamfuz står Krishna Adhikari og Badal Maharjan.</p>
                        <p>Vi tilbragte begge hver vores barndom med at fjolle rundt i nepalesiske rismarker – og indimellem smage maden, urterne og krydderierne, der er særlige for vores hjemland. Det fulgte med os, og vi har ikke glemt det siden.</p>
                        <p>Spol frem til Danmark: Gennem ni års arbejde på danske caféer og restauranter, hvor vi oparbejdede vores færdigheder i et køkken, fandt vi en fælles passion for nepalesisk mad og dets vilde smage. Vi begyndte at hænge ud sammen, drikke øl og have lange natlige samtaler – og en beruset nat tænkte vi: Lad os lave noget sammen!</p>
                        <p>Det blev til det, der nu er Lamfuz. Suppleret med en kandidatgrad i ledelse, forretning og iværksætteri kan vi nu føre vores nepalesiske barndoms madkultur helt ud til danske køkkener og middagsborde.</p>
                    </div>
                    <div class="show-en notranslate">
                        <p>Behind Lamfuz are Krishna Adhikari and Badal Maharjan, two friends brought together by a shared love for Nepalese food and the desire to introduce its incredible flavours to Denmark.</p>
                        <p>Growing up in Nepal, both spent their childhoods surrounded by rice fields, family kitchens, and the herbs and spices that make Nepalese cuisine so distinctive. Those early experiences shaped not only their love of food but also their appreciation for the traditions and hospitality that continue to inspire Lamfuz today.</p>
                        <p>After moving to Denmark, Krishna and Badal spent nearly nine years working in Danish cafés and restaurants, developing their culinary expertise while gaining a deep understanding of local ingredients, service, and hospitality. During those years, their shared dream gradually became clear—to create a restaurant where authentic Nepalese food could be enjoyed without compromise.</p>
                        <p>Many evenings were spent talking over food and drinks, discussing ideas and imagining what that restaurant could become. One memorable late-night conversation turned that dream into a decision: to build something together that reflected both their heritage and their passion.</p>
                    </div>
                </div>
                <div class="about-split-image about-team-image">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Space-1_16-9_Side.webp" alt="Lamfuz Team">
                </div>
            </div>
        </div>
    </section>

</main>

<?php get_footer(); ?>




