<section class="bg-light">
    <div class="container">
        <div class="structure-hero pt-lg-5 pt-4">
            <h1 class="titre text-center">Formulaire des dates de visites</h1>
            <p class="text text-center">
                Formulaire permettant d'afficher toutes les informations
                sur les rapports de visites d'une région en fonction d'une fourchette de dates.
            </p>
        </div>
        <div class="row align-items-center justify-content-center">
            <div class="test col-12 col-sm-8 col-lg-6 col-xl-5 col-xxl-4 py-lg-5">
                <img class="img-fluid size-img-page" src="assets/img/rapport.jpg">
            </div>
            <div class="test col-12 col-sm-8 col-lg-6 col-xl-5 col-xxl-4 py-lg-5 py-3">
                <?php if ($_SESSION['erreur']) {
                    echo '<p class="alert alert-danger text-center w-100">Un problème est survenu lors de la fourchette de date</p>';
                    $_SESSION['erreur'] = false;
                } ?>
                
                <form action="index.php?uc=rapportsregions&action=afficherrapport" method="post" class="formulaire-recherche col-12 m-0" >
                    <label class="titre-formulaire" for="listerapport">Informations :</label>
                    <p>Date du rapport</p>
                    <p>
                        <label for="dudate">du </label>
                        <input type="text" name="dudate" pattern="\d{4}/\d{2}/\d{2}" id="dudate" placeholder="Ex. : 2002/02/01" size="14" title="Veuillez saisir une date au format aaaa/mm/jj" required>
                    </p>
                    <p>
                        <label for="audate">au </label>
                        <input type="text" name="audate" pattern="\d{4}/\d{2}/\d{2}" id="audate" placeholder="Ex. : 2002/02/30" size="14" title="Veuillez saisir une date au format aaaa/mm/jj" required>
                    </p>
                      <select id="collaborateur "name="collaborateur" class="form-select mt-3">
                        <option value class="text-center">- Choisissez un visiteur -</option>
                        <?php
                        foreach ($col as $collaborateur) {
                            echo '<option value="' .$collaborateur['COL_MATRICULE'] . '" class="form-control">' . $collaborateur['COL_NOM'] . ' ' . $collaborateur['COL_PRENOM'] . '</option>';
                        }
                        ?>
                    </select>  
                    <input class="btn btn-info text-light valider" type="submit" value="Afficher les informations">
                </form>
            </div>
        </div>
    </div>
</section>

<!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function(){
            $("#submitBtn").click(function(){
                var dateVisite = new Date($("#dudate").val());
                var dateSaisie = new Date($("#audate").val());

                if (dateVisite > dateSaisie) {
                    $("#errorMessage").text("La date de visite ne peut pas être postérieure à la date de saisie.");
                    return false;
                }
            });
        });
    </script> -->