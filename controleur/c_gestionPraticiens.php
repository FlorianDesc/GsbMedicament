<?php
if (!isset($_REQUEST['action']) || empty($_REQUEST['action'])) {
	$action = "gererMedecin";
} else {
	$action = $_REQUEST['action'];
}
switch ($action) {
    case 'gererMedecinListe': {

		$cp = getDepartementCollab($_SESSION['matricule']);
		$dep = cpToNb($cp['COL_CP']);
		$reg = getRegionCollab($dep);
		$tableauDep = getDepPraticiens($reg['REG_CODE']);
		$depDansReg = tableauDepartement($tableauDep);

		$praticiens = getAllInfoPraticienGestion();
		$praDansReg = medecinDansReg($depDansReg, $praticiens);

        include ("vues/v_gererMedecinListe.php");
        break;
    }

	case 'gererMedecinFormulaire': {

		$infoPratSelect = getInfoPraticien($_POST['praticien']);
		$typePra = getAllTypePraticien();
		$specialites = getAllSpecialite();
		$speDuPra = getSpePraticien($_POST['praticien']);
        include ("vues/v_gererMedecinFormulaire.php");
        break;
	}

	case 'sauvegardeInfoPraticien': {

		$_SESSION["msgErr"] = insertNewInfoPraticien($_GET['idpra'], $_POST['nom'], $_POST['prenom'], $_POST['adresse'], $_POST['cp'], $_POST['ville'], $_POST['cn'], $_POST['cc'], $_POST['tp']);
		$specialites = explode(" ", $_POST['spe']);
		if($specialites[0] == ''){
			unset($specialites[0]);
		}
		foreach($specialites as $spe){
			insertSpe($_GET['idpra'], $spe);
		}
		header('Location: index.php?uc=gestion&action=gererMedecinListe');
		break;
	}

	case 'creerNouveauMedecin': {

		$spes = getAllSpecialite();
		$typePra = getAllTypePraticien();
		include("vues/v_formulaireNouveauMedecin.php");
		break;
	}

	case 'creationMedecin': {
		$insertion = insertNewMedecin($_POST['nom'], $_POST['prenom'], $_POST['adresse'], $_POST['cp'], $_POST['ville'], $_POST['cn'], $_POST['cc'], $_POST['tc']);
		header("Location: index.php?uc=accueil");
		break;
	}

	default: {

		header('Location: index.php?uc=gestion&action=gererMedecinListe');
		break;
	}
}
?>