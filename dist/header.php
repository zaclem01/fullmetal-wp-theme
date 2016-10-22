<!DOCTYPE html>

<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php wp_title(); ?></title>
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <div class="topbar">
        <button class="topbar_menuBtn js-menuBtn"><i class="fa fa-bars"></i></button>
        <a class="topbar_brand">Fullmetal Photography</a>
    </div>

    <nav class="sidemenu sidemenuWrapper">
        <header class="sidemenu_header">Menu</header>
        <?php 
        $walker = new Custom_Nav_Walker;

        wp_nav_menu( array( 
            'theme_location' => 'primary_fm_menu', 
            'container' => false,
            'menu_class' => 'sidemenu_nav',
            'walker' => $walker
        ) ); ?>
    </nav>

    <div class="contentWrapper">