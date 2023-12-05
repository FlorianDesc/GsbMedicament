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
        include ("vues/v_gererMedecinFormulaire.php");
        break;
	}

	case 'sauvegardeInfoPraticien': {

		$insertion = insertNewInfoPraticien($_GET['idpra'], $_POST['nom'], $_POST['prenom'], $_POST['adresse'], $_POST['cp'], $_POST['ville'], $_POST['cn'], $_POST['cc'], $_POST['tp']);
		$_SESSION["msgErr"]=$insertion;
		header('Location: index.php?uc=gestion&action=gererMedecinListe');
		break;
	}

	default: {

		header('Location: index.php?uc=gestion&action=gererMedecinListe');
		break;
	}
}
?>