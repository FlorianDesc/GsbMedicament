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
                <form style="height:926px;" class="form-signin formulaire m-auto d-flex flex-column align-items-center" action="index.php?uc=gestion&action=sauvegardeInfoPraticien&idpra= <?php echo $infoPratSelect['PRA_NUM'] ?>" method="post">
                    <div class="container">
                        <div class="row gap-5 m-5">
                            <div class="col">
                                <label class="w-100 text-center" for="nom">Nom</label>
                                <?php 
                                echo '<input type="text" class="form-control" name="nom" value="' . $infoPratSelect['PRA_NOM'] .'" required/>';
                                ?>
                            </div>
                            <div class="col">
                                <label class="w-100 text-center" for="prenom">Prenom</label>
                                <?php 
                                echo '<input type="text" class="form-control" name="prenom" value="' . $infoPratSelect['PRA_PRENOM'] .'" required/>';
                                ?>
                            </div>
                        </div>

                        <div class="row gap-5 m-5">
                            <div class="col">
                                <label class="w-100 text-center" for="adresse">Adresse</label>
                                <?php 
                                echo '<input type="text" class="form-control" name="adresse"" value="' . $infoPratSelect['PRA_ADRESSE'] .'" required/>';
                                ?>
                            </div>
                            <div class="col">
                            <label class="w-100 text-center" for="cp">Code Postal</label>
                            <?php 
                                echo '<input type="text" class="form-control" name="cp" value="' . $infoPratSelect['PRA_CP'] .'" required/>';
                                ?>
                            </div>
                        </div>

                        <div class="row gap-5 m-5">
                            <div class="col">
                                <label class="w-100 text-center" for="ville">Ville</label>
                                <?php 
                                echo '<input type="text" class="form-control" name="ville" value="' . $infoPratSelect['PRA_VILLE'] .'" required/>';
                                ?>
                            </div>
                            <div class="col">
                                <label class="w-100 text-center" for="cn">Coefficient notoriété</label>
                                <?php 
                                echo '<input type="number" class="form-control" name="cn" value="' . $infoPratSelect['PRA_COEFNOTORIETE'] .'"/>';
                                ?>
                            </div>
                        </div>

                        <div class="row gap-5 m-5">
                            <div class="col">
                                <label class="w-100 text-center" for="cc">Coefficient confiance</label>
                                <?php 
                                echo '<input type="number" class="form-control" name="cc" value="' . $infoPratSelect['PRA_COEFCONFIANCE'] .'"/>';
                                ?>
                            </div>
                            <div class="col">
                                <label class="w-100 text-center" for="tp">Type praticien</label>
                                <?php
                                echo '<select name="tp" class="form-control">';
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
                        </div>
                        <div class="row m-5 d-flex align-items-center justify-content-center">
                            <div class="w-50">
                                <label class="w-100 text-center" for="fruits">POMME</label>
                                <div id="containerMultiSelect" style="min-height:45.6px; transition:.2s; cursor:pointer;" class="border form-control d-flex justify-content-end align-items-center">▼
                                </div>
                                <div style="transition: 2s; max-height:96px; overflow-y: scroll;" id="choix" class=" bg-danger d-flex flex-column align-items-center d-none">
                                        <div onclick="getClass(this)" class="choix 1">choix1</div>
                                        <div class="choix 2">choix2</div>
                                        <div class="choix 3">choix3</div>
                                        <div class="choix 4">choix4</div>
                                        <div class="choix 4">choix4</div>
                                        <div class="choix 4">choix4</div>
                                        <div class="choix 4">choix4</div>
                                        <div class="choix 4">choix4</div>
                                    </div>
                                <input type="text" class="d-none" value="">
                            </div>
                        </div>
                        <div class="d-flex flex-column justify-content-center align-items-center gap-2">
                            <input class="btn btn-info text-light valider" type="submit" value="Enregistrer">
                            <a class="btn btn-info text-light" href="index.php?uc=gestion&action=gererMedecinListe">Annuler</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<script>
    const containerMultiSelect = document.querySelector("#containerMultiSelect")
    containerMultiSelect.addEventListener("mouseover", () => {
        containerMultiSelect.style.backgroundColor = "rgba(138, 138, 138, 0.31)"
    })
    containerMultiSelect.addEventListener("mouseout", () => {
        containerMultiSelect.style.background = "none"
    })

    const choix = document.querySelector("#choix")
    var nbClick = 0
    containerMultiSelect.addEventListener("click", () => {
        nbClick++
        if(nbClick%2 != 0){
            choix.classList.replace("d-none","d-block")
        }
        else{
            choix.classList.replace("d-block","d-none")
        }
    })

    function getClass(element){
        if (element instanceof HTMLElement) {
            console.log(element.className)
        } 
    }
    


    
</script>