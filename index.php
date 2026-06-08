<?php
/**
 * The main template file
 *
 * @package Ferre
 */

get_header();
?>

<!-- Floating WhatsApp Button -->
<a href="https://wa.me/51984584335" class="whatsapp-float" target="_blank" rel="noopener" aria-label="Consultar por WhatsApp">
    <span class="whatsapp-label">Consultar</span>
    <span class="whatsapp-icon">
        <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.446 0 .001 5.446 0 12.05c.001 2.126.557 4.2 1.616 6.026L0 24l6.335-1.652a11.87 11.87 0 005.714 1.46h.005c6.603 0 11.988-5.385 11.99-11.989a11.812 11.812 0 00-3.496-8.413z"/>
        </svg>
    </span>
</a>

<!-- Section: Hero with Search -->
<section id="hero" class="hero-section">
    <div class="hero-image">
        <!-- Placeholder: Imagen hero de atardecer con edificio colonial -->
        <div class="placeholder-image hero-placeholder">
            <span>Hero Image: Atardecer con edificio colonial</span>
        </div>
    </div>

    <div class="hero-search-bar">
        <div class="search-container">
            <span class="search-label">RESERVA TU ESTADÍA</span>
            <div class="search-fields">
                <div class="search-field">
                    <label>CIUDAD</label>
                    <select>
                        <option>Seleccionar</option>
                        <option>Lima</option>
                        <option>Cusco</option>
                        <option>Machu Picchu</option>
                        <option>Tarapoto</option>
                    </select>
                </div>
                <div class="search-field">
                    <label>LLEGADA</label>
                    <input type="date" placeholder="Seleccionar">
                </div>
                <div class="search-field">
                    <label>PARTIDA</label>
                    <input type="date" placeholder="Seleccionar">
                </div>
                <div class="search-field">
                    <label>HUÉSPEDES</label>
                    <select>
                        <option>1 Huésped</option>
                        <option>2 Huéspedes</option>
                        <option>3 Huéspedes</option>
                        <option>4+ Huéspedes</option>
                    </select>
                </div>
                <button type="button" class="search-btn">BUSCAR</button>
            </div>
        </div>
    </div>
</section>

<!-- Section: Features Bar -->
<section class="features-bar">
    <div class="features-bar-container">
        <div class="feature-item">
            <div class="feature-icon">
                <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <circle cx="16" cy="16" r="14" stroke="currentColor" stroke-width="1.5"/>
                    <path d="M10 16L14 20L22 12" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </div>
            <div class="feature-text">
                <strong>MEJOR PRECIO</strong>
                <span>GARANTIZADO</span>
            </div>
        </div>
        <div class="feature-divider"></div>
        <div class="feature-item">
            <div class="feature-icon">
                <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <circle cx="16" cy="16" r="14" stroke="currentColor" stroke-width="1.5"/>
                    <path d="M16 10V16L20 20" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M8 16H10" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/>
                    <path d="M22 16H24" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/>
                </svg>
            </div>
            <div class="feature-text">
                <strong>EARLY CHECK-IN</strong>
                <span>LATE CHECK-OUT</span>
            </div>
        </div>
        <div class="feature-divider"></div>
        <div class="feature-item">
            <div class="feature-icon">
                <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M8 14C8 14 10 8 16 8C22 8 24 14 24 14" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M16 8V4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/>
                    <path d="M12 28H20" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/>
                    <path d="M16 14V28" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/>
                </svg>
            </div>
            <div class="feature-text">
                <strong>BEBIDA</strong>
                <span>DE CORTESÍA</span>
            </div>
        </div>
    </div>
</section>

<!-- Section: Marquee Ticker -->
<section class="marquee-section">
    <div class="marquee-track">
        <div class="marquee-content">
            <span>NO ENCONTRARÁS EN OTRAS PÁGINAS</span>
            <span class="marquee-separator">&#10022;</span>
            <span>RESERVA AQUÍ Y OBTÉN BENEFICIOS EXCLUSIVOS QUE NO ENCONTRARÁS EN OTRAS PÁGINAS</span>
            <span class="marquee-separator">&#10022;</span>
            <span>NO ENCONTRARÁS EN OTRAS PÁGINAS</span>
            <span class="marquee-separator">&#10022;</span>
            <span>RESERVA AQUÍ Y OBTÉN BENEFICIOS EXCLUSIVOS QUE NO ENCONTRARÁS EN OTRAS PÁGINAS</span>
            <span class="marquee-separator">&#10022;</span>
        </div>
        <div class="marquee-content" aria-hidden="true">
            <span>NO ENCONTRARÁS EN OTRAS PÁGINAS</span>
            <span class="marquee-separator">&#10022;</span>
            <span>RESERVA AQUÍ Y OBTÉN BENEFICIOS EXCLUSIVOS QUE NO ENCONTRARÁS EN OTRAS PÁGINAS</span>
            <span class="marquee-separator">&#10022;</span>
            <span>NO ENCONTRARÁS EN OTRAS PÁGINAS</span>
            <span class="marquee-separator">&#10022;</span>
            <span>RESERVA AQUÍ Y OBTÉN BENEFICIOS EXCLUSIVOS QUE NO ENCONTRARÁS EN OTRAS PÁGINAS</span>
            <span class="marquee-separator">&#10022;</span>
        </div>
    </div>
