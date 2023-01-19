<?php
//Header
get_header();

/*
Template name: Mentions
*/
?>

<section class="mentions">
    <div class="container">
        <h1>MENTIONS LÉGALES</h1>
        <h3>
            <?php the_field('titre_editeur') ?>
        </h3>
        <p><?php the_field('texte_editeur') ?></p>

        <h3 style="padding: 32px 0;">
            <?php the_field('titre_hebergement') ?>
        </h3>
        <a href="https://www.ovh.com">
            <?php the_field('texte_hebergement') ?>
        </a>

        <h3>
            Conception et Réalisation du site
        </h3>
        <div class="credits">
            <p class="Nom">Killian El Attar - Développeur</p>
            <p class="Mail">elattar.killian@gmail.com</p>
            <p class="Nom">Léo De Santis - Designer</p>
            <p class="Mail">leo.desantispro@gmail.com</p>
            <p class="Nom">Robin Gerbelot - Rédacteur de contenu</p>
            <p class="Mail">robgerbelot@gmail.com</p>
            <p class="Nom">Maxim Reynaud - Chef de projet</p>
            <p class="Mail">max.renod@gmail.com</p>
            <div class="logos">
                <img src="<?php echo (get_template_directory_uri()); ?>/assets/img/icon/logo_mmi.svg" alt="logo mmi">
                <img src="<?php echo (get_template_directory_uri()); ?>/assets/img/icon/logo_iut.svg" alt="logo iut">
            </div>

        </div>

        <h3>Icônes</h3>
        <div class="icones">
            <p>IconScout</p>
            <p>iconscout.com</p>
            <p>Noun Project</p>
            <p>thenounprojet.com</p>
        </div>

        <h3>
            <?php the_field('titre_images') ?>
        </h3>
        <p>
            <?php the_field('copyrights') ?>
        </p>


        <h3>
            <?php the_field('titre_lien_externe') ?>
        </h3>
        <p>
            <?php the_field('texte_lien_externes') ?>
        </p>

        <h3>
            <?php the_field('titre_liens_site') ?>
        </h3>
        <p>
            <?php the_field('texte_liens_site') ?>
        </p>
    </div>

</section>

<?php
get_footer();
?>