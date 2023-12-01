<?php
if (!isset($_REQUEST['action']) || empty($_REQUEST['action'])) {
	$action = "formulairesaisirrapportvisite";
} else {
	$action = $_REQUEST['action'];
}
switch ($action) {
	case 'formulairesaisirrapportvisite': {

		$mot = getMotifVisite();
		$pra = getAllNomPraticiens();
		$med = getAllNomMedicament();
		$numrapport = getNbrRapportVisite();
		// var_dump(getNbrRapportVisite());
		include("vues/v_formulairesaisirrapportvisite.php");
		break;
		
	}

	default: {

		header('Location: index.php?uc=rapportvisite&action=formulairesaisirrapportvisite');
		break;
	}
}
?>