</section>

<!-- Section: Hotel Showcase -->
<section class="hotel-showcase">
    <div class="showcase-container">
        <div class="showcase-content">
            <span class="showcase-location">CUSCO</span>
            <h2 class="showcase-title">Hotel Ankara</h2>
            <p class="showcase-desc">Descubre un refugio de confort moderno en el epicentro de la historia y la magia ancestral de Cusco.</p>
            <a href="#" class="showcase-btn">EXPLORAR</a>
            <div class="showcase-pagination">
                <button class="pagination-arrow" aria-label="Anterior">&#8249;</button>
                <span class="pagination-current">1</span>
                <span class="pagination-sep">/</span>
                <span class="pagination-total">10</span>
                <button class="pagination-arrow" aria-label="Siguiente">&#8250;</button>
            </div>
        </div>
        <div class="showcase-image">
            <div class="placeholder-image showcase-placeholder">
                <span>Hotel Ankara: Interior del hotel con fuente</span>
            </div>
        </div>
    </div>
</section>

<!-- Section: Room Types -->
<section class="room-types">
    <div class="room-types-grid">
        <div class="room-card room-card-text">
            <div class="room-image">
                <div class="placeholder-image room-placeholder">
                    <span>Habitación simple</span>
                </div>
            </div>
            <div class="room-info">
                <span class="room-label">HABITACIONES SIMPLES</span>
                <p>Perfecta para parejas que buscan confort y descanso. Equipada con una cama Queen y todas las comodidades necesarias para disfrutar de una estancia placentera y relajante.</p>
            </div>
        </div>
        <div class="room-card room-card-image">
            <div class="room-image">
                <div class="placeholder-image room-placeholder">
                    <span>Habitación doble</span>
                </div>
            </div>
            <span class="room-overlay-label">HABITACIONES DOBLES</span>
        </div>
        <div class="room-card room-card-image">
            <div class="room-image">
                <div class="placeholder-image room-placeholder">
                    <span>Habitación familiar</span>
                </div>
            </div>
            <span class="room-overlay-label">HABITACIONES FAMILIARES</span>
        </div>
    </div>
</section>

<!-- Section: Gallery -->
<section class="gallery-section">
    <div class="gallery-grid">
        <div class="gallery-item gallery-item-large">
            <div class="placeholder-image gallery-placeholder">
                <span>Buffet de desayuno</span>
            </div>
        </div>
        <div class="gallery-item gallery-item-tall">
            <div class="placeholder-image gallery-placeholder">
                <span>Platos de restaurante</span>
            </div>
        </div>
        <div class="gallery-item gallery-item-wide">
            <div class="placeholder-image gallery-placeholder">
                <span>Gastronomía peruana</span>
            </div>
        </div>
    </div>
</section>

