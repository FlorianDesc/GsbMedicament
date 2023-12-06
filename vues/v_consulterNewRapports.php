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
                    foreach($res as $rapport){
                        ?>
                        <p class="mb-5"><span class="carac">rapport n°</span> : <?php echo $rapport['RAP_NUM'] ?></p>
                        <p><span class="carac">nom collaborateur</span> : <?php echo $rapport['COL_NOM'] ?></p>
                        <p><span class="carac">num praticien</span> : <?php echo $rapport['PRA_NUM'] ?></p>
                        <p><span class="carac">nom praticien</span> : <?php echo $rapport['PRA_NOM'] ?></p>
                        <p><span class="carac">bilan du rapport</span> : <?php echo $rapport['RAP_BILAN'] ?></p>
                        <p><span class="carac">date du rapport</span> : <?php echo date("d/m/Y", strtotime($rapport['RAP_DATE'])); ?></p>
                    <?php
                    }
                    ?>
                    
                </div>
            </div>
        </div>
</section>