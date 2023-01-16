<?php
// Header
get_header();

$acces = get_field('access');
?>

<div class="container-acces">
    <section class="acces">
        <h1>
            <?php the_field('title'); ?>
        </h1>
        <legend><?php the_field('localisation') ?></legend>
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
        <h2>Itinéraires</h2>
        <h3>DÉPARTS</h3>
        <div class="itineraire">
            <div class="left">
                <h4>Courchevel</h4>
                <p>Par la vallée des Avals</p>
            </div>
            <div class="middle">
                <p id="duree">Durée : 3h15</p>
                <p id="distance">Distance : 10km</p>
                <p id="difficulte">Difficulté : moyenne</p>
                <p id="carte">Carte : 3534 OT</p>
            </div>
            <div class="right">
                <p>Se garer au parking du Belvédère à Courchevel Moriond.</p>
                <br>
                <p>Suivre le sentier des Avals sur une piste en gravier.
                    Arrivé au refuge du Grand Plan, continuer sur le sentier partant sur la gauche.</p>
                <br>
                <p>Face au lac merlet, le refuge se situe en retrait sur la gauche.</p>
            </div>
        </div>

        <div class="itineraire">
            <div class="left" id="background-normal">
                <h4>Méribel - Mottaret</h4>
            </div>
            <div class="middle">
                <p id="duree">Durée : 3h15</p>
                <p id="distance">Distance : 10km</p>
                <p id="difficulte">Difficulté : moyenne</p>
                <p id="carte">Carte : 3534 OT</p>
            </div>
            <div class="right">
                <p>Se garer au parking du Belvédère à Courchevel Moriond.</p>
                <br>
                <p>Suivre le sentier des Avals sur une piste en gravier.
                    Arrivé au refuge du Grand Plan, continuer sur le sentier partant sur la gauche.</p>
                <br>
                <p>Face au lac merlet, le refuge se situe en retrait sur la gauche.</p>
            </div>
        </div>
        <div class="itineraire">
            <div class="left" id="background-dark">
                <h4>Pralognan-la-Vanoise</h4>
            </div>
            <div class="middle">
                <p id="duree">Durée : 3h15</p>
                <p id="distance">Distance : 10km</p>
                <p id="difficulte">Difficulté : moyenne</p>
                <p id="carte">Carte : 3534 OT</p>
            </div>
            <div class="right">
                <p>Se garer au parking du Belvédère à Courchevel Moriond.</p>
                <br>
                <p>Suivre le sentier des Avals sur une piste en gravier.
                    Arrivé au refuge du Grand Plan, continuer sur le sentier partant sur la gauche.</p>
                <br>
                <p>Face au lac merlet, le refuge se situe en retrait sur la gauche.</p>
            </div>
        </div>
    </section>

    <section class="reglementation">
        <h2>Réglementation du parc national de la Vanoise</h2>
        <div class="parent">
            <div class="item">
                <img src="<?php echo (get_template_directory_uri()); ?>/assets/img/icon/chien.svg" alt="">
                <p>Interdit aux chiens</p>
                <legend>Même en laisse</legend>
            </div>
        </div>
        <p>Pour que le partage de l’espace soit le plus harmonieux possible, chacun doit adopter un comportement
            respectueux des hommes et de la nature.</p>
        <br>
        <p>Pour toutes questions, veuillez vous renseigner auprès du parc national de la Vanoise au
            04 79 62 30 54</p>
        <br>
        <p>ou sur leur <a href="">Site Web</a></p>
    </section>

    <section class="carte">
        <h2>Carte</h2>
        <div id="map">
        </div>
        <img src="<?php echo (get_template_directory_uri()); ?>/assets/img/icon/telecharger.svg" alt="">
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