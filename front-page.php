<?php

/*
Template name: Accueil
*/

// Header
get_header();

$slider = get_field('slider');
//var_dump($slider);
?>




<!-- Section content-flexible -->
<div class="container-index">
    <section class="acceuil">
        <?php include 'base64.php'; ?>



        <!-- Animation panorama -->
        <div id="content-index" class="content-index">
            <div class="titles">
                <h1>REFUGE DES LACS MERLET</h1>
                <h2>
                    <?php _e('Altitude', 'refuge'); ?> : 2417m
                </h2>
            </div>
            <div class="ouverture">
                <p id="periode"><?php _e('Gardé de mi-juin à mi-septembre', 'refuge'); ?></p>
                <p id="acces">
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
                <p><?php _e('Panorama', 'refuge'); ?></p>
            </button>

        </div>
        <div class="content-pano" id="content-pano" style="display: none;">

        </div>
        <script type=" text/javascript" src="<?php echo (get_template_directory_uri()); ?>/assets/js/panorama.js" async>
                </script>
    </section>
    <div class="background">
        <!-- <img src="<?php echo (get_template_directory_uri()); ?>/assets/img/fond.svg" alt="background"> -->
        <section class="intro">
            <img src="<?php echo (get_template_directory_uri()); ?>/assets/img/intro_topo_left.svg" alt=""
                id="topo_left">
            <img src="<?php echo (get_template_directory_uri()); ?>/assets/img/intro_topo_right.svg" alt=""
                id="topo_right">
            <div class="intro-slider">
                <div class="main-carousel"
                    data-flickity='{ "cellAlign": "right", "contain": true, "wrapAround": true }'>
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
                                <div class="condition">
                                    <img src="<?php echo (get_template_directory_uri()); ?>/assets/img/icon/lit.svg"
                                        alt="lit">
                                    <p>
                                        <?php _e('14 couchages', 'refuge'); ?>
                                    </p>
                                </div>
                                <div class="condition">
                                    <img src="<?php echo (get_template_directory_uri()); ?>/assets/img/icon/couette.svg"
                                        alt="couette">
                                    <div class="legends">
                                        <p>
                                            <?php _e('Couettes', 'refuge'); ?>
                                        </p>
                                        <legend>Prenez votre drap-sac</legend>
                                    </div>
                                </div>
                                <div class="condition">
                                    <img src="<?php echo (get_template_directory_uri()); ?>/assets/img/icon/tente.svg"
                                        alt="tente">
                                    <p>
                                        <?php _e('Bivouac', 'refuge'); ?>
                                    </p>
                                </div>
                                <div class="condition">
                                    <img src="<?php echo (get_template_directory_uri()); ?>/assets/img/icon/restauration.svg"
                                        alt="restauration">
                                    <p>
                                        <?php _e('Restauration', 'refuge'); ?>
                                    </p>
                                </div>
                                <div class="condition">
                                    <img src="<?php echo (get_template_directory_uri()); ?>/assets/img/icon/chauffage.svg"
                                        alt="chauffage">
                                    <p>
                                        <?php _e('Chauffage poêle', 'refuge'); ?>
                                    </p>
                                </div>
                                <div class="condition">
                                    <img src="<?php echo (get_template_directory_uri()); ?>/assets/img/icon/WC.svg"
                                        alt="wc" style="margin-left: 4px;">
                                    <p>
                                        <?php _e('WC secs', 'refuge'); ?>
                                    </p>
                                </div>
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
                            <legend><?php the_field('periode_hors_gardiennage') ?></legend>
                            <div class="conditions">
                                <div class="condition">
                                    <img src="<?php echo (get_template_directory_uri()); ?>/assets/img/icon/lit.svg"
                                        alt="lit">
                                    <p>
                                        <?php _e('14 couchages', 'refuge'); ?>
                                    </p>
                                </div>
                                <div class="condition">
                                    <img src="<?php echo (get_template_directory_uri()); ?>/assets/img/icon/couverture.svg"
                                        alt="Couverture">
                                    <div class="legends">
                                        <p>
                                            <?php _e('Couvertures', 'refuge'); ?>
                                        </p>
                                        <legend><?php _e('Prenez votre sac de couchage', 'refuge'); ?></legend>
                                    </div>
                                </div>
                                <div class="condition">
                                    <img src="<?php echo (get_template_directory_uri()); ?>/assets/img/icon/tente.svg"
                                        alt="tente">
                                    <p>
                                        <?php _e('Bivouac', 'refuge'); ?>
                                    </p>
                                </div>
                                <div class="condition">
                                    <img src="<?php echo (get_template_directory_uri()); ?>/assets/img/icon/gaziniere.svg"
                                        alt="gazinière">
                                    <div class="legends">
                                        <p>
                                            <?php _e('Gazinière', 'refuge'); ?>
                                        </p>
                                        <legend><?php _e('Accessible', 'refuge'); ?></legend>
                                    </div>
                                </div>
                                <div class="condition">
                                    <img src="<?php echo (get_template_directory_uri()); ?>/assets/img/icon/chauffage.svg"
                                        alt="chauffage">
                                    <p>
                                        <?php _e('Chauffage poêle', 'refuge'); ?>
                                    </p>
                                </div>
                                <div class="condition">
                                    <img src="<?php echo (get_template_directory_uri()); ?>/assets/img/icon/WC.svg"
                                        alt="wc" style="margin-left: 4px;">
                                    <p>
                                        <?php _e('WC secs', 'refuge'); ?>
                                    </p>
                                </div>
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
                            <p><?php _e('Pas de recharges électriques', 'refuge'); ?></p>
                            <p>
                                <?php _e('Pas de vaisselle', 'refuge'); ?>
                            </p>
                            <p><?php _e('Pas de wifi', 'refuge'); ?></p>
                            <br>
                            <p>
                                <?php _e('Animaux interdits', 'refuge'); ?>
                            </p>
                            <p><?php _e('Drone interdits', 'refuge'); ?></p>
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
//Footer
get_footer();

?>