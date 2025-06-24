<!-- DEBUT DU MAIN -->
    <main class="main_contact">

        <!-- CREATION DU CAROUSSEL -->
        <div id="carouselExample" class="carousel slide">
            <div class="carousel-inner">

                <!-- FORMULAIRE DE CONTACT -->
               
                <div class="carousel-item active">
                    <div class="carousel_content_center h-100">


                        <div class="d-flex flex-column justify-content-center text-start w-75 ">
                            <h2 class="h2_form">VOUS SOUHAITEZ ME CONTACTER ?</h2>
                            <p class="p_form">
                                Pour me proposer un stage dans votre entreprise ou me contacter, vous pouvez remplir ce
                                formulaire.
                                Sinon passez à la page suivante.
                            </p>
                        </div>

                        <?php if (!empty($_GET["msg"])): ?>
                                    <p class="alert alert-dark" role="alert">
                                    <?php echo htmlspecialchars($_GET["msg"]); ?></p>
                            <?php endif; ?>
                            
                        <form id="formportfolio" class="w-100" action="traitement.php" method="post">
                            <div class="mb-3">
                                <label for="nom" class="form-label fw-bold">Nom*</label>
                                <input type="text" class="form-control" id="nom" name="nom" placeholder="Votre nom ..." required>
                            </div>

                            <div class="mb-3">
                                <label for="prenom" class="form-label fw-bold">Prenom</label>
                                <input type="text" class="form-control" id="prenom" name="prenom" placeholder="Votre prenom ...">
                            </div>

                            <div class="mb-3">
                                <label for="email" class="form-label fw-bold">E-mail*</label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="Votre e-mail ..."
                                   required >
                            </div>

                            <div class="mb-3">
                                <label for="telephone" class="form-label fw-bold">Téléphone</label>
                                <input type="tel" class="form-control" id="telephone" name="telephone" placeholder="Votre téléphone ...">
                            </div>

                            <div class="mb-3">
                                <label for="message" class="form-label fw-bold">Message*</label>
                                <textarea class="form-control" id="message" name="message" rows="5" placeholder="Votre message ..." required
                                    ></textarea>
                            </div>

                            <div class="form-check mb-2">
                                <input class="form-check-input" type="checkbox" id="consent" required>
                                <label class="form-check-label fw-bold" for="consent">
                                    Accepter le traitement de mes informations.
                                </label>
                            </div>

                            <small class="form-text text-muted d-block mb-3">
                                En renseignant vos informations personnelles, vous acceptez que nous les traitions pour
                                répondre à votre
                                demande et que nous vous contactions depuis les informations de contact saisies.
                                Plus d'infos sur notre <a href="Politique_de_confidentialité.html" target="_blank" title="Liens vers la politique de confidentialité"
                                    class="text-decoration-none">politique de
                                    confidentialité</a>.
                            </small>
                            
                            <div class="text-center">
                               <input class="g-recaptcha" 
                                    data-sitekey="6LcBPmYrAAAAAL27y2HGdyVEAHL1ZnBMMTNpv2kF" 
                                    data-callback='onSubmit' 
                                    data-action='submit' type="submit" value="Envoyer">
                            </div>
                        </form>

                    </div>
                </div>      
                <!-- FIN DU FORMULAIRE  -->




                <!-- INFO CONTACT ACCORDEON -->
                <div class="carousel-item">
                    <div class="carousel_content_center">



                        <div class="accordion accordion-flush w-75 text-focus-in" id="accordionFlushExample">


                            <h1 class="mb-4">F.A.Q</h1>
                            <div class="accordion-item ">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapseOne" aria-expanded="false"
                                        aria-controls="flush-collapseOne">
                                        Quand suis-je disponible ?
                                    </button>
                                </h2>
                                <div id="flush-collapseOne" class="accordion-collapse collapse"
                                    data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        Je suis disponible pour un stage non rémunéré d'un mois du 29 septembre au 24
                                        octobre 2025, et prêt à
                                        travailler dès la fin de ma formation le 20 novembre 2025.
                                    </div>
                                </div>
                            </div>



                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapseTwo" aria-expanded="false"
                                        aria-controls="flush-collapseTwo">
                                        Quelles sont mes motivations ?
                                    </button>
                                </h2>
                                <div id="flush-collapseTwo" class="accordion-collapse collapse"
                                    data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        Je suis animé par l'envie de créer, de résoudre des problèmes concrets et de
                                        progresser chaque jour dans un
                                        métier en constante évolution.
                                    </div>
                                </div>
                            </div>



                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapseThree" aria-expanded="false"
                                        aria-controls="flush-collapseThree">
                                        Quelles sont mes qualités ?
                                    </button>
                                </h2>
                                <div id="flush-collapseThree" class="accordion-collapse collapse"
                                    data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        Curieux, rigoureux et persévérant, je m'adapte vite et j'aime travailler en
                                        équipe pour atteindre un
                                        objectif commun.
                                    </div>
                                </div>
                            </div>



                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapseFour" aria-expanded="false"
                                        aria-controls="flush-collapseFour">
                                        Quels sont mes défauts ?
                                    </button>
                                </h2>
                                <div id="flush-collapseFour" class="accordion-collapse collapse"
                                    data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        Perfectionniste, je passe parfois trop de temps sur les détails… mais cela
                                        garantit un travail propre et
                                        bien fini.
                                    </div>
                                </div>
                            </div>



                        </div>
                    </div>
                </div>
                <!-- FIN ACCORDEON -->



                <!-- LIENS DE CONTACTS -->
                <div class="carousel-item">
                    <div class="carousel_content_center">
                        <div class="contact-section text-center">
                            <h2>Sinon vous pouvez me joindre par téléphone</h2>
                            <div class="contact-item">
                                <i class="fa-solid fa-square-phone fa-3x" style="color: #000000;"></i>
                                <a class="text-decoration-none " href="tel:+33609136867"
                                    title="Lien vers mon téléphone">06 09 13 68 67</a>
                            </div>

                            <h2 class="text-start">Mais aussi consultez</h2>

                            <div class="contact-item">
                                <i class="fa-solid fa-file-lines fa-3x" style="color: #000000;"></i>
                                <a class="text-decoration-none " href="media/CV DAVID Benjamin.pdf" title="Lien vers mon cv" target="_blank">Mon
                                    CV</a>
                            </div>

                            <div class="contact-item">
                                <i class="fa-brands fa-square-git fa-3x" style="color: #000000;"></i>
                                <a class="text-decoration-none " href="https://github.com/Nebji14" title="Liens vers mon github"
                                    target="_blank">Lien GitHub</a>
                            </div>

                            <div class="contact-item">
                                <i class="fa-brands fa-linkedin fa-3x" style="color: #000000;"></i>
                                <a class="text-decoration-none " href="https://www.linkedin.com/in/benjamin-david-dev/" title="lien vers mon linkedin"
                                    target="_blank">Lien LinkedIn</a>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
        <!-- fin des contacts -->
        <!-- FIN FORMULAIRE -->


        <!-- MODIFICATION DES BOUTONS -->
        <button class="carousel-control-prev ps-0" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
            <span aria-hidden="true"></span>
            <span><i class="fa-solid fa-angles-left fa-2x" style="color: #c0c0c0;"></i></span>
        </button>

        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
            <spanaria-hidden="true"></span>
                <span><i class="fa-solid fa-angles-right fa-2x" style="color: #c0c0c0;"></i></span>
        </button>
        <!-- FIN DE MODIF DES BOUTONS -->
        </div>
        <!-- FIN DU CAROUSSEL -->

    </main>
    <!-- FIN DU MAIN -->