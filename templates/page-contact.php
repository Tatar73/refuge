<?php

// Template Name: Contact

// Header
get_header();
?>
<section class="contact">
    <h1>Contact</h1>
    <h3>Pour plus d’informations, n’hésitez pas à nous contacter</h3>
    <h2>
        <?php the_field('title') ?>
    </h2>
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