<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 *
 * @package Ferre
 */

get_header();
?>

<!-- Section: Hero Swiper Slider -->
<section id="hero" class="hero-slider-section">
    <!-- Slider main container -->
    <div class="swiper main-hero-slider">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">
            
            <!-- Slide 1 -->
            <div class="swiper-slide">
                <div class="slide-bg" style="background-image: linear-gradient(rgba(10, 11, 16, 0.9), rgba(10, 11, 16, 0.9)), url('https://images.unsplash.com/photo-1618005182384-a83a8bd57fbe?auto=format&fit=crop&w=1200&q=80');"></div>
                <div class="slide-content">
                    <span class="slide-tagline">Swiper.js Integrado</span>
                    <h1 class="slide-title">Diseños que cobran <span>Vida</span></h1>
                    <p class="slide-desc">Deslizadores ultra fluidos con soporte táctil, gestos y aceleración por hardware integrados de forma nativa en tu tema de WordPress.</p>
                    <a href="#features" class="slide-btn">Descubrir más <span>&rarr;</span></a>
                </div>
            </div>
            
            <!-- Slide 2 -->
            <div class="swiper-slide">
                <div class="slide-bg" style="background-image: linear-gradient(rgba(10, 11, 16, 0.9), rgba(10, 11, 16, 0.9)), url('https://images.unsplash.com/photo-1634017839464-5c339ebe3cb4?auto=format&fit=crop&w=1200&q=80');"></div>
                <div class="slide-content">
                    <span class="slide-tagline">GSAP Core</span>
                    <h2 class="slide-title">Interacciones <span>Ultra Fluidas</span></h2>
                    <p class="slide-desc">Eleva la experiencia visual de tus usuarios con transiciones complejas, líneas de tiempo y animaciones basadas en scroll de alto rendimiento.</p>
                    <a href="#features" class="slide-btn">Ver animaciones <span>&rarr;</span></a>
                </div>
            </div>
            
            <!-- Slide 3 -->
            <div class="swiper-slide">
                <div class="slide-bg" style="background-image: linear-gradient(rgba(10, 11, 16, 0.9), rgba(10, 11, 16, 0.9)), url('https://images.unsplash.com/photo-1618005198143-e5283464f28f?auto=format&fit=crop&w=1200&q=80');"></div>
                <div class="slide-content">
                    <span class="slide-tagline">Desarrollo Limpio</span>
                    <h2 class="slide-title">Estética y <span>Rendimiento</span></h2>
                    <p class="slide-desc">Un tema de WordPress optimizado, libre de librerías lentas e innecesarias. Diseñado con CSS nativo bajo estándares modernos.</p>
                    <a href="#footer" class="slide-btn">Empezar ahora <span>&rarr;</span></a>
                </div>
            </div>
            
        </div>
        
        <!-- Pagination -->
        <div class="swiper-pagination"></div>

        <!-- Navigation buttons -->
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
    </div>
</section>

<!-- Section: Features (Animated with GSAP) -->
<section id="features" class="features-section">
    <div class="section-container">
        
        <div class="section-header">
            <span class="section-subtitle">Tecnologías Encoladas</span>
            <h2 class="section-title">Boilerplate de Alto Rendimiento</h2>
        </div>

        <div class="features-grid">
            
            <!-- Feature Card 1 -->
            <div class="feature-card">
                <div class="feature-icon-wrapper">
                    <span class="feature-icon">📱</span>
                </div>
                <h3>Swiper.js Slider</h3>
                <p>Implementación moderna de carruseles de imágenes y contenido con soporte touch responsivo, perfecto para galerías, portafolios y testimonios sin depender de plugins de terceros.</p>
            </div>

            <!-- Feature Card 2 -->
            <div class="feature-card">
                <div class="feature-icon-wrapper">
                    <span class="feature-icon">⚡</span>
                </div>
                <h3>GSAP Animations</h3>
                <p>La librería estándar en la industria para crear animaciones fluidas y avanzadas con manipulación directa del DOM, ideal para efectos de scroll y micro-interacciones interactivas.</p>
            </div>

            <!-- Feature Card 3 -->
            <div class="feature-card">
                <div class="feature-icon-wrapper">
                    <span class="feature-icon">📦</span>
                </div>
                <h3>WordPress WP Core</h3>
                <p>Estructura limpia e ideal. El código se integra respetando el ciclo de vida de encolamiento mediante el archivo functions.php, optimizando los tiempos de carga del sitio web.</p>
            </div>

        </div>

    </div>
</section>

<?php
get_footer();
