<?php
// Header
get_header();
?>



<!-- Section content-flexible -->
<div class="container-index">


    <section class="acceuil">
        <!-- Animation panorama -->
        <div id="content-index">
            <h1>REFUGE DES LACS MERLET</h1>
            <h2>Parc National de la Vanoise</h2>
            <div class="ouverture">
                <p id="periode">Gardé de mi-juin à mi-septembre</p>
                <p id="acces">Non gardé hors saisons</p>
            </div>
        </div>
        <div class="panorama">
            <button id="pano_plus">
                <img src="http://127.0.0.1/refuge/wordpress/wp-content/themes/refuge/assets/img/panorama_button.svg"
                    alt="bouton panorama">
            </button>
            <button id="pano_moins">
                <img src="http://127.0.0.1/refuge/wordpress/wp-content/themes/refuge/assets/img/panorama_button_moins.svg"
                    alt="bouton panorama">
            </button>
            <p>Panorama</p>
        </div>
        <div class="content-pano">
            <div class="localisation">
                <div class="afficher" id="afficher" style="display: none;">
                    <p>Roche Nue</p>
                    <p>2979m</p>
                    <div class="pointilles"></div>
                </div>
                <img src="http://127.0.0.1/refuge/wordpress/wp-content/themes/refuge/assets/img/panorama_localisation.svg"
                    alt="localisation panorama" style="display: none;" id="localisation">
            </div>
        </div>
        <script type=" text/javascript"
            src="http://127.0.0.1/refuge/wordpress/wp-content/themes/refuge/assets/js/panorama.js" async>
                </script>
    </section>

    <div class="background">
        <section class="intro">
            <div class="intro-slider">
                <div class="main-carousel"
                    data-flickity='{ "cellAlign": "right", "contain": true, "wrapAround": true }'>
                    <div id="horizontal_img" class="carousel-cell">
                        <img src="http://127.0.0.1/refuge/wordpress/wp-content/themes/refuge/assets/img/intro_image_refuge1.jpg"
                            alt="concept">
                    </div>
                    <div class="carousel-cell">
                        <img src="http://127.0.0.1/refuge/wordpress/wp-content/themes/refuge/assets/img/intro_image_refuge2.jpg"
                            alt="concept">
                    </div>
                    <div class="carousel-cell">
                        <img src="http://127.0.0.1/refuge/wordpress/wp-content/themes/refuge/assets/img/intro_image_refuge3.jpg"
                            alt="concept">
                    </div>
                </div>
            </div>

            <div class="intro-right">
                <h3>
                    <?php the_field('un_lieu_unique') ?>
                </h3>
                <p><?php the_field('intro_texte_1') ?>
                </p>
                <br>
                <p>
                    <?php the_field('intro_texte_2') ?>
                </p>
                <br>
                <p><?php the_field('intro_texte_3') ?></p>
                <p>
                    <?php the_field('intro_texte_4') ?>
                </p>
            </div>
        </section>

        <section class="services">

            <div class="wrap">
                <h3>
                    <?php the_field('services_title') ?>
                </h3>
                <div class="flex">
                    <div class="services-left">
                        <div class="content-left">
                        </div>
                        <div class="content-right">
                            <h4>Gardiennage</h4>
                            <legend>Juin - Septembre</legend>
                            <div class="conditions">
                                <div class="condition">
                                    <img src="<?php echo (get_template_directory_uri()); ?>/assets/img/icon/lit.svg"
                                        alt="lit">
                                    <p>14 couchages</p>
                                </div>
                                <div class="condition">
                                    <img src="<?php echo (get_template_directory_uri()); ?>/assets/img/icon/couette.svg"
                                        alt="couette">
                                    <p>Couettes</p>
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
                                    <img src="<?php echo (get_template_directory_uri()); ?>/assets/img/icon/wc.svg"
                                        alt="wc">
                                    <p>WC secs</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="services-left">
                        <div class="content-left" id="gardiennage">
                        </div>
                        <div class="content-right">
                            <h4>Hors <br>Gardiennage</h4>
                            <legend>Octobre - Mai</legend>
                            <div class="conditions">
                                <div class="condition">
                                    <img src="<?php echo (get_template_directory_uri()); ?>/assets/img/icon/lit.svg"
                                        alt="lit">
                                    <p>14 couchages</p>
                                </div>
                                <div class="condition">
                                    <img src="<?php echo (get_template_directory_uri()); ?>/assets/img/icon/couverture.svg"
                                        alt="Couverture">
                                    <p>Couverture</p>
                                </div>
                                <div class="condition">
                                    <img src="<?php echo (get_template_directory_uri()); ?>/assets/img/icon/tente.svg"
                                        alt="tente">
                                    <p>Bivouac</p>
                                </div>
                                <div class="condition">
                                    <img src="<?php echo (get_template_directory_uri()); ?>/assets/img/icon/gaziniere.svg"
                                        alt="gazinière">
                                    <p>Gazinière</p>
                                </div>
                                <div class="condition">
                                    <img src="<?php echo (get_template_directory_uri()); ?>/assets/img/icon/chauffage.svg"
                                        alt="chauffage">
                                    <p>Chauffage poêle</p>
                                </div>
                                <div class="condition">
                                    <img src="<?php echo (get_template_directory_uri()); ?>/assets/img/icon/wc.svg"
                                        alt="wc">
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
                <p>Du côté cuisine, notre objectif est de mettre en avant la cuisine locale et durable en proposant des
                    plats
                    faits maison à base de produits locaux et bio.</p>
                <br>
                <p>Cette démarche est en adéquation avec les objectifs de développement durable de la commune de
                    Courchevel
                    pour promouvoir l'agriculture locale respectueuse de l'environnement.</p>

                <a href="#">En savoir plus</a>
            </div>

        </section>

        <section class="animations">
            <div class="wrap">

                <div class="animations-left">
                    <h3>Nos animations</h3>
                    <p>Nous proposons une programmation estivale de «soirées mémorables» culturelles, artistiques, et
                        patrimoniales, participant au dynamisme de la commune de Courchevel</p>
                    <br>
                    <p>Une fois par semaine, une soirée à thème est proposée au refuge des Lacs Merlet.
                    </p>
                    <p>Il s'agit d'une animation gratuite, pour les randonneurs qui le souhaitent, sur des thématiques
                        culturelles,
                        artistiques, et patrimoniales.
                    </p>
                    <div class="button">
                        <a href="#">En savoir plus</a>
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