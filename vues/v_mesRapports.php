<section class="bg-light">
    <div class="container">
        <div class="structure-hero pt-lg-5 pt-4">
            <h1 class="titre text-center">Mes rapports</h1>
            <p class="text text-center">
                Consulter ses rapports.
            </p>
        </div>

        <div class="row align-items-center justify-content-center flex-column">
            <div class="col-12 col-sm-8 col-lg-6 col-xl-5 col-xxl-4 py-lg-5 py-3">
                <form id="formDate" class="formulaire d-flex flex-column justify-content-center align-items-center gap-3" method="POST" action="index.php?uc=rapport&action=voirRapport">
                    <label class="titre-formulaire mb-3" for="listemedoc">Consulter un rapport :</label>
                    <div>
                        <label for="date">date de début :</label>
                        <input required type="date" id="dateD" name="dateD" value="">
                    </div>
                    <div>
                        <label for="date">date de fin :</label>
                        <input required type="date" id="dateF" name="dateF" value="">
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
                        <input id="btnAfficher" class="btn btn-info text-light valider mt-4 d-block" type="submit" value="Afficher les informations">
                    </div>
                </form>
            </div>
        </div>
</section>

<script>
    const dateD = document.querySelector("#dateD")
    const dateF = document.querySelector("#dateF")
    const btnAfficher = document.querySelector("#btnAfficher")
    const form =  document.querySelector("#formDate")
    btnAfficher.addEventListener("click", (event) => {
        dateDeb = new Date(dateD.value)
        dateFin = new Date(dateF.value)
        if(!comparerDates(dateDeb , dateFin)){
            form.action = "index.php?uc=rapport&action=choisirRapport&message=Vous_devez_mettre_une_date_de_fin_suppérieur_à_la_date_de_début!"
        }
    })

function comparerDates(date1, date2) {
    return date1 <= date2
}
</script>