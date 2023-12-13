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

                    <p class="mb-5"><span class="carac">rapport n°</span> : <?php echo $infoRapport['RAP_NUM'] ?></p>
                    <p><span class="carac">nom collaborateur</span> : <?php echo $infoRapport['COL_NOM'] ?></p>
                    <p><span class="carac">prenom collaborateur</span> : <?php echo $infoRapport['COL_PRENOM'] ?></p>
                    <p><span class="carac">nom praticien</span> : <?php echo $infoRapport['PRA_NOM'] ?></p>
                    <p><span class="carac">prenom praticien</span> : <?php echo $infoRapport['PRA_PRENOM'] ?></p>
                    <p><span class="carac">date du rapport</span> : <?php echo date("d/m/Y", strtotime($infoRapport['RAP_DATE'])); ?></p>
                    <p><span class="carac">bilan du rapport</span> : <?php echo $infoRapport['RAP_BILAN'] ?></p>
                    <a class="btn btn-info text-light me-3" href="index.php?uc=accueil">Valider le rapport</a>
                </div>
            </div>
        </div>
</section>