<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Refuge des lacs Merlet</title>
    <?php wp_head(); ?>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.3.1/dist/leaflet.css" />
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
                <?php
                pll_the_languages(['show_flags' => 1, 'show_names' => 0]);
                ?>
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