<!-- Section: Amenities -->
<section id="servicios" class="amenities-section">
    <div class="amenities-container">
        <div class="amenity-item">
            <div class="amenity-icon">
                <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect x="6" y="16" width="24" height="14" rx="2" stroke="currentColor" stroke-width="1.5"/>
                    <path d="M10 16V12C10 8.686 12.686 6 16 6H20C23.314 6 26 8.686 26 12V16" stroke="currentColor" stroke-width="1.5"/>
                    <path d="M14 24H22" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/>
                </svg>
            </div>
            <span class="amenity-label">DESAYUNO<br>BUFFET</span>
        </div>
        <div class="amenity-item">
            <div class="amenity-icon">
                <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect x="4" y="20" width="28" height="10" rx="2" stroke="currentColor" stroke-width="1.5"/>
                    <circle cx="10" cy="25" r="3" stroke="currentColor" stroke-width="1.5"/>
                    <circle cx="26" cy="25" r="3" stroke="currentColor" stroke-width="1.5"/>
                    <path d="M12 20V14C12 12.895 12.895 12 14 12H22C23.105 12 24 12.895 24 14V20" stroke="currentColor" stroke-width="1.5"/>
                </svg>
            </div>
            <span class="amenity-label">TRANSPORTE<br>& TRASLADO</span>
        </div>
        <div class="amenity-item">
            <div class="amenity-icon">
                <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect x="8" y="6" width="20" height="24" rx="2" stroke="currentColor" stroke-width="1.5"/>
                    <path d="M12 14H24" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/>
                    <path d="M12 18H24" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/>
                    <path d="M12 22H20" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/>
                </svg>
            </div>
            <span class="amenity-label">LAVANDERÍA</span>
        </div>
        <div class="amenity-item">
            <div class="amenity-icon">
                <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M6 18H30" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/>
                    <path d="M10 18V14C10 11.791 11.791 10 14 10H22C24.209 10 26 11.791 26 14V18" stroke="currentColor" stroke-width="1.5"/>
                    <path d="M14 18V28" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/>
                    <path d="M22 18V28" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/>
                </svg>
            </div>
            <span class="amenity-label">ALMUERZO<br>& CENA</span>
        </div>
        <div class="amenity-item">
            <div class="amenity-icon">
                <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M18 6V30" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/>
                    <path d="M10 14L18 6L26 14" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M12 30L18 24L24 30" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </div>
            <span class="amenity-label">DECORACIÓN</span>
        </div>
        <div class="amenity-item">
            <div class="amenity-icon">
                <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <circle cx="18" cy="16" r="10" stroke="currentColor" stroke-width="1.5"/>
                    <path d="M18 10V16L22 20" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M18 30L18 34" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/>
                    <path d="M10 34H26" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/>
                </svg>
            </div>
            <span class="amenity-label">TOURS</span>
        </div>
        <div class="amenity-item">
            <div class="amenity-icon">
                <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <circle cx="12" cy="14" r="5" stroke="currentColor" stroke-width="1.5"/>
                    <circle cx="24" cy="14" r="5" stroke="currentColor" stroke-width="1.5"/>
                    <path d="M12 19V30" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/>
                    <path d="M24 19V30" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/>
                    <path d="M7 30H17" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/>
                    <path d="M19 30H29" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/>
                </svg>
            </div>
            <span class="amenity-label">REUNIONES<br>& EVENTOS</span>
        </div>
    </div>
</section>

<!-- Section: Testimonials -->
<section class="testimonials-section">
    <div class="testimonials-header">
        <h2 class="testimonials-title">Experiencias reales</h2>
        <p class="testimonials-subtitle">Más de 1200 huéspedes han confiado en Hoteles Ferré.<br>Sus palabras son nuestra mejor presentación.</p>
    </div>
    <div class="testimonials-grid">
        <div class="testimonial-card">
            <div class="testimonial-author">
                <div class="author-avatar">
                    <div class="placeholder-avatar"></div>
                </div>
                <div class="author-info">
                    <strong>María C.</strong>
                    <span class="stars">&#9733; &#9733; &#9733; &#9733; &#9733;</span>
                </div>
            </div>
            <p class="testimonial-text">"Nos recibieron por nombre desde el momento en que entramos. Como llegar a casa de un amigo que tiene muy buen gusto, eso no se olvida."</p>
            <span class="testimonial-meta">HOTEL FERRÉ - CUSCO - MARZO 2024</span>
        </div>
        <div class="testimonial-card">
            <div class="testimonial-author">
                <div class="author-avatar">
                    <div class="placeholder-avatar"></div>
                </div>
                <div class="author-info">
                    <strong>María C.</strong>
                    <span class="stars">&#9733; &#9733; &#9733; &#9733; &#9733;</span>
                </div>
            </div>
            <p class="testimonial-text">"Nos recibieron por nombre desde el momento en que entramos. Como llegar a casa de un amigo que tiene muy buen gusto, eso no se olvida."</p>
            <span class="testimonial-meta">HOTEL FERRÉ - CUSCO - MARZO 2024</span>
        </div>
        <div class="testimonial-card">
            <div class="testimonial-author">
                <div class="author-avatar">
                    <div class="placeholder-avatar"></div>
                </div>
                <div class="author-info">
                    <strong>María C.</strong>
                    <span class="stars">&#9733; &#9733; &#9733; &#9733; &#9733;</span>
                </div>
            </div>
            <p class="testimonial-text">"Nos recibieron por nombre desde el momento en que entramos. Como llegar a casa de un amigo que tiene muy buen gusto, eso no se olvida."</p>
            <span class="testimonial-meta">HOTEL FERRÉ - CUSCO - MARZO 2024</span>
        </div>
    </div>
</section>

<?php
get_footer();
