<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
    <header class="top">
        <nav class="nav">

            <img id="logo_refuge" src="<?php echo (get_template_directory_uri()); ?>/assets/img/logo_refuge.svg" alt="">

            <ul>
                <li><a href="page.php">Accès</a></li>
                <li><a href="">Notre Cuisine</a></li>
                <li><a href="">Nos animations</a></li>

                <li><a href="">Tarif</a></li>
                <li><a href="">Réservation</a></li>
            </ul>
        </nav>
    </header>

    <script type="text/javascript" src="<?php echo (get_template_directory_uri()); ?>/assets/js/header-sticky.js"
        async></script>
    </header>