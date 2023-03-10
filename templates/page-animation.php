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
            <?php the_field('title1'); ?>
        </h1>
        <p>
            <?php the_field('presentation'); ?>
        </p>
        <img src="<?php echo (get_template_directory_uri()); ?>/assets/img/icon/lune.svg" alt="illustration">
    </div>
    <h2>
        <?php the_field('titre2'); ?>
    </h2>
</section>
<section class="programme">
    <div class="ligne"></div>
    <div class="animation-slider">
        <div class="main-carousel" data-flickity='{ "cellAlign": "center", "contain": true, "wrapAround": true }'>
            <?php foreach ($slider['images'] as $image): ?>
                <div class="carousel-cell">
                    <p class="date">
                        <?php echo ($image['date']); ?>
                    </p>
                    <img class="selecteur" src="<?php echo (get_template_directory_uri()); ?>/assets/img/icon/selecteur.svg"
                        alt="selecteur">
                    <p class="categorie">
                        <?php echo ($image['categorie']); ?>
                    </p>
                    <img class="illustration" src="<?php echo ($image['image']['url']); ?>" height="" width="" alt="">
                    <p class="titre">
                        <?php echo ($image['title']); ?>
                    </p>
                    <p class="text">
                        <?php echo ($image['text']); ?>
                    </p>
                </div>
            <?php endforeach; ?>
            <?php foreach ($slider['images'] as $image): ?>
                <div class="carousel-cell">
                    <p class="date">
                        <?php echo ($image['date']); ?>
                    </p>
                    <img class="selecteur" src="<?php echo (get_template_directory_uri()); ?>/assets/img/icon/selecteur.svg"
                        alt="selecteur">
                    <p class="categorie">
                        <?php echo ($image['categorie']); ?>
                    </p>
                    <img class="illustration" src="<?php echo ($image['image']['url']); ?>" height="" width="" alt="">
                    <p class="titre">
                        <?php echo ($image['title']); ?>
                    </p>
                    <p class="text">
                        <?php echo ($image['text']); ?>
                    </p>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>



<script type="text/javascript" src="<?php echo (get_template_directory_uri()); ?>/assets/js/libs/flickity.js"
    async></script>
<?php
//Footer
get_footer();

?>