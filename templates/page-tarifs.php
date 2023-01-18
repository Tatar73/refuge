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
                    <label for="nom">Nom</label>
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
                            <button class="moins"><svg width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="ht
                                    tp://www.w3.org/2000/svg">
                                    <circle cx="25" cy="25" r="25" fill="#555B47" fill-opacity="0.5" />
                                    <circle cx="25" cy="25" r="15" fill="#555B47" />
                                    <line x1="31.5" y1="24.5" x2="18.5" y2="24.5" stroke="#F8F4EC" stroke-width="3" stro
                                        ke-linecap="round" />
                                </svg></button>
                            <input type="text" value="0" name="child_number">

                            <button class="plus"><svg width="50" height="50" viewBox="0 0 50 50" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="25" cy="25" r="25" fill="#555B47" fill-opacity="0.5" />
                                    <circle cx="25" cy="25" r="15" fill="#555B47" />
                                    <path
                                        d="M31.6258 26.3526H26.5319V31.6318C26.5319 32.3877 25.9198 33 25.164 33C24.4082 33 23.796 32.3877 23.796 31.6318V26.3526H18.3617C17.6121 26.3526 17 25.7403 17 24.9844C17 24.2284 17.6121 23.6162 18.3679 23.6162H23.8023V18.3682C23.8023 17.6123 24.4144 17 25.1702 17C25.926 17 26.5382 17.6123 26.5382 18.3682V23.6162H31.6321C32.3879 23.6162 33 24.2284 33 24.9844C32.9906 25.7403 32.3816 26.3526 31.6258 26.3526Z"
                                        fill="#F8F4EC" />
                                </svg></button>
                        </div>
                    </div>
                    <div class="middle">
                        <p>Adultes</p>
                        <div class="quantite">
                            <button class="moins"><svg width="50" height="50" viewBox="0 0 50 50" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="25" cy="25" r="25" fill="#555B47" fill-opacity="0.5" />
                                    <circle cx="25" cy="25" r="15" fill="#555B47" />
                                    <line x1="31.5" y1="24.5" x2="18.5" y2="24.5" stroke="#F8F4EC" stroke-width="3"
                                        stroke-linecap="round" />
                                </svg></button>
                            <input type="text" value="0" name="adult_number">
                            <button class="plus"><svg width="50" height="50" viewBox="0 0 50 50" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="25" cy="25" r="25" fill="#555B47" fill-opacity="0.5" />
                                    <circle cx="25" cy="25" r="15" fill="#555B47" />
                                    <path
                                        d="M31.6258 26.3526H26.5319V31.6318C26.5319 32.3877 25.9198 33 25.164 33C24.4082 33 23.796 32.3877 23.796 31.6318V26.3526H18.3617C17.6121 26.3526 17 25.7403 17 24.9844C17 24.2284 17.6121 23.6162 18.3679 23.6162H23.8023V18.3682C23.8023 17.6123 24.4144 17 25.1702 17C25.926 17 26.5382 17.6123 26.5382 18.3682V23.6162H31.6321C32.3879 23.6162 33 24.2284 33 24.9844C32.9906 25.7403 32.3816 26.3526 31.6258 26.3526Z"
                                        fill="#F8F4EC" />
                                </svg></button>
                        </div>
                    </div>
                    <div class="right">
                        <p>CAF</p>
                        <div class="quantite">
                            <button class="moins"><svg width="50" height="50" viewBox="0 0 50 50" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="25" cy="25" r="25" fill="#555B47" fill-opacity="0.5" />
                                    <circle cx="25" cy="25" r="15" fill="#555B47" />
                                    <line x1="31.5" y1="24.5" x2="18.5" y2="24.5" stroke="#F8F4EC" stroke-width="3"
                                        stroke-linecap="round" />
                                </svg></button>
                            <input type="text" value="0" name="caf_number">
                            <button class="plus"><svg width="50" height="50" viewBox="0 0 50 50" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="25" cy="25" r="25" fill="#555B47" fill-opacity="0.5" />
                                    <circle cx="25" cy="25" r="15" fill="#555B47" />
                                    <path
                                        d="M31.6258 26.3526H26.5319V31.6318C26.5319 32.3877 25.9198 33 25.164 33C24.4082 33 23.796 32.3877 23.796 31.6318V26.3526H18.3617C17.6121 26.3526 17 25.7403 17 24.9844C17 24.2284 17.6121 23.6162 18.3679 23.6162H23.8023V18.3682C23.8023 17.6123 24.4144 17 25.1702 17C25.926 17 26.5382 17.6123 26.5382 18.3682V23.6162H31.6321C32.3879 23.6162 33 24.2284 33 24.9844C32.9906 25.7403 32.3816 26.3526 31.6258 26.3526Z"
                                        fill="#F8F4EC" />
                                </svg></img></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="infos">
                <p>Informations complémentaires</p>
                <div class="ligne1">
                    <input type="checkbox" id="pique_nique" name="pique_nique" value="Pique-nique">
                    <label for="pique_nique">Pique-nique</label>
                    <input type="checkbox" id="demi_pension" name="demi_pension">
                    <label for="demi_pension">Demi-pension</label>
                </div>
                <div class="ligne2">
                    <input type="checkbox" id="nuitee_sans_repas" name="nuitee_sans_repas" value="nuitee_sans_repas">
                    <label for="nuitee_sans_repas">Nuitée sans repas</label>
                    <input type="checkbox" id="bivouac" name="bivouac" value="bivouac">
                    <label for="bivouac">Bivouac</label>
                </div>
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
                <div class="left">
                    <p>CAPTCHA</p>
                </div>
                <div class="right">
                    <input type="submit" value="Envoyer">
                </div>

            </div>
        </div>
        <div class="resa-right">
            <h3>Informations</h3>
            <p>Versement d’argent à la réservation à raison de 15 € par personne et par nuit, via un chèque envoyé
                par
                voie postale.</p>
            <br>
            <p>Si l’annulation de réservation intervient moins de 48h avant la date d’arrivée (heure
                de référence
                d’arrivée : 18h) et ne donnent alors lieu ni à remboursement, ni à avoir. Si l’annulation de
                réservation
                intervient plus de 48h avant l’arrivée au refuge, elles sont transformées en avoir valable pour une
                réservation ultérieure pour un groupe de taille au moins équivalente à celle du groupe initial et
                pour
                la saison en cours.</p>
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
    </div>
</section>
<?php
//Footer
get_footer();
?>