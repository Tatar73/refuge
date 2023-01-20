<?php

/*
Template name: Cuisine
*/

// Header
get_header();

$image = get_field("image");
$repas = get_field('programme_repas');
// debug($repas);
$file = get_field('menu');

?>

<section class="cuisine">
    <img src="<?php echo (get_template_directory_uri()); ?>/assets/img/illustration_cuisine.svg"
        alt="illustration cuisine">
    <h1>
        <?php the_field('titre_page'); ?>
    </h1>
    <p><?php the_field('presentation'); ?></p>
    <div class="ligne"></div>
</section>

<section class="menu">
    <?php if ($file): ?>
        <a href="<?php echo $file['url']; ?>" target="_blank">
            <?php _e('Télécharger le menu', 'refuge'); ?>
        </a>
    <?php endif; ?>
    <div class="container">

        <div class="parent">
            <?php foreach ($repas as $programme): ?>
                <div class="content">
                    <h3><?php echo ($programme['titre_repas']); ?></h3>
                    <p>
                        <?php echo ($programme['description_repas']); ?>
                    </p>
                </div>
            <?php endforeach; ?>
        </div>

    </div>
    <p>
        <?php the_field('details') ?>
    </p>
</section>


<?php get_footer() ?>