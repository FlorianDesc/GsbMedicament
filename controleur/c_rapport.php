<?php
if (!isset($_REQUEST['action']) || empty($_REQUEST['action'])) {
	$action = "choisirRapport";
} else {
	$action = $_REQUEST['action'];
}
switch ($action) {

    case 'choisirRapport': {

		$lesPraticiens = getPraticienMesRapport($_SESSION['matricule']);
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
		var_dump($infoRapport);
		include("vues/v_consultationMonRapport.php");
		break;
	}

	default: {

		header('Location: index.php?uc=rapport&action=choisirRapport');
		break;
	}
}
?>