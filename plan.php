<?php
//Header
get_header();

/*
Template name: Plan
*/
?>

<section class="plan">
    <h1>
        <?php _e('PLAN DU SITE', 'refuge'); ?>
    </h1>
    <div class="parent">
        <div class="item1">
            <h3>
                <?php _e('Accueil', 'refuge'); ?>
            </h3>
            <p><?php _e('Panorama', 'refuge'); ?></p>
            <p>
                <?php _e('À Propos', 'refuge'); ?>
            </p>
            <p><?php _e('Services', 'refuge'); ?></p>
            <p>
                <?php _e('Cuisine', 'refuge'); ?>
            </p>
            <p><?php _e('Animations', 'refuge'); ?></p>
        </div>
        <div class="item2">
            <h3>
                <?php _e('Accès', 'refuge'); ?>
            </h3>
            <p><?php _e('Cadre', 'refuge'); ?></p>
            <p>
                <?php _e('Itinéraire', 'refuge'); ?>
            </p>
            <p><?php _e('Réglementation', 'refuge'); ?></p>
            <p>
                <?php _e('Carte', 'refuge'); ?>
            </p>
        </div>
        <div class="item3">
            <h3>
                <?php _e('Cuisine', 'refuge'); ?>
            </h3>
            <p><?php _e('Objectif', 'refuge'); ?></p>
            <p>
                <?php _e('Programme', 'refuge'); ?>
            </p>
            <p><?php _e('Menu', 'refuge'); ?></p>
        </div>
        <div class="item4">
            <h3>
                <?php _e('Animations', 'refuge'); ?>
            </h3>
            <p><?php _e('Présentation', 'refuge'); ?></p>
            <p>
                <?php _e('Programme', 'refuge'); ?>
            </p>
        </div>
        <div class="item5">
            <h3>
                <?php _e('Tarifs/<br>Réservations', 'refuge'); ?>
            </h3>
            <p><?php _e('Tarifs', 'refuge'); ?></p>
            <p>
                <?php _e('Informations', 'refuge'); ?>
            </p>
            <p>
                <?php _e('Nuitées', 'refuge'); ?>
            </p>
        </div>
        <div class="item6">
            <h3>
                <?php _e('Contact', 'refuge'); ?>
            </h3>
            <p><?php _e('Formulaire', 'refuge'); ?></p>
        </div>
    </div>
</section>

<?php
get_footer();
?>