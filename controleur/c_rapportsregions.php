<?php
if (!isset($_REQUEST['action']) || empty($_REQUEST['action'])) {
	$action = "formulairedate";
} else {
	$action = $_REQUEST['action'];
}
switch ($action) {
	case 'formulairedate': {
			$col = getAllNomCollaborateurs();
			// $vis = $collaborateur['COL_MATRICULE'];
			// $datedebut = date('Y-m-d',strtotime($_POST['dudate']));
			// $datefin = date('Y-m-d',strtotime($_POST['audate']));
			// $report = getReportDate($datedebut, $datefin);

			// if($_SERVER["REQUEST_METHOD"] == "POST"){
				
				// Si la date 'du' est postérieure à la date 'au'
			// 	if ($dateVisite > $dateSaisie) {
			// 		echo "La date de visite ne peut pas être postérieure à la date de saisie.";
			// 	} else {
			// 		
			// 	}
				// Si un visiteur est sélectionné
				// if(isset($vis)){

				// } else{
					
				// }
			// }


			include("vues/v_formulaireFourchetteDate.php");
			break;
		}
	
		case 'afficherrapport': {
			
			$date = getReportDate();
				
				include("vues/v_afficherRapportVisiteRegion.php");
			
			break;
		}

		case 'afficherdetailrapport': {
							
				$infoRapport = getAllInformationRapportVisite(3);
				
				include("vues/v_afficherRapportVisiteRegionDetail.php");
			break;
		}

	default: {

			header('Location: index.php?uc=rapportsregions&action=rapportsregions');
			break;
		}
}
?>