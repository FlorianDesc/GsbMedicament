<?php
    require_once ('modele/medicament.modele.inc.php');
   
    require_once ('modele/connexion.modele.inc.php');

    require_once ('modele/praticien.modele.inc.php');

    require_once('modele/gestionPraticiens.modele.inc.php');

    require_once('modele/rapportVisite.modele.inc.php');

    require_once('modele/rapportVisiteRegion.modele.inc.php');

    require_once('modele/rapport.modele.inc.php');


    if(!isset($_REQUEST['uc']) || empty($_REQUEST['uc']))
        $uc = 'accueil';
    else{
        $uc = $_REQUEST['uc'];
    }
?>    
<?php
    if(empty($_SESSION['login'])){
        include("vues/v_headerDeconnexion.php");
    }else{
        include("vues/v_header.php");
    }    
    switch($uc)
    {
        case 'accueil':
        {   
            include("vues/v_accueil.php");
            break;
        }

        case 'praticiens' :
        {
            if(!empty($_SESSION['login'])){
                include("controleur/c_praticiens.php");
            }else{
                include("vues/v_accesInterdit.php");
            }
            break;
        }
        
        case 'medicaments' :
        {   
            if(!empty($_SESSION['login'])){
                include("controleur/c_medicaments.php");
            }else{
                include("vues/v_accesInterdit.php");
            }
            break;
        }

        case 'rapportsregions' :
            {   
                if(!empty($_SESSION['login'])){
                    include("controleur/c_rapportsregions.php");
                }else{
                    include("vues/v_accesInterdit.php");
                }
                break;
            }

        case 'rapportvisite' :
            {   
                if(!empty($_SESSION['login'])){
                    include("controleur/c_saisirrapportvisite.php");
                }else{
                    include("vues/v_accesInterdit.php");
                }
                break;
            }
    
        case 'connexion' :
        {   
            include("controleur/c_connexion.php");
            break; 
        }

        case 'gestion' : {
            if(!empty($_SESSION['login']) && $_SESSION['habilitation']>=2){
                include("controleur/c_gestionPraticiens.php");
            }
            else{
                include("vues/v_accesInterdit.php");
            }
            break;
        }

        case 'rapport': {

            include("controleur/c_rapport.php");
            break;
        }

        default :
        {   
            include("vues/v_accueil.php");
            break;
        }
    }

include("vues/v_footer.php") ;?>
</body>
</html>