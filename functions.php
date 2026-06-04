<?php
/**
 * Ferre Creative Theme functions and definitions
 *
 * @package Ferre
 */

if ( ! function_exists( 'ferre_setup' ) ) :
    /**
     * Sets up theme defaults and registers support for various WordPress features.
     */
    function ferre_setup() {
        /*
         * Let WordPress manage the document title.
         * By adding theme support, we declare that this theme does not use a
         * hard-coded <title> tag in the document head, and WordPress will
         * provide it for us.
         */
        add_theme_support( 'title-tag' );

        /*
         * Enable support for Post Thumbnails on posts and pages.
         *
         * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
         */
        add_theme_support( 'post-thumbnails' );

        /*
         * Switch default core markup for search form, comment form, etc.
         * to output valid HTML5.
         */
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
    // 1. Load Premium Google Fonts (Outfit and Inter)
    wp_enqueue_style( 
        'ferre-fonts', 
        'https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600&family=Outfit:wght@400;600;700;800&display=swap', 
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

    // 3. Load Main Theme Stylesheet (depends on Swiper.css)
    wp_enqueue_style( 
        'ferre-style', 
        get_stylesheet_uri(), 
        array( 'swiper-css' ), 
        '1.0.0' 
    );

    // 4. Load GSAP via CDN (v3.12.5) in the footer
    wp_enqueue_script( 
        'gsap-js', 
        'https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/gsap.min.js', 
        array(), 
        '3.12.5', 
        true 
    );

    // 5. Load Swiper.js via CDN (v11) in the footer (requires Swiper JS library)
    wp_enqueue_script( 
        'swiper-js', 
        'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js', 
        array(), 
        '11.0.0', 
        true 
    );

    // 6. Load Main JavaScript (contains animations initialization, depends on GSAP and Swiper)
    wp_enqueue_script( 
        'ferre-main-js', 
        get_template_directory_uri() . '/assets/js/main.js', 
        array( 'gsap-js', 'swiper-js' ), 
        '1.0.0', 
        true 
    );
}
add_action( 'wp_enqueue_scripts', 'ferre_enqueue_scripts' );
