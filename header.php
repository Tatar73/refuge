<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Refuge des lacs Merlet</title>
    <?php wp_head(); ?>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.3.1/dist/leaflet.css" />
    <link rel="apple-touch-icon" sizes="180×180" href="/apple-touch-icon.png"> 
    <link rel="icon" type=" image/png" sizes="16×16" href="assets/favicon/favicon-16×16. png">
    <link rel="icon" type=" image/png" sizes="32×32" href="assets/favicon/favicon-32×32. png"> 
    <link rel="icon" type=" image/png" sizes="16×16" href="assets/favicon/favicon-16×16. png"> 
    <link rel="manifest" href="assets/favicon/site.webmanifest"> 
    <link rel="mask-icon" href="assets/favicon/safari-pinned-tab.svg" color="#ffffff">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#ffffff">
    <script src="https://unpkg.com/leaflet@1.3.1/dist/leaflet.js"></script>
    <script type="text/javascript" src="<?php echo (get_template_directory_uri()); ?>/assets/js/header-sticky.js"
        async></script>
</head>

<body <?php body_class(); ?>>
    <header class="top">
        <nav class="nav">
            <a href="<?php echo get_home_url(); ?>">
                <img id="logo_refuge" src="<?php echo (get_template_directory_uri()); ?>/assets/img/logo_refuge.svg"
                    alt="">
            </a>
            <div class="langs">
                <ul>
                    <?php

                    if(function_exists('pll_the_languages')) {
                        pll_the_languages(['show_flags' => 0, 'show_names' => 1]);
                    }
                    
                    ?>
                </ul>
            </div>
            <?php wp_nav_menu(array('theme_location' => 'primary_menu', 'menu_class' => 'nav_menu')); ?>
        </nav>
        <nav class="nav-mobile">
            <div class="container nav-container">
                <input class="checkbox" type="checkbox" name="" id="" />
                <div class="hamburger-lines">
                    <span class="line line1"></span>
                    <span class="line line2"></span>
                    <span class="line line3"></span>
                </div>
                <div class="logo">
                    <a href="<?php echo get_home_url(); ?>">
                        <img id="logo_refuge" src="<?php echo (get_template_directory_uri()); ?>/assets/img/logo_refuge.svg"
                            alt="">
                    </a>
                </div>
                <div class="menu-items">
                    <ul>
                        <li><a href="acces" <?php if (is_page()) {
                            echo 'class="active"';
                        } ?>>Accès</a></li>
                        <li><a href="cuisine" <?php if (is_page()) {
                            echo 'class="active"';
                        } ?>>Notre Cuisine</a></li>
                        <li><a href="animation" <?php if (is_page()) {
                            echo 'class="active"';
                        } ?>>Nos animations</a></li>
                        <li><a href="tarifs" <?php if (is_page()) {
                            echo 'class="active"';
                        } ?>>Tarifs/Réservation</a></li>
                        <li><a href="contact" <?php if (is_page()) {
                            echo 'class="active"';
                        } ?>>Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    </header>