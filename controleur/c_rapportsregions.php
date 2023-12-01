<?php
if (!isset($_REQUEST['action']) || empty($_REQUEST['action'])) {
	$action = "formulairedate";//
} else {
	$action = $_REQUEST['action'];
}
switch ($action) {
	case 'formulairedate': {

			$pra = getAllNomPraticiens();
			include("vues/v_formulaireFourchetteDate.php");
			break;
		}
	
		case 'afficherrapport': {
			if (isset($_REQUEST['praticien']) && getAllInformationsPraticien($_REQUEST['praticien'])) {
				$pra = $_REQUEST['praticien'];
				$carac = getAllInformationsPraticien($pra);
				if (empty($carac[7])) {
					$carac[7] = 'Non défini(e)';
				}
				include("vues/v_afficherPraticiens.php");
			} else {
				$_SESSION['erreur'] = true;
				header("Location: index.php?uc=rapportregion&action=formulairedate");
			}
			break;		
		}

	default: {

			header('Location: index.php?uc=rapportsregions&action=formulairedate');
			break;
		}
}
?>