<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>
    <footer class="site-footer">
        <div class="footer-container">

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
                    <p style="display: flex; align-items: center;"><svg viewBox="0 0 24 24" width="16" height="16" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="vertical-align: middle; margin-right: 8px; display: inline-block; flex-shrink: 0;"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg><a href="tel:+4570605657" style="color: inherit; text-decoration: none;">70 60 56 57</a></p>
                    <p style="display: flex; align-items: center;"><svg viewBox="0 0 24 24" width="16" height="16" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="vertical-align: middle; margin-right: 8px; display: inline-block; flex-shrink: 0;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg><a href="mailto:INFO@LAMFUZ.COM" style="color: inherit; text-decoration: none;">INFO@LAMFUZ.COM</a></p>
                    <div class="show-da">
                        <p style="display: flex; align-items: flex-start;"><svg viewBox="0 0 24 24" width="16" height="16" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="vertical-align: middle; margin-right: 8px; display: inline-block; flex-shrink: 0; margin-top: 3px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg><span>TURESENSGADE 6, 1368,<br>KØBENHAVN K,<br>DENMARK</span></p>
                    </div>
                    <div class="show-en notranslate">
                        <p style="display: flex; align-items: flex-start;"><svg viewBox="0 0 24 24" width="16" height="16" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="vertical-align: middle; margin-right: 8px; display: inline-block; flex-shrink: 0; margin-top: 3px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg><span>TURESENSGADE 6, 1368,<br>COPENHAGEN K,<br>DENMARK</span></p>
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

    <!-- Floating UI Elements -->
    <button class="back-to-top" id="backToTop" aria-label="Back to Top">
        <svg viewBox="0 0 24 24" width="20" height="20">
            <polyline points="18 15 12 9 6 15" fill="none" stroke="currentColor" stroke-width="2"></polyline>
        </svg>
    </button>

    <a href="<?php echo lamfuz_get_page_url(array('book-et-bord', 'book-table')); ?>" class="floating-book-btn" id="floatingBookBtn" aria-label="Book a Table">
        <svg viewBox="0 0 24 24">
            <path d="M19 4h-1V2h-2v2H8V2H6v2H5c-1.11 0-1.99.9-1.99 2L3 20c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 16H5V9h14v11zM7 11h2v2H7zm4 0h2v2h-2zm4 0h2v2h-2zm-8 4h2v2H7zm4 0h2v2h-2zm4 0h2v2h-2z"/>
        </svg>
        <span class="btn-text">
            <span class="show-da">Book et bord</span>
            <span class="show-en notranslate">Book a table</span>
        </span>
    </a>

    <?php wp_footer(); ?>
</body>
</html>


