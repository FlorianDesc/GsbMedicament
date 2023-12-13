<section class="bg-light">
    <div class="container">
        <div class="structure-hero pt-lg-5 pt-4">
            <h1 class="titre text-center">Mes nouveaux rapports</h1>
        </div>
        <div class="row align-items-center justify-content-center">
            <div class="w-50 col-12 col-sm-8 col-lg-6 col-xl-5 col-xxl-4 py-lg-5 py-3">
                <div class="formulaire d-flex flex-column justify-content-center align-items-center gap-3">
                    <h2>Liste de mes nouveaux rapports</h2>
                    <?php
                    foreach($mesRapports as $rapport){
                        echo '<div class="d-flex justify-content-around align-items-center w-75 shadow p-3 mb-1 bg-white">Rapport n°' . $rapport['RAP_NUM'] . '<a class="btn btn-info text-light" href="index.php?uc=rapport&action=consulterNouveauxRapportsRegion&id=' . $rapport['RAP_NUM'] . '">Consulter</a></div>';
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>