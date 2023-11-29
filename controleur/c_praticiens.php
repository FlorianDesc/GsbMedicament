<?php
if (!isset($_REQUEST['action']) || empty($_REQUEST['action'])) {
	$action = "formulairepraticien";
} else {
	$action = $_REQUEST['action'];
}
switch ($action) {
	case 'formulairepraticien': {

		$result = getAllNomPraticiens();
		include("vues/v_FormulairePraticiens.php");
		break;
	}

	case 'afficherpraticien': {
		if (isset($_REQUEST['praticien']) && getAllInformationsPraticien($_REQUEST['praticien'])) {
			$pra = $_REQUEST['praticien'];
			$carac = getAllInformationsPraticien($pra);
			if (empty($carac[7])) {
				$carac[7] = 'Non défini(e)';
			}
			include("vues/v_afficherPraticiens.php");
		} else {
			$_SESSION['erreur'] = true;
			header("Location: index.php?uc=praticiens&action=formulairepraticien");
		}
		break;		
	}

	default: {

		header('Location: index.php?uc=praticiens&action=formulairepraticien');
		break;
	}
}
?>