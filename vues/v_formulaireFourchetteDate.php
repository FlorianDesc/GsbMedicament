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
                
                <form action="index.php?uc=rapportsregion&action=afficherrapport" method="post" class="formulaire-recherche col-12 m-0">
                    <label class="titre-formulaire" for="listerapport">Informations :</label> 
                    <p>Date du rapport</p>
                    <p>
                        <label for="dudate">du </label>
                        <input type="text" name="dudate" id="dudate" placeholder="Ex. : 01/02/2002" size="14" maxlength="20">
                    </p>
                    <p>
                        <label for="audate">au </label>
                        <input type="text" name="audate" id="audate" placeholder="Ex. : 30/02/2002" size="14" maxlength="20">
                    </p>
                    <select required name="praticien" class="form-select mt-3">
                        <option value class="text-center">- Choisissez un praticien -</option>
                        <?php
                        foreach ($pra as $praticien) {
                            echo '<option value="' . $praticien['PRA_NUM'] . '" class="form-control">' . $praticien['PRA_NOM'] . ' ' . $praticien['PRA_PRENOM'] . '</option>';
                        }
                        ?>
                    </select>
                    <input class="btn btn-info text-light valider" type="submit" value="Afficher les informations">
                </form>
        </div>