<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header id="masthead" class="site-header">
    <div class="header-container">
        <div class="logo">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
                <span class="logo-icon">
                    <svg width="28" height="28" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 2L2 7L12 12L22 7L12 2Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M2 17L12 22L22 17" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M2 12L12 17L22 12" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </span>
                <span class="logo-text">HOTELES FERRÉ</span>
            </a>
        </div>

        <nav id="site-navigation" class="main-navigation">
            <ul>
                <li><a href="#sedes">SEDES</a></li>
                <li><a href="#servicios">SERVICIOS</a></li>
                <li><a href="#contacto">CONTACTO</a></li>
            </ul>
        </nav>

        <a href="#reservar" class="nav-cta">RESERVAR</a>
    </div>
</header>

<main id="primary" class="site-main">
