<?php
// Header
get_header();

/*
Template name: Tarifs
*/

?>

<section class="tarifs">
    <div class="titre">
        <h1>TARIFS</h1>
        <p>
            <?php the_field('modes_paiements') ?>
        </p>
    </div>
    <div class="forfaits">
        <div class="parent">
            <div class="tarif">
                <div class="infos">
                    <img src="<?php echo (get_template_directory_uri()); ?>/assets/img/icon/interrogation.svg"
                        alt="icon aide">
                    <div class="taxes">
                        <p>+ taxe de séjour = 0,4€ (mineurs exonérés)</p>
                        <p>+ supplément de 2€ pour régimes spéciaux.</p>
                    </div>
                </div>
                <div class="prix">
                    <p>10€</p>
                </div>
                <div class="categorie">
                    <p>Enfant -12 ans</p>
                </div>
            </div>
            <div class="tarif2">
                <div class="prix">
                    <p>16€</p>
                </div>
                <div class="categorie">
                    <p>Adulte +16 ans</p>
                </div>
            </div>
            <div class="tarif3">
                <div class="prix">
                    <p>14€</p>
                </div>
                <div class="categorie">
                    <p>Membre CAF</p>
                    <legend>FFME*/FFS*Scolaire étudiants/ enfants(12-15ans)</legend>
                </div>
            </div>
            <div class="tarif4">
                <div class="prix">
                    <p>6€</p>
                </div>
                <div class="categorie">
                    <p>Emplacement Bivouac</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="reservation">
    <?php echo do_shortcode('[contact-form-7 id="182" title="Formulaire de contact 1"]'); ?>
</section>
<section class="nuit">
    <div class="left">
    </div>
    <div class="right">
        <h3><?php the_field('titre_section_nuit') ?></h3>
        <p>
            <?php the_field('texte_section_nuit') ?>
        </p>
    </div>
</section>
<?php
//Footer
get_footer();
?>