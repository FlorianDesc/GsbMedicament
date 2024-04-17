<section class="bg-light">
    <div class="container">
      
        <div class="row align-items-center justify-content-center">
            <div class="test col-12 col-sm-8 col-lg-6 col-xl-5 col-xxl-4 py-lg-5">
                
            </div>
            <div class="test col-9 col-sm-30 col-lg-30 col-x1-5 col-xx2-4 py-lg-30 py-30">
                <?php if ($_SESSION['erreur']) {
                    echo '<p class="alert alert-danger text-center w-100">Un problème est survenu lors de la selection du collaborateur</p>';
                    $_SESSION['erreur'] = false;
                } ?>
                <!-- <form action="index.php?uc=rapportsregions&action=afficherdetailrapport" method="post" class="formulaire-recherche col-12 m-0"> -->

                    <!-- <label class="titre-formulaire" for="listeprat">Rapports du collaborateur <?php echo $_POST['collaborateur']?></label> -->
                    
                   
                <table>
                    <thead>
                        <th>Numéro </th>
                        <th> Date </th>
                        <th> Bilan</th> 
                    </thead>
                    <tbody>
                        <?php
                        foreach (getReportDate(checkMatricule($_SESSION['matricule'])) as $key){
                            echo "<form action='index.php?uc=rapportsregions&action=afficherdetailrapport' method='post' class='formulaire-recherche col-12 m-0'> <tr><td>'.$key[1].'</td><td>'.$key[3].'</td><td>'.$key[4].'</td> <td><input class='btn btn-info text-light valider' type='submit' value='Détail rapport' onclick='localhost/nadot/GSB-MEDICAMENT/index.php?uc=rapportsregions&action=afficherdetailrapport&numRapport=$key[1]'></td></tr>"; 
                            // $_SESSION['numRapport']= $key[1];
                        }
                        ?>
                    </tbody>
                </table>
                    
                    
                </form>
                <br>
            </div>
        </div>
    </div>
</section>