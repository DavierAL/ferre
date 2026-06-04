/**
 * Ferre Creative Theme - Main JavaScript
 * 
 * Logic to initialize Swiper.js and run GSAP animations.
 */

document.addEventListener('DOMContentLoaded', () => {
    
    // ==========================================================================
    // 1. Header Scroll Effect
    // ==========================================================================
    const header = document.querySelector('.site-header');
    
    const handleScroll = () => {
        if (window.scrollY > 50) {
            header.classList.add('scrolled');
        } else {
            header.classList.remove('scrolled');
        }
    };
    
    window.addEventListener('scroll', handleScroll);
    handleScroll(); // Run once in case page loads scrolled

    // ==========================================================================
    // 2. Swiper.js Initialization
    // ==========================================================================
    const heroSwiper = new Swiper('.main-hero-slider', {
        loop: true,
        speed: 1000,
        autoplay: {
            delay: 6000,
            disableOnInteraction: false,
        },
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        on: {
            init: function () {
                // Animate first slide on load
                animateSlideContent(this.slides[this.activeIndex]);
            },
            slideChangeTransitionStart: function () {
                // Animate content when transitioning to a new slide
                animateSlideContent(this.slides[this.activeIndex]);
            }
        }
    });

    // Function to animate slide elements with GSAP
    function animateSlideContent(activeSlide) {
        if (!activeSlide) return;
        
        const tagline = activeSlide.querySelector('.slide-tagline');
        const title = activeSlide.querySelector('.slide-title');
        const desc = activeSlide.querySelector('.slide-desc');
        const btn = activeSlide.querySelector('.slide-btn');

        // Reset all slide elements first
        gsap.set([tagline, title, desc, btn], { opacity: 0, y: 30 });

        // Create timeline for smooth sequence
        const tl = gsap.timeline({ defaults: { ease: 'power3.out', duration: 0.8 } });

        tl.to(tagline, { opacity: 1, y: 0, delay: 0.2 })
          .to(title, { opacity: 1, y: 0 }, '-=0.6')
          .to(desc, { opacity: 1, y: 0 }, '-=0.6')
          .to(btn, { opacity: 1, y: 0 }, '-=0.6');
    }

    // ==========================================================================
    // 3. GSAP Entrance Animations (Header & Navigation)
    // ==========================================================================
    const headerTl = gsap.timeline({ defaults: { ease: 'power2.out', duration: 0.8 } });
    
    headerTl.from('.logo', { opacity: 0, x: -30, delay: 0.2 })
            .from('.main-navigation ul li', { opacity: 0, y: -20, stagger: 0.1 }, '-=0.5')
            .from('.nav-cta', { opacity: 0, scale: 0.8 }, '-=0.4');

    // ==========================================================================
    // 4. GSAP Card Reveal via Intersection Observer
    // ==========================================================================
    const featuresGrid = document.querySelector('.features-grid');
    const featureCards = document.querySelectorAll('.feature-card');

    if (featuresGrid && featureCards.length > 0) {
        // Set initial state of cards
        gsap.set(featureCards, { opacity: 0, y: 50 });

        const observerOptions = {
            root: null,
            threshold: 0.15,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    // Animate all cards with a stagger effect once the container is visible
                    gsap.to(featureCards, {
                        opacity: 1,
                        y: 0,
                        duration: 1,
                        ease: 'power3.out',
                        stagger: 0.2
                    });
                    
                    // Stop observing once animation triggers
                    observer.unobserve(entry.target);
                }
            });
        }, observerOptions);

        observer.observe(featuresGrid);
    }
});
