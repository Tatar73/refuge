<?php
// Header
get_header();
?>

<section class="erreur">
    <img src="<?php echo (get_template_directory_uri()); ?>/assets/img/404.svg" alt="">
    <h1>Page introuvable</h1>
    <p>Désolé, mais la page que vous recherchez n'a pas été trouvée. Il est possible qu'elle ait été supprimée ou que
        vous ayez saisi une URL incorrecte.</p>
    <a href="<?php echo get_home_url(); ?>">Accueil</a>
</section>

<?php
//Footer
get_footer();
?>