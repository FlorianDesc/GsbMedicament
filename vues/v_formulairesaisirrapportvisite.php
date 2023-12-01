<section class="bg-light">
    <div class="container">
        <div class="structure-hero pt-lg-5 pt-4">
            <h1 class="titre text-center">Saisir un rapport de visite</h1>
            <p class="text text-center">
                Formulaire permettant de saisir un rapport de visite
            </p>
        </div>
        <div class="row align-items-center justify-content-center">
            <div class="test col-12 col-sm-8 col-lg-6 col-xl-5 col-xxl-4 py-lg-5">
            <img class="img-fluid size-img-page" src="assets/img/rapport.jpg">
            </div>

            <div class="test col-12 col-sm-8 col-lg-6 col-xl-5 col-xxl-8 py-lg-4 py-2">
                <?php if ($_SESSION['erreur']) {
                    echo '<p class="alert alert-danger text-center w-100">Un problème est survenu lors de l\'accès à un rapport de visite</p>';
                    $_SESSION['erreur'] = false;
                } ?>
                <form action="index.php?uc=rapportvisite&action=formulairesaisirrapportvisite" method="post" class="formulaire-recherche col-12 m-0">
                    <label class="titre-formulaire" for="listemedoc">Saisie du rapport de visite n° : <?php getNbrRapportVisite() ?></label>

                    <table>
                        <tr> 
                            <td><p>Champs obligatoires *</p></td>
                        </tr>
                        <tr>
                            <td>Numéro du rapport de visite :<?php getNbrRapportVisite() ?></td>
                        </tr> 
                        <tr>
                            <td>Matricule du collaborateur : <?php echo $_SESSION['matricule'] ?></td>
                        </tr> 
                        <tr>
                            <td>Date de visite : <input type="text" name="datedevisite" id="datedevisite" placeholder="jj/mm/aaaa" size="14" maxlength="20"></td>
                        </tr>  
                        <tr>
                            <td>Date de saisie du rapport de visite : <input type="text" name="datesaisierapport" id="datesaisierapport" placeholder="jj/mm/aaaa" size="14" maxlength="20"></td>
                        </tr>
                                          
                        <tr>
                            <td>
                                <select required name="praticien" class="form-select mt-3">
                                <option value class="text-center">- Praticien concerné -</option>
                                <?php
                                    foreach ($pra as $praticien) {
                                        echo '<option value="' . $praticien['PRA_NUM'] . '" class="form-control">' . $praticien['PRA_NOM'] . ' ' . $praticien['PRA_PRENOM'] . '</option>';
                                    }
                                ?>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <select required name="motif" class="form-select mt-3">
                                <option value class="text-center">- Motif concerné -</option>
                                <?php
                                    foreach ($mot as $motif) {
                                        echo '<option>' . $motif['MOT_DESI'] .  '</option>';
                                    }
                                ?>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>Bilan du rapport de visite : <input type="text" name="bilanrapportdevisite" id="bilanrapportdevisite"  size="40" maxlength="400"></td>
                        </tr>
                        <tr>
                            <td>
                            <fieldset>
                                <div>
                                    <label for="scales">Saisie définitive</label>
                                    <input type="checkbox" id="saisiedef" name="saisiedef" />
                                </div>
                            </fieldset>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <select required name="motif" class="form-select mt-3">
                                <option value class="text-center">- Médicament n°1 présenté -</option>
                                <?php
                                    foreach ($med as $medicament) {
                                        echo '<option value="' . $medicament['MED_DEPOTLEGAL'] . '" class="form-control">' . $medicament['MED_DEPOTLEGAL'] . ' - ' . $medicament['MED_NOMCOMMERCIAL'] . '</option>';
                                    }
                                ?>
                                </select>
                            </td>
                        </tr>
                        
                    </table>
                    
                    <input class="btn btn-info text-light valider" type="submit" value="Valider">
                </form>
            </div>
            
        </div>
    </div>
</section>