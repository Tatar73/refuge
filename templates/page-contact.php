<?php

// Template Name: Contact

// Header
get_header();
?>
<section class="contact">
    <img src="<?php echo (get_template_directory_uri()); ?>/assets/img/carto_contact.svg"
        alt="illustration cartographie">
    <h1>
        <?php _e('Contact', 'refuge'); ?>
    </h1>

    <h3>
        <?php _e('Pour plus d’informations, n’hésitez pas à nous contacter', 'refuge'); ?>
    </h3>
    <h2>
        <?php the_field('title') ?>
    </h2>
    <p>
        <?php _e('La connexion internet étant aléatoire, nous ne garantissons pas une réponse rapide', 'refuge'); ?>
    </p>
    <div class="form">
        <div class="left">
            <?php echo do_shortcode('[wpforms id="147" title="false"]'); ?>
        </div>
        <div class="right">
            <img src="<?php echo (get_template_directory_uri()); ?>/assets/img/icon/mail.svg" alt="illustration mail">
        </div>
    </div>
</section>
<?php get_footer() ?>