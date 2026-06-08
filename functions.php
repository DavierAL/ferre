<?php
/**
 * Hoteles Ferre Theme functions and definitions
 *
 * @package Ferre
 */

if ( ! function_exists( 'ferre_setup' ) ) :
    /**
     * Sets up theme defaults and registers support for various WordPress features.
     */
    function ferre_setup() {
        add_theme_support( 'title-tag' );
        add_theme_support( 'post-thumbnails' );
        add_theme_support( 'html5', array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
            'style',
            'script',
        ) );
    }
endif;
add_action( 'after_setup_theme', 'ferre_setup' );

/**
 * Enqueue scripts and styles.
 */
function ferre_enqueue_scripts() {
    // 1. Elegant Hotel Fonts: Playfair Display for headings, Inter for body
    wp_enqueue_style(
        'ferre-fonts',
        'https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400&family=Inter:wght@300;400;500;600&display=swap',
        array(),
        null
    );

    // 2. Load Swiper.css via CDN (v11)
    wp_enqueue_style(
        'swiper-css',
        'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css',
        array(),
        '11.0.0'
    );

    // 3. Load Main Theme Stylesheet
    wp_enqueue_style(
        'ferre-style',
        get_stylesheet_uri(),
        array( 'swiper-css' ),
        '1.0.0'
    );

    // 4. Load GSAP via CDN
    wp_enqueue_script(
        'gsap-js',
        'https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/gsap.min.js',
        array(),
        '3.12.5',
        true
    );

    // 5. Load Swiper.js via CDN
    wp_enqueue_script(
        'swiper-js',
        'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js',
        array(),
        '11.0.0',
        true
    );

    // 6. Load Main JavaScript
    wp_enqueue_script(
        'ferre-main-js',
        get_template_directory_uri() . '/assets/js/main.js',
        array( 'gsap-js', 'swiper-js' ),
        '1.0.0',
        true
    );
}
add_action( 'wp_enqueue_scripts', 'ferre_enqueue_scripts' );
