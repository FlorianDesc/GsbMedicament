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
                            <div style="width:410px;">
                                <label class="w-100 text-center d-flex flex-column justify-content-center align-items-center" for="fruits">Spécialité</label>
                                <div id="containerMultiSelect" style="min-height:45.6px; min-width:410px; transition:.2s; cursor:pointer;" class="border form-control d-flex justify-content-between align-items-center">
                                    <div id="listeSpe" class="d-flex flex-wrap gap-2"></div>
                                ▼
                                </div>
                                <div style="transition: 2s; max-height:144px; overflow-y: scroll; cursor:pointer; position:absolute; width:410px;" id="choix" class=" shadow d-flex flex-column align-items-center d-none bg-light">
                                    <?php 
                                    foreach($specialites as $spe){
                                        echo '<div onclick="addRemoveToInput(this)" id="' . $spe['SPE_CODE'] . '" class="w-100 text-center">' . $spe['SPE_LIBELLE'] . '</div>';
                                    }
                                    ?>
                                </div>
                                <input id="spe" type="text" class="d-none" name="spe" value="">
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
<?php
$jsonTab = json_encode($speDuPra)
?>
<script>
    var tabSpe = <?php echo $jsonTab ?>;
    const containerMultiSelect = document.querySelector("#containerMultiSelect")
    const choix = document.querySelector("#choix")
    const speInput = document.querySelector("#spe")
    var nbClick = 0

    function changeBackgroundColorOnHover() {
        containerMultiSelect.addEventListener("mouseover", () => {
            containerMultiSelect.style.backgroundColor = "rgba(138, 138, 138, 0.31)"
        })
        containerMultiSelect.addEventListener("mouseout", () => {
            containerMultiSelect.style.background = "none"
        })
    }

    function cptNbClick() {
        nbClick++;
        if (nbClick % 2 !== 0) {
            choix.classList.replace("d-none", "d-block")
        } else {
            choix.classList.replace("d-block", "d-none")
        }
    }

    function addRemoveToInput(element) {
            if (element.classList.contains("bg-info")) {
                element.classList.remove("bg-info")
                const cardARetirer = document.getElementsByClassName(element.id)
                cardARetirer[0].remove()
                idElemASupprimer = element.id
                speInput.value = speInput.value.replace(idElemASupprimer, '').trim()
            } else {
                element.classList.add("bg-info")
                createNewCard(element.id)
                speInput.value += " " + element.id
            }
            console.log(speInput.value)
    }

    function detectClickOutside(element, callback) {
        document.addEventListener('click', function(event) {
            const isClickInside = element.contains(event.target)
            const isClickOnChoix = choix.contains(event.target)

            if (!isClickInside && nbClick % 2 !== 0 && !isClickOnChoix) {
                callback()
            }
        });
    }

    function createNewCard(idElement) {
        const listeSpe = document.querySelector("#listeSpe")
        var nouvelEnfant = document.createElement("div")
        nouvelEnfant.classList.add(idElement, "bg-info", "ps-2", "pe-2")
        nouvelEnfant.style.borderRadius = "5px"
        nouvelEnfant.style.cursor = "auto"
        nouvelEnfant.textContent = idElement + " "

        var spanEnfant = document.createElement("span")
        spanEnfant.textContent = "x"
        spanEnfant.style.fontSize = "125%"
        spanEnfant.style.fontWeight = "bold"
        spanEnfant.style.cursor = "pointer"

        const handleClick = () => {
            const speARetirer = document.getElementById(idElement)
            addRemoveToInput(speARetirer)
            spanEnfant.removeEventListener("click", handleClick)
        };

        spanEnfant.addEventListener("click", handleClick)
        nouvelEnfant.appendChild(spanEnfant)
        listeSpe.appendChild(nouvelEnfant)
    }

    function getCard(){

    }


    function getSpeDuPra(){
        tabSpe.forEach(elem => createNewCard(elem.SPE_CODE))
    }

    // Appels aux fonctions
    getSpeDuPra()
    changeBackgroundColorOnHover()
    containerMultiSelect.addEventListener("click", cptNbClick)
    detectClickOutside(containerMultiSelect, cptNbClick)
    
    

</script>