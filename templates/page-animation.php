<?php
// Template Name: Animation


// Header
get_header();

$slider = get_field('slider');

//debug($slider);

?>

<section class="animation">
    <div class="intro">
        <h1>
            NOS SOIRÉES MÉMORABLES
        </h1>
        <p>
            Tout l'été nous proposons des soirées mémorables culturelles, artistiques et patrimoniales. Ces soirées sont
            gratuites pour les randonneurs et ont lieu chaque semaine, offrant ainsi l'occasion de se divertir et de
            passer
            de
            bon moment de convivialité.
        </p>
        <img src="<?php echo (get_template_directory_uri()); ?>/assets/img/icon/lune.svg" alt="illustration">
    </div>
    <h2>PROGRAMME</h2>
    <div class="animation-slider">
        <div class="main-carousel" data-flickity='{ "cellAlign": "right", "contain": true, "wrapAround": true }'>
            <?php foreach ($slider['images'] as $image): ?>
                <div id="horizontal_img" class="carousel-cell">
                    <p><?php echo ($image['categorie']); ?></p>
                    <img src="<?php echo ($image['image']['url']); ?>" height="" width="" alt="">
                    <p><?php echo ($image['titre']); ?></p>
                    <p><?php echo ($image['text']); ?></p>
                </div>
            <?php endforeach; ?>
        </div>
    </div>



</section>

<?php
//Footer
get_footer();

?>