<section class="bg-light">
    <div class="container">
        <div class="structure-hero pt-lg-5 pt-4">
            <h1 class="titre text-center">Gérer médecin</h1>
            <p class="text text-center">Formulaire permettant de se connecter au site et d'accèder au données.</p>
        </div>
        <div class="row align-items-center justify-content-center">
            <div class="test col-10  py-lg-5 py-3">
                <?php if (isset($userEmpty)) {
                    echo '<p class="alert alert-danger text-center w-100">' . $userEmpty . '</p>';
                }?>
                <form class="form-signin formulaire m-auto d-flex flex-column align-items-center" action="index.php?uc=connexion&action=connexion" method="post">
                    <div class="container">

                        <div class="row gap-5 m-5">
                            <div class="col">
                                <label class="w-100 text-center" for="nom">Nom</label>
                                <input type="nom" class="form-control" name="nom" />
                            </div>
                            <div class="col">
                                <label class="w-100 text-center" for="prenom">Prenom</label>
                                <input type="prenom" class="form-control" name="prenom" />
                            </div>
                        </div>

                        <div class="row gap-5 m-5">
                            <div class="col">
                                <label class="w-100 text-center" for="adresse">Adresse</label>
                                <input type="adresse" class="form-control" name="adresse" />
                            </div>
                            <div class="col">
                            <label class="w-100 text-center" for="cp">Code Postal</label>
                                <input type="cp" class="form-control" name="cp" />
                            </div>
                        </div>

                        <div class="row gap-5 m-5">
                            <div class="col">
                                <label class="w-100 text-center" for="ville">Ville</label>
                                <input type="ville" class="form-control" name="ville" />
                            </div>
                            <div class="col">
                            <label class="w-100 text-center" for="cn">Coefficient notoriété</label>
                                <input type="cn" class="form-control" name="cn" />
                            </div>
                        </div>

                        <div class="row gap-5 m-5">
                            <div class="col">
                                <label class="w-100 text-center" for="cc">Coefficient confiance</label>
                                <input type="cc" class="form-control" name="cc" />
                            </div>
                            <div class="col">
                                <label class="w-100 text-center" for="tp">Type praticien</label>
                                <input type="tp" class="form-control" name="tp" />
                            </div>
                        </div>
                        <input class="btn btn-info text-light valider" type="submit" value="Sauvegarder">
                        <input class="btn btn-info text-light valider mt-2" type="submit" value="Annuler">
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>