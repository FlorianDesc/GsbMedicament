<?php
if (!isset($_REQUEST['action']) || empty($_REQUEST['action'])) {
	$action = "choisirRapport";
} else {
	$action = $_REQUEST['action'];
}
switch ($action) {

    case 'choisirRapport': {
		$lesPraticiens = getPraticienMesRapport($_SESSION['matricule']);
		include("vues/v_message.php");
		include("vues/v_mesRapports.php");
        break;
    }

	case 'voirRapport': {

		$mesRapports = getMesRapport($_SESSION['matricule'], $_POST['dateD'], $_POST['dateF'], $_POST['praticien']);
		include("vues/v_listeMesRapports.php");
		break;
	}

	case 'consulterRapport': {

		$infoRapport = getInfoRapport($_GET['id']);
		include("vues/v_consultationMonRapport.php");
		break;
	}

	case 'consulterNouveauxRapportsRegion': {
		
		$infoRapport = getInfoRapport($_GET['id']);
		include("vues/v_consultationNouveauxRapportsRegion.php");
		break;
	}

	case 'voirListeRapportRegion': {

		$cp = getDepartement()['COL_CP'];
		$nb = cpToTwoNb($cp);
		$reg = getRegion($nb);
		$deps = getCollabDansReg($reg['REG_CODE']);
		$lesDeps = tableauDeDepartement($deps);

		$allCollab = getAllCollabRapport($_SESSION['matricule']);
		$tabCollab = tableauDeCollab($allCollab);
		$collabsMemeReg = getTableauCpAllColab($tabCollab, $lesDeps);
		$mesRapports = getRapportMemeRegion($collabsMemeReg);
		include("vues/v_listeMesNouveauxRapports.php");
		break;
	}

	default: {

		header('Location: index.php?uc=rapport&action=choisirRapport');
		break;
	}
}
?>