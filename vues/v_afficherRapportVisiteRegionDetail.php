<section class="bg-light">
    <div class="container">
        <div class="structure-hero pt-lg-5 pt-4">
            <h1 class="titre text-center">Rapport</h1>
            <p class="text text-center">
                Information sur ce rapport
            </p>
        </div>
        <div class="row align-items-center justify-content-center">
            <div class="test col-12 col-sm-8 col-lg-6 col-xl-5 col-xxl-4 py-lg-5">
                <img class="img-fluid w-75" src="assets/img/rapport.png">
            </div>
            <div class="test col-12 col-sm-8 col-lg-6 col-xl-5 col-xxl-4 py-lg-5 py-3">
                <div class="formulaire">
                     
                <?php 
                    
                    echo  "<p><span class='carac'>Numéro de rapport </span> :"  .  $infoRapport['RAP_NUM'] . "</p>";
                    echo "<p><span class='carac'>Auteur du rapport</span> :" . $infoRapport['COL_MATRICULE'] . "</p>";
                    if ($infoRapport['DATE_VISITE'] === null) {
                        $date_visite = "";
                        echo "<p><span class='carac'>Date de visite</span> :  $date_visite </p>";
                    }
                    echo "<p><span class='carac'>Date du rapport</span> :"  . $infoRapport['RAP_DATE'] . "</p>";
                    echo "<p><span class='carac'>Bilan du rapport</span> :" . $infoRapport['RAP_BILAN'] . "</p>";
                    echo "<p><span class='carac'>Numéro du praticien</span> :" . $infoRapport['PRA_NUM'] . "</p>";
                    echo "<p><span class='carac'>Praticien remplaçant</span> :" . $infoRapport['PRA_NUM_REMPLACANT'] . "</p>";
                    echo "<p><span class='carac'>Motif</span> :" . $infoRapport['MOT_CODE'] . "</p>";
                    echo "<p><span class='carac'>Autre motif</span> :" . $infoRapport['RAP_MOTIF_AUTRE'] . "</p>";
                    echo "<p><span class='carac'>Médicament 1</span> :" . $infoRapport['MED_DEPOTLEGAL_Presente1'] . "</p>";
                    echo "<p><span class='carac'>Médicament 2</span> :" . $infoRapport['MED_DEPOTLEGAL_Presente2'] . "</p>";
                    echo "<p><span class='carac'>État du rapport</span> :" . $infoRapport['ID_ETAT'] . "</p>";
                ?>

                    <a class="btn btn-info text-light me-3" href="index.php?uc=accueil">Retour à l accueil</a>
                </div>
            </div>
        </div>
</section>