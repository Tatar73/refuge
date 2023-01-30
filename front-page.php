<?php

/*
Template name: Accueil
*/

// Header
get_header();

$slider = get_field('slider');

$modalitesGardiennage = get_field('modalites_gardiennage');
$modalitesHorsGardiennage = get_field('modalites_hors_gardiennage');
//debug($slider);
//var_dump($slider);
?>




<!-- Section content-flexible -->
<div class="container-index">
    <section class="acceuil">
        <?php include 'base64.php'; ?>



        <!-- Animation panorama -->
        <div id="content-index" class="content-index">
            <div class="titles">
                <h1>
                    <?php _e('REFUGE DES LACS MERLET', 'refuge'); ?>
                </h1>
                <h2>
                    <?php _e('Altitude', 'refuge'); ?> : 2417m
                </h2>
            </div>
            <div class="ouverture">
                <p>
                    <?php _e('Gardé de mi-juin à mi-septembre', 'refuge'); ?>
                </p>
                <p>
                    <?php _e('Non gardé hors saisons', 'refuge'); ?>
                </p>
            </div>
        </div>
        <div class="panorama">
            <button id="pano_plus">
                <p>
                    <?php _e('Panorama', 'refuge'); ?>
                </p>
            </button>
            <button id="pano_moins" style="display: none">
                <p>
                    <?php _e('Panorama', 'refuge'); ?>
                </p>
            </button>
        </div>
        <div class="content-pano" id="content-pano" style="display: none;">

        </div>
        <script type=" text/javascript" src="<?php echo (get_template_directory_uri()); ?>/assets/js/panorama.js" async>
                </script>
    </section>
    <div class="background">
        <section class="intro">
            <img src="<?php echo (get_template_directory_uri()); ?>/assets/img/intro_topo_left.svg" alt=""
                id="topo_left">
            <img src="<?php echo (get_template_directory_uri()); ?>/assets/img/intro_topo_right.svg" alt=""
                id="topo_right">
            <div class="intro-slider">
                <div class="main-carousel"
                    data-flickity='{ "cellAlign": "center", "contain": true, "wrapAround": true }'>
                    <?php foreach ($slider['images'] as $image): ?>
                        <div id="horizontal_img" class="carousel-cell">
                            <img src="<?php echo ($image['image']['url']); ?>" height="" width="" alt="">
                            <!-- <p><?php echo ($image['copyright']); ?></p> -->
                        </div>
                    <?php endforeach; ?>
                    <?php foreach ($slider['images'] as $image): ?>
                        <div id="horizontal_img" class="carousel-cell">
                            <img src="<?php echo ($image['image']['url']); ?>" height="" width="" alt="">
                            <!-- <p><?php echo ($image['copyright']); ?></p> -->
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>

            <div class="intro-right">
                <h3>
                    <?php the_field('un_lieu_unique') ?>
                </h3>
                <p>
                    <?php the_field('text_intro') ?>
                </p>
                <button>
                    <a href="acces">
                        <?php _e('Comment venir', 'refuge'); ?>
                    </a>
                </button>
            </div>
        </section>

        <section class="services">
            <img src="<?php echo (get_template_directory_uri()); ?>/assets/img/service_topo_gauche.svg" alt=""
                id="service_topo_gauche">
            <div class="wrap">
                <h3>
                    <?php the_field('services_title') ?>
                </h3>
                <div class="flex">
                    <div class="services-left">
                        <div class="content-left">
                        </div>
                        <div class="content-right">
                            <h4>
                                <?php the_field('gardiennage') ?>
                            </h4>
                            <legend>
                                <?php the_field('periode_gardiennage') ?>
                            </legend>
                            <div class="conditions">

                                <?php foreach ($modalitesGardiennage['modalite'] as $modalite): ?>
                                    <div class="condition">
                                        <img src="<?php echo ($modalite['image']['url']); ?>" height="" width="" alt="">
                                        <p>
                                            <?php echo ($modalite['texte']); ?>
                                        </p>
                                    </div>
                                <?php endforeach; ?>

                            </div>
                        </div>
                    </div>

                    <div class="services-left">
                        <div class="content-left" id="gardiennage">
                        </div>
                        <div class="content-right">
                            <h4>
                                <?php the_field('hors_gardiennage') ?>
                            </h4>
                            <legend>
                                <?php the_field('periode_hors_gardiennage') ?>
                            </legend>
                            <div class="conditions">
                                <?php foreach ($modalitesHorsGardiennage['modalite'] as $modalite): ?>
                                    <div class="condition">
                                        <img src="<?php echo ($modalite['image']['url']); ?>" height="" width="" alt="">
                                        <p>
                                            <?php echo ($modalite['texte']); ?>
                                        </p>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>

                    </div>

                    <div class="rappels">
                        <img src="<?php echo (get_template_directory_uri()); ?>/assets/img/icon/warning.svg"
                            alt="warning">
                        <div class="warnings">
                            <p>
                                <?php _e('Pas de douches', 'refuge'); ?>
                            </p>
                            <p>
                                <?php _e('Pas de recharges électriques', 'refuge'); ?>
                            </p>
                            <p>
                                <?php _e('Pas de vaisselle', 'refuge'); ?>
                            </p>
                            <p>
                                <?php _e('Pas de wifi', 'refuge'); ?>
                            </p>
                            <br>
                            <p>
                                <?php _e('Animaux interdits', 'refuge'); ?>
                            </p>
                            <p>
                                <?php _e('Drone interdits', 'refuge'); ?>
                            </p>
                            <div class="reglementation">
                                <a href="acces">
                                    <?php _e('Voir réglementation', 'refuge'); ?>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="cuisine">
            <h3>
                <?php _e('Notre Cuisine', 'refuge'); ?>
            </h3>
            <div class="texte">
                <p>
                    <?php the_field('cuisine_text') ?>
                </p>

                <a href="cuisine">
                    <?php _e('En savoir plus', 'refuge'); ?>
                </a>
            </div>

        </section>

        <section class="animations">
            <div class="wrap">

                <div class="animations-left">
                    <h3>
                        <?php _e('Nos animations', 'refuge'); ?>
                    </h3>
                    <p>
                        <?php the_field('texte') ?>
                    </p>
                    <div class="button">
                        <a href="animation">
                            <?php _e('En savoir plus', 'refuge'); ?>
                        </a>
                    </div>
                </div>
                <div class="animations-right">
                    <img src="<?php echo (get_template_directory_uri()); ?>/assets/img/animation.svg"
                        alt="animation illustration">
                </div>
            </div>
        </section>
    </div>
</div>

<script type="text/javascript" src="<?php echo (get_template_directory_uri()); ?>/assets/js/libs/flickity.js"
    async></script>

<?php
// Footer
get_footer();
?>