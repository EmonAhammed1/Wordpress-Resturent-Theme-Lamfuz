// Prevent browser from restoring scroll position on reload
if ('scrollRestoration' in history) {
    history.scrollRestoration = 'manual';
}

// Force scroll to top on reload/load
window.scrollTo(0, 0);

document.addEventListener("DOMContentLoaded", function() {

    // Mobile Menu Toggle
    const mobileMenuToggle = document.getElementById('mobileMenuToggle');
    const mobileNavOverlay = document.getElementById('mobileNavOverlay');
    const mobileMenuClose = document.getElementById('mobileMenuClose');

    if (mobileMenuToggle && mobileNavOverlay) {
        mobileMenuToggle.addEventListener('click', function() {
            mobileNavOverlay.classList.add('active');
            mobileMenuToggle.classList.add('active');
        });

        if (mobileMenuClose) {
            mobileMenuClose.addEventListener('click', function() {
                mobileNavOverlay.classList.remove('active');
                mobileMenuToggle.classList.remove('active');
            });
        }

        // Close mobile drawer on clicking links
        const mobileLinks = mobileNavOverlay.querySelectorAll('a');
        mobileLinks.forEach(link => {
            link.addEventListener('click', () => {
                mobileNavOverlay.classList.remove('active');
                mobileMenuToggle.classList.remove('active');
            });
        });
    }

    // Intersection Observer for scroll animations
    if ('IntersectionObserver' in window) {
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('is-visible');
                    observer.unobserve(entry.target);
                }
            });
        }, { threshold: 0.15 });

        const elementsToAnimate = document.querySelectorAll(
            '.welcome-content, .welcome-image, .concert-card, .support-content'
        );
        
        elementsToAnimate.forEach((el, index) => {
            el.classList.add('animate-on-scroll');
            if (el.classList.contains('concert-card')) {
                el.style.transitionDelay = `${index * 0.15}s`;
            }
            observer.observe(el);
        });
    }

    // Menu Accordion Logic
    const accordions = document.querySelectorAll('.menu-accordion-header');
    accordions.forEach(acc => {
        acc.addEventListener('click', function() {
            const item = this.parentElement;
            
            // Toggle active class
            item.classList.toggle('active');
            
            // Close other items
            const allItems = document.querySelectorAll('.menu-accordion-item');
            allItems.forEach(i => {
                if (i !== item) {
                    i.classList.remove('active');
                }
            });
        });
    });

    // Back to Top Button
    const backToTopBtn = document.getElementById('backToTop');
    if (backToTopBtn) {
        backToTopBtn.addEventListener('click', () => {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });
    }

    // Header Scroll Logic
    const header = document.getElementById('siteHeader');
    let lastScrollY = window.scrollY;

    if (header) {
        window.addEventListener('scroll', () => {
            const currentScrollY = window.scrollY;
            
            if (currentScrollY <= 50) {
                header.classList.remove('sticky');
                header.classList.remove('hidden');
            } else {
                const diff = currentScrollY - lastScrollY;
                
                // Only trigger if scroll delta is greater than 5px to ignore micro-jitters
                if (Math.abs(diff) > 5) {
                    if (diff > 0 && currentScrollY > 200) {
                        // Scrolling down - hide
                        header.classList.add('hidden');
                        header.classList.remove('sticky');
                    } else if (diff < 0) {
                        // Scrolling up - show
                        header.classList.remove('hidden');
                        header.classList.add('sticky');
                    }
                }
            }
            
            lastScrollY = currentScrollY;
        }, { passive: true });
    }

    // Language Translator Logic
    const langSelectors = document.querySelectorAll('.lang-selector, .mobile-lang-selector');
    
    function getCookie(name) {
        const value = "; " + document.cookie;
        const parts = value.split("; " + name + "=");
        if (parts.length === 2) return parts.pop().split(';').shift();
        return null;
    }

    function syncTranslateCookie(langCode) {
        const hostname = window.location.hostname;
        if (langCode === 'da') {
            // Delete googtrans cookie on all path and domain combinations (including parent domains)
            const domainParts = hostname.split('.');
            for (let i = 0; i < domainParts.length - 1; i++) {
                const domain = domainParts.slice(i).join('.');
                document.cookie = "googtrans=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;";
                document.cookie = "googtrans=; expires=Thu, 01 Jan 1970 00:00:00 UTC; domain=" + domain + "; path=/;";
                document.cookie = "googtrans=; expires=Thu, 01 Jan 1970 00:00:00 UTC; domain=." + domain + "; path=/;";
            }
            // Clear any local/session storage cache used by Google Translate
            try {
                sessionStorage.removeItem('googtrans');
                localStorage.removeItem('googtrans');
                for (let key in sessionStorage) {
                    if (key.indexOf('goog') !== -1) {
                        sessionStorage.removeItem(key);
                    }
                }
            } catch(e) {}
        } else {
            // Set the active language cookie on all scopes (host-only, domain, and dotted domain)
            document.cookie = "googtrans=/da/" + langCode + "; path=/;";
            document.cookie = "googtrans=/da/" + langCode + "; domain=" + hostname + "; path=/;";
            document.cookie = "googtrans=/da/" + langCode + "; domain=." + hostname + "; path=/;";
        }
    }

    // Determine active language: check localStorage, fallback to cookie, fallback to default 'en'
    let currentLang = localStorage.getItem('selectedLanguage');
    if (!currentLang) {
        const googtrans = getCookie('googtrans');
        if (googtrans && googtrans.endsWith('/da')) {
            currentLang = 'da';
        } else {
            currentLang = 'en';
        }
        localStorage.setItem('selectedLanguage', currentLang);
    }

    // Force sync the cookie to match the persisted language state on load
    syncTranslateCookie(currentLang);

    // Set initial body classes
    if (currentLang === 'en') {
        document.body.classList.add('lang-en');
        document.documentElement.classList.add('lang-en');
        document.body.classList.remove('lang-da');
        document.documentElement.classList.remove('lang-da');
    } else {
        document.body.classList.add('lang-da');
        document.documentElement.classList.add('lang-da');
        document.body.classList.remove('lang-en');
        document.documentElement.classList.remove('lang-en');
    }

    function doTranslate(langCode) {
        localStorage.setItem('selectedLanguage', langCode);
        syncTranslateCookie(langCode);
        window.location.reload();
    }

    langSelectors.forEach(langSelector => {
        const langDA = langSelector.querySelector('.lang-da-btn');
        const langEN = langSelector.querySelector('.lang-en-btn');
        
        if(langDA && langEN) {
            // Set initial active state based on persisted language
            if (currentLang === 'en') {
                langEN.classList.add('active');
                langDA.classList.remove('active');
            } else {
                langDA.classList.add('active');
                langEN.classList.remove('active');
            }

            langDA.addEventListener('click', () => {
                if(currentLang !== 'da') {
                    doTranslate('da');
                }
            });
            
            langEN.addEventListener('click', () => {
                if(currentLang !== 'en') {
                    doTranslate('en');
                }
            });
        }
    });

    // Floating Book a Table Button (Single click/tap navigates directly to booking page)
    const floatingBookBtn = document.getElementById('floatingBookBtn');

});
    
