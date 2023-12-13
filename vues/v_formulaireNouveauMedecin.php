<section class="bg-light">
    <div class="container">
        <div class="structure-hero pt-lg-5 pt-4">
            <h1 class="titre text-center">Ajouter un nouveau médecin</h1>
            <p class="text text-center">
                Compléter les informations du médecin à ajouter.
            </p>
        </div>
        <div class="row align-items-center justify-content-center">
            <div class="col-12 col-sm-8 col-lg-6">
                <form class="formulaire d-flex flex-column justify-content-center align-items-center gap-3" method="POST" action="index.php?uc=gestion&action=creationMedecin">
                    <label class="titre-formulaire mb-3" for="listemedoc">Créer un nouveau médecin :</label>
                    <div class="d-flex flex-column justify-content-center align-items-center text-center">
                        <label for="nom">Nom :</label>
                        <input style="width:200%;" required type="text" id="nom" name="nom">
                    </div>
                    <div class="d-flex flex-column justify-content-center align-items-center text-center">
                        <label class="d-flex flex-column text-center" for="prenom">Prénom :</label>
                        <input style="width:200%;" required type="text" id="prenom" name="prenom">
                    </div>
                    <div class="d-flex flex-column justify-content-center align-items-center text-center">
                        <label class="d-flex flex-column text-center" for="adresse">Adresse :</label>
                        <input style="width:200%;" required type="text" id="adresse" name="adresse">
                    </div>
                    <div class="d-flex flex-column justify-content-center align-items-center text-center">
                        <label class="d-flex flex-column text-center" for="cp">Code postal :</label>
                        <input style="width:200%;" required type="text" id="cp" name="cp">
                    </div>
                    <div class="d-flex flex-column justify-content-center align-items-center text-center">
                        <label class="d-flex flex-column text-center" for="ville">Ville :</label>
                        <input style="width:200%; margin-bottom:10px;" required type="text" id="ville" name="ville">
                    </div>
                    <div class="d-flex flex-column justify-content-center align-items-center text-center">
                        <label class="d-flex flex-column text-center" for="cn">Coefficient de notoriété :</label>
                        <input style="width:200%; margin-bottom:10px;" type="number" id="cn" name="cn">
                    </div>
                    <div class="d-flex flex-column justify-content-center align-items-center text-center">
                        <label class="d-flex flex-column text-center" for="cc">Coéfficient de confiance :</label>
                        <input style="width:200%; margin-bottom:10px;" type="number" id="cc" name="cc">
                    </div>
                    <div class="d-flex flex-column justify-content-center align-items-center text-center">
                        <label class="d-flex flex-column text-center" for="tp">Type code :</label>
                    <?php
                        echo '<select style="min-width:376px;min-height:29.2px; border-radius:1px;" name="tc" >';
                        foreach($typePra as $typ){
                            if($typ['TYP_CODE'] == $infoPratSelect['TYP_CODE']){
                                echo '<option selected="selected" value="' . $typ['TYP_CODE'] . '" >' . $typ['TYP_CODE'] . '</option>';
                            }
                            else{
                                echo '<option value="' . $typ['TYP_CODE'] . '" >' . $typ['TYP_CODE'] . '</option>';
                            }
                        } 
                        echo '</select>';
                        ?>
                    </div>
                    <div class="d-flex flex-column justify-content-center align-items-center text-center">
                        <label for="spe">Spécialités</label>
                        <select style="width:378px; min-height:29.19px;" name="spe" id="spe">
                            <option value="">-</option>
                            <?php
                                foreach($spes as $spe){
                                    echo '<option value="' . $spe['SPE_CODE'] . '" >' . $spe['SPE_LIBELLE'] . '</option>';
                                }
                            ?>
                        </select>
                    </div>
                    <input class="btn btn-info text-light valider" type="submit" value="Valider">
                </form>
            </div>
        </div>
</section>