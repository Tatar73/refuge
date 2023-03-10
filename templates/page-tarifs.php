<?php
// Header
get_header();

/*
Template name: Tarifs
*/

$tarifs = get_field('tarifs');


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
                    <p>
                        <?php the_field('tarif1') ?>
                    </p>
                </div>
                <div class="categorie">
                    <p>
                        <?php _e('Enfant -12 ans', 'refuge'); ?>
                    </p>
                </div>
                <div class="hors_repas">
                    <p>Hors Repas</p>
                    <p>
                        <?php the_field('demie_pension_tarif1') ?>
                    </p>
                </div>
            </div>
            <div class="tarif2">
                <div class="prix">
                    <p>
                        <?php the_field('tarif2') ?>
                    </p>
                </div>
                <div class="categorie">
                    <p>
                        <?php _e('Adulte +16 ans', 'refuge'); ?>
                    </p>
                </div>
                <div class="hors_repas">
                    <p>Hors Repas</p>
                    <p>
                        <?php the_field('demie_pension_tarif2') ?>
                    </p>
                </div>
            </div>
            <div class="tarif3">
                <div class="prix">
                    <p>
                        <?php the_field('tarif3') ?>
                    </p>
                </div>
                <div class="categorie">
                    <p>
                        <?php _e('Membre CAF', 'refuge'); ?>
                    </p>
                    <legend>
                        <?php _e('FFME*/FFS*Scolaire ??tudiants/ enfants(12-15ans)', 'refuge'); ?>
                    </legend>
                </div>
                <div class="hors_repas">
                    <p>Hors Repas</p>
                    <p>
                        <?php the_field('demie_pension_tarif3') ?>
                    </p>
                </div>
            </div>
            <div class="tarif4">
                <div class="prix">
                    <p>
                        <?php the_field('tarif4') ?>
                    </p>

                </div>
                <div class="categorie">
                    <p>
                        <?php _e('Emplacement Bivouac', 'refuge'); ?>
                    </p>
                </div>
                <div class="hors_repas">
                    <p>Hors Repas</p>
                    <p>
                        <?php the_field('demie_pension_tarif4') ?>
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="reservation">
    <h2>
        <?php _e('DEMANDE DE R??SERVATION', 'refuge'); ?>
    </h2>
    <div class="resa">
        <?php echo do_shortcode(get_field('form')); ?>
        <!-- '[contact-form-7 id="182" title="Formulaire de contact 1"]' -->
        <div class="resa-right">
            <h3>
                <?php the_field('titre'); ?>
            </h3>
            <p>
                <?php _e('La connexion internet ??tant al??atoire, nous ne garantissons pas une r??ponse rapide', 'refuge'); ?>
            </p>
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