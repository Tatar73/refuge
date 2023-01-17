<?php

/*
Template name: Cuisine
*/

// Header
get_header();

$image = get_field("image");
$repas = get_field('programme_repas');
// debug($repas);
?>

<section class="cuisine">
    <div class="container">
        <div class="left">
            <h1>
                <?php the_field('titre_page') ?>
            </h1>
            <p><?php the_field('presentation') ?></p>
            <img src="<?php echo ($image['url']); ?>" alt="<?php echo ($image['alt']); ?>">
        </div>
        <div class="right">
            <?php foreach ($repas as $programme): ?>
                <h3><?php echo ($programme['titre_repas']); ?></h3>
                <p>
                    <?php echo ($programme['description_repas']); ?>
                </p>
            <?php endforeach; ?>
        </div>
    </div>
    <p>
        <?php the_field('details') ?>
    </p>
    <div class="container">
        <div class="ligne"></div>
    </div>
</section>

<section class="menu">
    <h2>Menu</h2>
    <button>
        Télécharger notre menu
    </button>
    <div class="left">

    </div>
    <div class="right">
        
    </div>
    <h3>Boissons</h3>
</section>


<?php get_footer() ?>