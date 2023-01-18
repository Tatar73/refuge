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
    <h2>RÉSERVATION</h2>
    <div class="resa">
        <div class="resa-left">
            <div class="form-flex">
                <div class="form-left">
                    <label for="nom">Name</label>
                    <input type="text" name="nom">
                    <label for="mail">E-mail</label>
                    <input type="text" name="mail">
                </div>
                <div class="form-right">
                    <label for="prenom">Prénom</label>
                    <input type="Telephone" name="prenom">
                    <label for="phone">Téléphone</label>
                    <input type="text" name="phone">
                </div>
            </div>
            <div class="nb-personnes">
                <p>Nombre de personnes</p>
                <div class="flex">
                    <div class="left">
                        <p>Enfants</p>
                        <div class="quantite">
                            <button class="moins"><img
                                    src="<?php echo (get_template_directory_uri()); ?>/assets/img/icon/button_moins.svg"
                                    alt="boutton moins"></img></button>
                            <p>1</p>
                            <button class="plus"><img
                                    src="<?php echo (get_template_directory_uri()); ?>/assets/img/icon/button_plus.svg"
                                    alt="boutton moins"></img></button>
                        </div>
                    </div>
                    <div class="middle">
                        <p>Adultes</p>
                        <div class="quantite">
                            <button class="moins"><img
                                    src="<?php echo (get_template_directory_uri()); ?>/assets/img/icon/button_moins.svg"
                                    alt="boutton moins"></img></button>
                            <p>0</p>
                            <button class="plus"><img
                                    src="<?php echo (get_template_directory_uri()); ?>/assets/img/icon/button_plus.svg"
                                    alt="boutton moins"></img></button>
                        </div>
                    </div>
                    <div class="right">
                        <p>CAF</p>
                        <div class="quantite">
                            <button class="moins"><img
                                    src="<?php echo (get_template_directory_uri()); ?>/assets/img/icon/button_moins.svg"
                                    alt="boutton moins"></img></button>
                            <p>0</p>
                            <button class="plus"><img
                                    src="<?php echo (get_template_directory_uri()); ?>/assets/img/icon/button_plus.svg"
                                    alt="boutton moins"></img></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="infos">

            </div>
            <div class="date">
                <label for="date">Date</label>
                <input type="date" id="date" name="date" value="2023-01-20" min="2023-01-01" max="2043-01-01">
            </div>
            <div class="message">
                <label for="message">Votre message</label>
                <textarea id="message" name="message"></textarea>
            </div>
            <div class="submit">
                <input type="submit" value="Envoyer">
            </div>
        </div>
        <div class="resa-right">
            <h3>Informations</h3>
            <ul>
                <li>Versement d’argent à la réservation à raison de 15 € par personne et par nuit, via un chèque envoyé
                    par
                    voie postale.</li>
                <br>
                <li>Si l’annulation de réservation intervient moins de 48h avant la date d’arrivée (heure de référence
                    d’arrivée : 18h) et ne donnent alors lieu ni à remboursement, ni à avoir. Si l’annulation de
                    réservation
                    intervient plus de 48h avant l’arrivée au refuge, elles sont transformées en avoir valable pour une
                    réservation ultérieure pour un groupe de taille au moins équivalente à celle du groupe initial et
                    pour
                    la saison en cours.</li>
            </ul>
        </div>
    </div>
</section>
<section class="nuit">
    <div class="left">
    </div>
    <div class="right">
        <h3>Seul avec les étoiles</h3>
        <p>C’est à la nuit tombée que la magie opère. Les animaux dorment, plus aucun bruit et aucune lumière à
            l’horizon.</p>
        <br>
        <p>Il ne reste que vous et le ciel étoilé. L’occasion de venir réver dans ce lieu épargné de la pollution
            lumineuse.</p>
        <br>
        <p>Afin d’avoir un maximum de chance d’observer la voie lactée, préférez un jour d’été sans nuages et sans
            lune.</p>
    </div>
</section>
<?php
//Footer
get_footer();
?>