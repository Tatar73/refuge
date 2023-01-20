<?php
// Header
get_header();

/*
Template name: Tarifs
*/

?>

<section class="tarifs">
    <div class="titre">
        <h1>
            <?php _e('TARIFS', 'refuge'); ?>
        </h1>
        <p>
            <?php the_field('mode_de_paiments') ?>
        </p>
    </div>
    <div class="forfaits">
        <p>
            <?php the_field('titre_tarifs') ?>
        </p>
        <div class="parent">
            <div class="tarif">
                <div class="infos">
                    <img src="<?php echo (get_template_directory_uri()); ?>/assets/img/icon/interrogation.svg"
                        alt="icon aide">
                    <div class="taxes">
                        <p>
                            <?php the_field('tarifs_infos') ?>
                        </p>
                    </div>
                </div>
                <div class="prix">
                    <p>10€</p>
                </div>
                <div class="categorie">
                    <p>
                        <?php _e('Enfant -12 ans', 'refuge'); ?>
                    </p>
                </div>
            </div>
            <div class="tarif2">
                <div class="prix">
                    <p>16€</p>
                </div>
                <div class="categorie">
                    <p>
                        <?php _e('Adulte +16 ans', 'refuge'); ?>
                    </p>
                </div>
            </div>
            <div class="tarif3">
                <div class="prix">
                    <p>14€</p>
                </div>
                <div class="categorie">
                    <p>
                        <?php _e('Membre CAF', 'refuge'); ?>
                    </p>
                    <legend>
                        <?php _e('FFME*/FFS*Scolaire étudiants/ enfants(12-15ans)', 'refuge'); ?>
                    </legend>
                </div>
            </div>
            <div class="tarif4">
                <div class="prix">
                    <p>6€</p>
                </div>
                <div class="categorie">
                    <p>
                        <?php _e('Emplacement Bivouac', 'refuge'); ?>
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="reservation">
    <h2> <?php _e('RÉSERVATION', 'refuge'); ?></h2>
    <div class="resa">
        <?php
        // echo do_shortcode(get_field('form')); ?>
        <!-- '[contact-form-7 id="182" title="Formulaire de contact 1"]' -->
        <div class="resa-right">
            <h3>
                <?php the_field('titre'); ?>
            </h3>
            <p>
                <?php the_field('informations'); ?>
            </p>
        </div>
    </div>
</section>
<section class="nuit">
    <div class="left">
    </div>
    <div class="right">
        <h3>
            <?php the_field('titre_section_nuit') ?>
        </h3>
        <p>
            <?php the_field('texte_section_nuit') ?>
        </p>
    </div>
</section>
<?php
//Footer
get_footer();
?>