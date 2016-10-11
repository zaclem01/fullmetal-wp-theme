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
    <div class="topBar">
        <button class="topBar_menuBtn js-menuBtn"><i class="fa fa-bars"></i></button>
        <a class="topBar_brand">Fullmetal Photography</a>
    </div>

    <nav class="sidebar sidebarWrapper">
        <header class="sidebar_header">Menu</header>
        <!-- <ul class="sidebar_nav">
            <li class="sidebar_nav_item"><a href="home.html">Home</a></li>
            <li class="sidebar_nav_item js-subMenu"><a href="#">Services <i class="fa fa-caret-down"></i></a>
                <div class="nav_item_subMenu js-hidden">
                    <ul class="subMenu_nav">
                        <li class="subMenu_nav_item"><a href="wedding.html">Weddings</a></li>
                        <li class="subMenu_nav_item"><a href="baby-shower.html">Baby Showers</a></li>
                        <li class="subMenu_nav_item"><a href="graduation.html">Graduation</a></li>
                        <li class="subMenu_nav_item js-ageGate"><a href="boudoir.html">Boudoir <small>(18+ only)</small></a></li>
                    </ul>
                </div>
            </li>
            <li class="sidebar_nav_item"><a href="http://louisvillefullmetalphotography.pixieset.com/" target="_blank">Customer Access</a></li>
            <li class="sidebar_nav_item"><a href="guides.html">FAQ & Prep Guides</a></li>
            <li class="sidebar_nav_item"><a href="#">About</a></li>
        </ul> -->
        <?php 
        $walker = new Custom_Nav_Walker;

        wp_nav_menu( array( 
            'theme_location' => 'primary_fm_menu', 
            'container' => false,
            'menu_class' => 'sidebar_nav',
            'walker' => $walker
        ) ); ?>
    </nav>

    <div class="contentWrapper">