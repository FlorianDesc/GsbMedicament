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



        include ("vues/v_gererMedecinFormulaire.php");
        break;
	}

	default: {

		header('Location: index.php?uc=gestion&action=gererMedecinListe');
		break;
	}
}
?>