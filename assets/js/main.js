/**
 * Hoteles Ferre - Main JavaScript
 *
 * Interactions and entrance animations for the hotel experience.
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

    window.addEventListener('scroll', handleScroll, { passive: true });
    handleScroll();

    // ==========================================================================
    // 2. GSAP Entrance Animations
    // ==========================================================================
    if (typeof gsap !== 'undefined') {
        // Header entrance
        gsap.from('.site-header', {
            opacity: 0,
            y: -20,
            duration: 0.8,
            ease: 'power2.out',
            delay: 0.2
        });

        // Hero search bar entrance
        gsap.from('.hero-search-bar', {
            opacity: 0,
            y: 40,
            duration: 1,
            ease: 'power3.out',
            delay: 0.6
        });

        // Features bar entrance
        gsap.from('.feature-item', {
            opacity: 0,
            y: 30,
            duration: 0.8,
            ease: 'power3.out',
            stagger: 0.15,
            scrollTrigger: {
                trigger: '.features-bar',
                start: 'top 85%'
            }
        });

        // Showcase entrance
        gsap.from('.showcase-content > *', {
            opacity: 0,
            y: 40,
            duration: 0.8,
            ease: 'power3.out',
            stagger: 0.15,
            scrollTrigger: {
                trigger: '.hotel-showcase',
                start: 'top 75%'
            }
        });

        gsap.from('.showcase-image', {
            opacity: 0,
            x: 60,
            duration: 1,
            ease: 'power3.out',
            scrollTrigger: {
                trigger: '.hotel-showcase',
                start: 'top 75%'
            }
        });

        // Room cards entrance
        gsap.from('.room-card', {
            opacity: 0,
            y: 50,
            duration: 0.8,
            ease: 'power3.out',
            stagger: 0.2,
            scrollTrigger: {
                trigger: '.room-types',
                start: 'top 80%'
            }
        });

        // Gallery entrance
        gsap.from('.gallery-item', {
            opacity: 0,
            scale: 0.95,
            duration: 0.8,
            ease: 'power3.out',
            stagger: 0.15,
            scrollTrigger: {
                trigger: '.gallery-section',
                start: 'top 80%'
            }
        });

        // Amenities entrance
        gsap.from('.amenity-item', {
            opacity: 0,
            y: 30,
            duration: 0.6,
            ease: 'power3.out',
            stagger: 0.1,
            scrollTrigger: {
                trigger: '.amenities-section',
                start: 'top 80%'
            }
        });

        // Testimonials entrance
        gsap.from('.testimonial-card', {
            opacity: 0,
            y: 40,
            duration: 0.8,
            ease: 'power3.out',
            stagger: 0.15,
            scrollTrigger: {
                trigger: '.testimonials-section',
                start: 'top 80%'
            }
        });
    }

    // ==========================================================================
    // 3. Smooth scroll for anchor links
    // ==========================================================================
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            const href = this.getAttribute('href');
            if (href === '#') return;

            const target = document.querySelector(href);
            if (target) {
                e.preventDefault();
                target.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    });

    // ==========================================================================
    // 4. Showcase pagination (demo interaction)
    // ==========================================================================
    const showcasePagination = document.querySelector('.showcase-pagination');
    if (showcasePagination) {
        const current = showcasePagination.querySelector('.pagination-current');
        const arrows = showcasePagination.querySelectorAll('.pagination-arrow');
        let currentPage = 1;
        const total = 10;

        arrows.forEach((arrow, index) => {
            arrow.addEventListener('click', () => {
                if (index === 0) {
                    currentPage = currentPage > 1 ? currentPage - 1 : total;
                } else {
                    currentPage = currentPage < total ? currentPage + 1 : 1;
                }
                if (current) current.textContent = currentPage;
            });
        });
    }
});
