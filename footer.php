</main><!-- #primary -->

<footer id="footer" class="site-footer">
    <div class="footer-container">
        <div class="footer-brand">
            <div class="logo">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                    <?php bloginfo( 'name' ); ?>
                </a>
            </div>
            <p>Diseñando y animando el futuro de la web con tecnologías modernas e interfaces fluidas.</p>
        </div>

        <div class="footer-navs">
            <div class="footer-col">
                <h4>Explorar</h4>
                <ul>
                    <li><a href="#hero">Inicio</a></li>
                    <li><a href="#features">Características</a></li>
                    <li><a href="#showcase">Galería</a></li>
                </ul>
            </div>
            <div class="footer-col">
                <h4>Recursos</h4>
                <ul>
                    <li><a href="https://swiperjs.com/" target="_blank" rel="noopener">Swiper.js</a></li>
                    <li><a href="https://gsap.com/" target="_blank" rel="noopener">GSAP Docs</a></li>
                    <li><a href="https://wordpress.org/" target="_blank" rel="noopener">WordPress</a></li>
                </ul>
            </div>
        </div>
    </div>

    <div class="footer-bottom">
        <div class="copyright">
            &copy; <?php echo date( 'Y' ); ?> <?php bloginfo( 'name' ); ?>. Todos los derechos reservados.
        </div>
        <div class="footer-socials">
            <a href="#" class="social-link" aria-label="Twitter">TW</a>
            <a href="#" class="social-link" aria-label="GitHub">GH</a>
            <a href="#" class="social-link" aria-label="LinkedIn">LN</a>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
