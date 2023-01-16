<?php
    /*  
        Template name: Vente
    */

    // Header
    get_header();

    // Price
    $price = get_field('price');

    //image
    $image = get_field('image');


    
?>

<h1><?php echo (get_the_title());?></h1>

<h2><?php echo($price . ' €') ?></h2>

<?php if(get_field('address')):?>
    <h2><?php the_field('address'); ?></h2>
<?php else: ?>
    <p>Aucune adresse renseignée</p>
<?php endif;?>

<article>
    <img src="<?php echo ($image['sizes']['medium_large'])?>" alt="<?php echo ($image['alt'])?>" width="<?php echo ($image['sizes']['medium-width'])?>" height="<?php echo ($image['sizes']['medium-height'])?>">
</article>


CONTENU DE LA PAGE VENTE

<?php
    //Footer
    get_footer();
?>
