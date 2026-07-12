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
            } 
            else if (currentScrollY > lastScrollY && currentScrollY > 200) {
                header.classList.add('hidden');
                header.classList.remove('sticky');
            } 
            else if (currentScrollY < lastScrollY && currentScrollY > 50) {
                header.classList.remove('hidden');
                header.classList.add('sticky');
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
        const domain = window.location.hostname;
        const path = "/";
        
        // Clear duplicates to ensure only ONE cookie exists
        document.cookie = "googtrans=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=" + path + ";";
        document.cookie = "googtrans=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=" + path + "; domain=" + domain + ";";
        document.cookie = "googtrans=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=" + path + "; domain=." + domain + ";";
        
        // Set the active language cookie
        document.cookie = "googtrans=/da/" + langCode + "; path=/; SameSite=Lax";
    }

    // Determine active language: check localStorage, fallback to cookie, fallback to default 'da'
    let currentLang = localStorage.getItem('selectedLanguage');
    if (!currentLang) {
        const googtrans = getCookie('googtrans');
        if (googtrans && googtrans.endsWith('/en')) {
            currentLang = 'en';
        } else {
            currentLang = 'da';
        }
        localStorage.setItem('selectedLanguage', currentLang);
    }

    // Force sync the cookie to match the persisted language state on load
    syncTranslateCookie(currentLang);

    // Set initial body classes
    if (currentLang === 'en') {
        document.body.classList.add('lang-en');
        document.body.classList.remove('lang-da');
    } else {
        document.body.classList.add('lang-da');
        document.body.classList.remove('lang-en');
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
                    currentLang = 'da';
                    document.body.classList.add('lang-da');
                    document.body.classList.remove('lang-en');
                    langSelectors.forEach(ls => {
                        const lDA = ls.querySelector('.lang-da-btn');
                        const lEN = ls.querySelector('.lang-en-btn');
                        if (lDA && lEN) { lDA.classList.add('active'); lEN.classList.remove('active'); }
                    });
                    doTranslate('da');
                }
            });
            
            langEN.addEventListener('click', () => {
                if(currentLang !== 'en') {
                    currentLang = 'en';
                    document.body.classList.add('lang-en');
                    document.body.classList.remove('lang-da');
                    langSelectors.forEach(ls => {
                        const lDA = ls.querySelector('.lang-da-btn');
                        const lEN = ls.querySelector('.lang-en-btn');
                        if (lDA && lEN) { lEN.classList.add('active'); lDA.classList.remove('active'); }
                    });
                    doTranslate('en');
                }
            });
        }
    });

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
});



