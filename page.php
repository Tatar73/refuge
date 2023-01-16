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
</div>
<?php get_footer() ?>