// Initialize Swiper
document.addEventListener('DOMContentLoaded', function() {
    const swiperEl = document.querySelector('.mySwiper');
    if (swiperEl) {
        let isHovered = false;
        
        var swiper = new Swiper('.mySwiper', {
            slidesPerView: 'auto',
            spaceBetween: 20,
            loop: true,
            speed: 6000,
            autoplay: {
                delay: 0,
                disableOnInteraction: false,
                reverseDirection: false,
            },
            grabCursor: true,
            allowTouchMove: true,
            freeMode: {
                enabled: true,
                momentum: true,
                momentumRatio: 1.2,
                momentumVelocityRatio: 1.2,
            },
            mousewheel: {
                forceToAxis: true,
            },
            on: {
                init: function() {
                    // Track hover manually and stop/start autoplay
                    swiperEl.addEventListener('mouseenter', () => {
                        isHovered = true;
                        this.autoplay.stop();
                    });
                    swiperEl.addEventListener('mouseleave', () => {
                        isHovered = false;
                        if (!this.touchEventsData.isTouched) {
                            this.autoplay.start();
                        }
                    });
                },
                autoplayStart: function() {
                    this.wrapperEl.classList.add('swiper-marquee-linear');
                },
                autoplayStop: function() {
                    this.wrapperEl.classList.remove('swiper-marquee-linear');
                },
                touchStart: function() {
                    this.autoplay.stop();
                },
                touchEnd: function() {
                    // Update direction based on user swipe
                    if (this.swipeDirection === 'next') {
                        this.params.autoplay.reverseDirection = false;
                    } else if (this.swipeDirection === 'prev') {
                        this.params.autoplay.reverseDirection = true;
                    }
                    
                    // If no momentum animation starts (e.g. static click/tap), restart autoplay
                    setTimeout(() => {
                        if (!this.animating && !this.autoplay.running && !this.touchEventsData.isTouched && !isHovered) {
                            this.autoplay.start();
                        }
                    }, 150);
                },
                transitionEnd: function() {
                    // Resume autoplay when freeMode momentum stops
                    if (!this.autoplay.running && !this.touchEventsData.isTouched && !isHovered) {
                        this.autoplay.start();
                    }
                }
            }
        });
    }

    // Instagram & Map Pixel Perfect Alignment
    function syncInstaMapAlignment() {
        if (window.innerWidth <= 900) return;

        const sbiImages = document.querySelector('#sb_instagram #sbi_images');
        const mapContainer = document.querySelector('.insta-map-container .map-container');

        if (sbiImages && mapContainer) {
            const imagesHeight = sbiImages.offsetHeight;
            if (imagesHeight > 0) {
                mapContainer.style.height = imagesHeight + 'px';
            }
        }
    }

    syncInstaMapAlignment();
    window.addEventListener('load', syncInstaMapAlignment);
    window.addEventListener('resize', syncInstaMapAlignment);
    setTimeout(syncInstaMapAlignment, 300);
    setTimeout(syncInstaMapAlignment, 1000);
    setTimeout(syncInstaMapAlignment, 2500);
});



