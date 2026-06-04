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
                <?php bloginfo( 'name' ); ?>
            </a>
        </div>
        
        <nav id="site-navigation" class="main-navigation">
            <ul>
                <li><a href="#hero">Inicio</a></li>
                <li><a href="#features">Características</a></li>
                <li><a href="#showcase">Galería</a></li>
                <li><a href="#footer">Contacto</a></li>
            </ul>
        </nav>

        <button class="nav-cta">Comenzar</button>
    </div>
</header>

<main id="primary" class="site-main">
