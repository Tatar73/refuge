<?php

/*
Template name: Acces
*/

// Header
get_header();

$acces = get_field('access');
$itineraires = get_field('itineraires');
$reglements = get_field('reglements');

// debug($reglements[0]["illustration"]);
// debug($reglements);

?>

<div class="container-acces">
    <section class="acces">
        <div class="titles">
            <h1>
                <?php the_field('title'); ?>
            </h1>
            <span>
                <?php the_field('localisation') ?>
            </span>
        </div>
        <div class="content">
            <div class="images">
                <?php foreach ($acces['images'] as $image): ?>
                    <div class="image">
                        <img src="<?php echo ($image['image']['url']); ?>" height="" width="" alt="">
                        <legend>
                            <?php echo ($image['copyright']); ?>
                        </legend>
                    </div>
                <?php endforeach; ?>
            </div>
            <div class="texte">
                <p>
                    <?php the_field('acces_texte') ?>
                </p>
            </div>
        </div>
    </section>

    <section class="itineraires">

        <h2>
            <?php _e('Itinéraires', 'refuge'); ?>
        </h2>
        <h3>
            <?php _e('DÉPARTS', 'refuge'); ?>
        </h3>
        <p id="carte">
            <?php the_field('carte'); ?>
        </p>
        <?php foreach ($itineraires as $itineraire): ?>
            <div class="itineraire">

                <div class="left">
                    <h4>
                        <?php echo ($itineraire['titre']); ?>
                    </h4>
                    <p>
                        <?php echo ($itineraire['legende']); ?>
                    </p>
                </div>
                <div class="middle">
                    <p id="duree">
                        <?php echo ($itineraire['time']); ?>
                    </p>
                    <p id="distance">
                        <?php echo ($itineraire['distance']); ?>
                    </p>
                    <p id="difficulte">
                        <?php echo ($itineraire['difficulte']); ?>
                    </p>
                </div>
                <div class="right">
                    <p>
                        <?php echo ($itineraire['texte']); ?>
                    </p>
                </div>
            </div>
            <?php
        endforeach;
        ?>
    </section>

    <section class="reglementation">
        <h2>
            <?php _e('Réglementation du Parc national de la Vanoise', 'refuge'); ?>
        </h2>

        <div class="parent">

            <?php foreach ($reglements as $reglement): ?>
                <div class="item">
                    <img src="<?php echo ($reglement['illustration']); ?>" alt="">
                    <p>
                        <?php echo ($reglement['titre']); ?>
                    </p>
                    <legend>
                        <?php echo ($reglement['legende']); ?>
                    </legend>
                </div>
                <?php
            endforeach;
            ?>
        </div>

        <p>
            <?php the_field('reglement_infos'); ?><a href="http://www.vanoise-parcnational.fr/fr" target="_blank">
                <?php _e('Site Internet', 'refuge'); ?>
            </a>
        </p>
    </section>

    <section class="carte">
        <h2>
            <?php _e('Carte', 'refuge'); ?>
        </h2>
        <div id="map">
        </div>
        <a href="<?php echo (get_template_directory_uri()); ?>/assets/img/carte_refuge.pdf" target="_blank">
            <img src="<?php echo (get_template_directory_uri()); ?>/assets/img/icon/telecharger.svg" alt="">
        </a>
        <!-- Leaflet map JavaScript -->
        <script>
            // L'id du container, par exemple <div id="map"></div>
            var mapID = 'map';

            // Plan IGN avec une transparence de 50%
            var PlanIGN = L.tileLayer('https://wxs.ign.fr/{ignApiKey}/geoportail/wmts?' +
                '&REQUEST=GetTile&SERVICE=WMTS&VERSION=1.0.0&TILEMATRIXSET=PM' +
                '&LAYER={ignLayer}&STYLE={style}&FORMAT={format}' +
                '&TILECOL={x}&TILEROW={y}&TILEMATRIX={z}',
                {
                    ignApiKey: 'decouverte',
                    ignLayer: 'GEOGRAPHICALGRIDSYSTEMS.PLANIGNV2',
                    style: 'normal',
                    format: 'image/png',
                    service: 'WMTS',
                    opacity: 0.5
                });

            // Photographies aériennes en-dessous de Plan IGN
            var OrthoIGN = L.tileLayer('https://wxs.ign.fr/{ignApiKey}/geoportail/wmts?' +
                '&REQUEST=GetTile&SERVICE=WMTS&VERSION=1.0.0&TILEMATRIXSET=PM' +
                '&LAYER={ignLayer}&STYLE={style}&FORMAT={format}' +
                '&TILECOL={x}&TILEROW={y}&TILEMATRIX={z}',
                {
                    ignApiKey: 'decouverte',
                    ignLayer: 'ORTHOIMAGERY.ORTHOPHOTOS',
                    style: 'normal',
                    format: 'image/jpeg',
                    service: 'WMTS'
                });
            // Ma carte
            var myMap = L.map(mapID, {
                center: [45.36086, 6.65168],
                zoom: 16,
                layers: [OrthoIGN, PlanIGN]
            })
        </script>
    </section>

    <script type="text/javascript" src="<?php echo (get_template_directory_uri()); ?>/assets/js/carteign.js"
        async></script>
</div>
<?php get_footer() ?>