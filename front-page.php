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
        <div id="content-index">
            <h1>REFUGE DES LACS MERLET</h1>
            <h2>Altitude : 2417m</h2>
            <div class="ouverture">
                <p id="periode">Gardé de mi-juin à mi-septembre</p>
                <p id="acces">Non gardé hors saisons</p>
            </div>
        </div>
        <div class="panorama">
            <button id="pano_plus">
                <img src="<?php echo (get_template_directory_uri()); ?>/assets/img/panorama_button.svg"
                    alt="bouton panorama">
            </button>
            <button id="pano_moins" style="display: none">
                <img src="<?php echo (get_template_directory_uri()); ?>/assets/img/panorama_button_moins.svg"
                    alt="bouton panorama">
            </button>
            <p>Panorama</p>
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
                    <?php the_field('text') ?>
                </p>
                <button>
                    <a href="acces">Comment venir</a>
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
                                    <p>14 couchages</p>
                                </div>
                                <div class="condition">
                                    <img src="<?php echo (get_template_directory_uri()); ?>/assets/img/icon/couette.svg"
                                        alt="couette">
                                    <div class="legends">
                                        <p>Couettes</p>
                                        <legend>Prenez votre drap-sac</legend>
                                    </div>
                                </div>
                                <div class="condition">
                                    <img src="<?php echo (get_template_directory_uri()); ?>/assets/img/icon/tente.svg"
                                        alt="tente">
                                    <p>Bivouac</p>
                                </div>
                                <div class="condition">
                                    <img src="<?php echo (get_template_directory_uri()); ?>/assets/img/icon/restauration.svg"
                                        alt="restauration">
                                    <p>Restauration</p>
                                </div>
                                <div class="condition">
                                    <img src="<?php echo (get_template_directory_uri()); ?>/assets/img/icon/chauffage.svg"
                                        alt="chauffage">
                                    <p>Chauffage poêle</p>
                                </div>
                                <div class="condition">
                                    <img src="<?php echo (get_template_directory_uri()); ?>/assets/img/icon/WC.svg"
                                        alt="wc" style="margin-left: 4px;">
                                    <p>WC secs</p>
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
                                    <p>14 couchages</p>
                                </div>
                                <div class="condition">
                                    <img src="<?php echo (get_template_directory_uri()); ?>/assets/img/icon/couverture.svg"
                                        alt="Couverture">
                                    <div class="legends">
                                        <p>Couvertures</p>
                                        <legend>Prenez votre sac de couchage</legend>
                                    </div>
                                </div>
                                <div class="condition">
                                    <img src="<?php echo (get_template_directory_uri()); ?>/assets/img/icon/tente.svg"
                                        alt="tente">
                                    <p>Bivouac</p>
                                </div>
                                <div class="condition">
                                    <img src="<?php echo (get_template_directory_uri()); ?>/assets/img/icon/gaziniere.svg"
                                        alt="gazinière">
                                    <div class="legends">
                                        <p>Gazinière</p>
                                        <legend>Accessible</legend>
                                    </div>
                                </div>
                                <div class="condition">
                                    <img src="<?php echo (get_template_directory_uri()); ?>/assets/img/icon/chauffage.svg"
                                        alt="chauffage">
                                    <p>Chauffage poêle</p>
                                </div>
                                <div class="condition">
                                    <img src="<?php echo (get_template_directory_uri()); ?>/assets/img/icon/WC.svg"
                                        alt="wc" style="margin-left: 4px;">
                                    <p>WC secs</p>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="rappels">
                        <img src="<?php echo (get_template_directory_uri()); ?>/assets/img/icon/warning.svg"
                            alt="warning">
                        <div class="warnings">
                            <p>Pas de douches</p>
                            <p>Pas de recharges électriques</p>
                            <p>Pas de vaisselle</p>
                            <p>Pas de wifi</p>
                            <br>
                            <p>Animaux interdits</p>
                            <p>Drone interdits</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="cuisine">
            <h3>Notre Cuisine</h3>
            <div class="texte">
                <p>Nous proposons des plats 100% faits maison, à base de produits locaux et en très grande majorité
                    biologiques.</p>
                <br>
                <p>Pour partager un déjeuner ou pour la gourmandise d’une part de tarte, venez découvrir notre cuisine
                    simple, bonne et saine !</p>

                <a href="cuisine">En savoir plus</a>
            </div>

        </section>

        <section class="animations">
            <div class="wrap">

                <div class="animations-left">
                    <h3>Nos animations</h3>
                    <p>Une fois par semaine, nous proposons une « soirée mémorable » au refuge : spectacles, concerts,
                        conférences-débat, … (insérer le lien vers programmation ?).</p>
                    <br>
                    <p>Venez échanger, vous émerveiller, apprendre dans un cadre intimiste et exceptionnel !
                    </p>
                    <div class="button">
                        <a href="animation">En savoir plus</a>
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