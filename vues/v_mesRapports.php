<section class="bg-light">
    <div class="container">
        <div class="structure-hero pt-lg-5 pt-4">
            <h1 class="titre text-center">Mes rapports</h1>
            <p class="text text-center">
                Consulter ses rapports.
            </p>
        </div>
        <div class="row align-items-center justify-content-center">
            <div class="test col-12 col-sm-8 col-lg-6 col-xl-5 col-xxl-4 py-lg-5 py-3">
                <form class="formulaire d-flex flex-column justify-content-center align-items-center gap-3" method="POST" action="index.php?uc=rapport&action=voirRapport">
                    <label class="titre-formulaire mb-3" for="listemedoc">Consulter un rapport :</label>
                    <div>
                        <label for="date">date de début :</label>
                        <input required type="date" id="dateD" name="dateD">
                    </div>
                    <div>
                        <label for="date">date de fin :</label>
                        <input required type="date" id="dateF" name="dateF">
                    </div>
                    <div>
                        <select name="praticien" class="form-select">
                            <option value="" class="text-center">- Choisissez un praticien -</option>
                            <?php
                            foreach ($lesPraticiens as $praticien) {
                                echo '<option value="' . $praticien['PRA_NUM'] . '">' . $praticien['PRA_NOM'] . " " . $praticien['PRA_PRENOM'] . '</option>';
                            }
                            ?>
                        </select>
                        <input class="btn btn-info text-light valider mt-4" type="submit" value="Afficher les informations">
                    </div>
                </form>
            </div>
        </div>
</section>