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
		if($_SERVER["REQUEST_METHOD"] == "POST"){

			if(($_POST['autremotifcontent'] === '')){
				$_POST["autremotifcontent"] = NULL;
			}

			//Si il n'y a pas de remplacant
			if($_POST['remplacant'] === ''){
				$_POST['remplacant'] = NULL;
			}
			
				// Si le med 1, 2 et 3 n'est pas choisit
			if($_POST['med1'] === ''){
				$_POST['med1'] = NULL;
			}
			if($_POST['med2'] === ''){
				$_POST['med2'] = NULL;
			}
			if($_POST['med3'] === ''){
				$_POST['med3'] = NULL;
			}

			// Si la date 'du' est postérieure à la date 'au'
			if ($_POST['datedevisite'] > $_POST['datesaisierapport']) {
				echo "La date de visite ne peut pas être postérieure à la date de saisie.";
			} 

			// Si la quantité de l'échantillon est égal à 0 = problème
			if($_POST['quantite']=0){
				$_POST['quantite'] = NULL;
			}

			$insert = insertion($numrapport);
			$insert2 = insertion2($numrapport);
			$insert3 = insertion3();
		}
		// else {
		// 	include("vues/v_problemeSurvenu.php");²
		// }

		
				
		
}
		include("vues/v_formulairesaisirrapportvisite.php");
		break;
		
	

	default: {

		header('Location: index.php?uc=rapportvisite&action=formulairesaisirrapportvisite');
		break;
	}
}
?>