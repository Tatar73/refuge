<?php
//Header
get_header();

/*
Template name: Mentions
*/
?>

<section class="mentions">
    <h1>
        <?php _e('MENTIONS LÉGALES', 'refuge'); ?>
    </h1>
    <p>
        <?php the_content(); ?>
    </p>
</section>

<?php
get_footer();
?>