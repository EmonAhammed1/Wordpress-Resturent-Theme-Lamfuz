<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>
    <footer class="site-footer">
        <div class="footer-container">
            <div class="footer-logo">
                <a href="<?php echo home_url('/'); ?>">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Lamfuz-Logo-Tagline-White-RGB-copy (2) - Copy.webp" alt="Lamfuz Nepali Cuisine" class="footer-logo-img">
                </a>
            </div>
            <div class="footer-columns">
                <!-- Column 1: Opening Hours -->
                <div class="footer-col">
                    <h4 class="show-da">ÅBNINGSTIDER</h4>
                    <h4 class="show-en notranslate">OPENING HOURS</h4>
                    <div class="show-da">
                        <p>MANDAG &ndash; TORSDAG<br>16:00 &ndash; 23:00</p>
                        <p>FREDAG &ndash; LØRDAG<br>16.00 &ndash; 23.30</p>
                        <p>KØKKEN 22:00</p>
                        <p>SIDSTE ANKOMST: 21.30</p>
                    </div>
                    <div class="show-en notranslate">
                        <p>MONDAY &ndash; THURSDAY<br>16:00 &ndash; 23:00</p>
                        <p>FRIDAY &ndash; SATURDAY<br>4:00 PM &ndash; 11:30 PM</p>
                        <p>KITCHEN 10:00 PM</p>
                        <p>LAST ARRIVAL: 9:30 PM</p>
                    </div>
                </div>

                <!-- Column 2: SoMe / Social -->
                <div class="footer-col">
                    <h4 class="show-da">SOME</h4>
                    <h4 class="show-en notranslate">SOCIAL</h4>
                    <a href="https://www.facebook.com/Lamfuz" target="_blank" rel="noopener noreferrer"><svg viewBox="0 0 24 24" width="16" height="16" fill="currentColor" style="vertical-align: middle; margin-right: 6px; display: inline-block;"><path d="M22 12c0-5.52-4.48-10-10-10S2 6.48 2 12c0 4.84 3.44 8.87 8 9.8V15H8v-3h2V9.5C10 7.57 11.57 6 13.5 6H16v3h-2c-.55 0-1 .45-1 1v2h3v3h-3v6.95c4.56-.93 8-4.96 8-9.8z"/></svg>FACEBOOK</a>
                    <a href="https://www.instagram.com/lamfuz.dk/" target="_blank" rel="noopener noreferrer"><svg viewBox="0 0 24 24" width="16" height="16" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="vertical-align: middle; margin-right: 6px; display: inline-block;"><rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line></svg>INSTAGRAM</a>
                </div>

                <!-- Column 3: Menu links -->
                <div class="footer-col">
                    <h4>MENU</h4>
                    <?php
                    if ( has_nav_menu( 'footer-menu' ) ) {
                        wp_nav_menu( array(
                            'theme_location' => 'footer-menu',
                            'container'      => false,
                            'items_wrap'     => '%3$s', // removes the <ul> wrapper
                        ) );
                    } else {
                    ?>
                        <div class="show-da">
                            <a href="<?php echo home_url('/'); ?>">FORSIDE</a>
                            <a href="<?php echo lamfuz_get_page_url('menu'); ?>">MENU</a>
                            <a href="<?php echo lamfuz_get_page_url(array('about', 'om-lamfuz')); ?>">OM LAMFUZ</a>
                            <a href="<?php echo lamfuz_get_page_url('blog'); ?>">BLOG</a>
                            <a href="<?php echo lamfuz_get_page_url(array('contact', 'kontakt')); ?>">KONTAKT</a>
                        </div>
                        <div class="show-en notranslate">
                            <a href="<?php echo home_url('/'); ?>">FRONT</a>
                            <a href="<?php echo lamfuz_get_page_url('menu'); ?>">MENU</a>
                            <a href="<?php echo lamfuz_get_page_url(array('about', 'om-lamfuz')); ?>">ABOUT LAMFUZ</a>
                            <a href="<?php echo lamfuz_get_page_url('blog'); ?>">BLOG</a>
                            <a href="<?php echo lamfuz_get_page_url(array('contact', 'kontakt')); ?>">CONTACT</a>
                        </div>
                    <?php } ?>
                </div>

                <!-- Column 4: Info / About -->
                <div class="footer-col">
                    <h4 class="show-da">INFO</h4>
                    <h4 class="show-en notranslate">ABOUT</h4>
                    <a href="<?php echo lamfuz_get_page_url('book-et-bord'); ?>" class="show-da">OPLEV MERE FRA LAMFUZ</a>
                    <a href="<?php echo lamfuz_get_page_url('book-et-bord'); ?>" class="show-en notranslate">DISCOVER MORE FROM LAMFUZ</a>
                </div>

                <!-- Column 5: Kontakt / Contact -->
                <div class="footer-col">
                    <h4 class="show-da">KONTAKT</h4>
                    <h4 class="show-en notranslate">CONTACT</h4>
                    <p>70 60 56 57</p>
                    <p>INFO@LAMFUZ.COM</p>
                    <div class="show-da">
                        <p>TURESENSGADE 6, 1368,<br>KØBENHAVN K,<br>DENMARK</p>
                    </div>
                    <div class="show-en notranslate">
                        <p>TURESENSGADE 6, 1368,<br>COPENHAGEN K,<br>DENMARK</p>
                    </div>
                </div>
            </div>

            <!-- Footer Bottom Section -->
            <div class="footer-bottom">
                <div class="footer-bottom-links">
                    <a href="#" class="show-da">Privatlivspolitik</a>
                    <a href="#" class="show-da">Cookiepolitik</a>
                    <a href="#" class="show-en notranslate">Privacy Policy</a>
                    <a href="#" class="show-en notranslate">Cookie Policy</a>
                    <a href="#">😊 Find Smiley</a>
                </div>
                <div class="footer-copyright">
                    <span class="show-da">Alle rettigheder forbeholdt &copy; 2026 Lamfuz.dk | Drevet af Blavora</span>
                    <span class="show-en notranslate">All rights reserved &copy; 2026 Lamfuz.dk | Powered by Blavora</span>
                </div>
                <button class="back-to-top" id="backToTop" aria-label="Back to Top">
                    <svg viewBox="0 0 24 24" width="20" height="20">
                        <polyline points="18 15 12 9 6 15" fill="none" stroke="currentColor" stroke-width="2"></polyline>
                    </svg>
                </button>
            </div>
        </div>
    </footer>
    <!-- Google Translate Widget -->
    <div id="google_translate_element" style="display:none;"></div>
    <script type="text/javascript">
    function googleTranslateElementInit() {
      new google.translate.TranslateElement({pageLanguage: 'da', includedLanguages: 'da,en', autoDisplay: false}, 'google_translate_element');
    }
    </script>
    <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <?php wp_footer(); ?>
</body>
</html>


