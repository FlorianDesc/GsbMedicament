<?php

include_once 'bd.inc.php';

function getMoisDate($matricule){
    try{
        $monPdo = connexionPDO();
        $req = 'SELECT MONTH(`RAP_DATE`) FROM `rapport_visite` WHERE COL_MATRICULE = "'.$matricule.'"';
        $res = $monPdo->query($req);
        $result = $res->fetchAll();
        return $result;
    } 

    catch (PDOException $e){
        print "Erreur !: " . $e->getMessage();
        die();
    }

}

function getAllInformationRapportVisite($matricule){

    try{
        $monPdo = connexionPDO();
        $req = 'SELECT rapport_visite.RAP_NUM, rapport_visite.COL_MATRICULE, rapport_visite.PRA_NUM, praticien.PRA_NOM ,rapport_visite.RAP_DATE, rapport_visite.MED_DEPOTLEGAL_Presente1, rapport_visite.MED_DEPOTLEGAL_Presente2
        FROM `rapport_visite` 
        INNER JOIN praticien ON praticien.PRA_NUM = rapport_visite.PRA_NUM
        WHERE COL_MATRICULE = "'.$matricule.'"';
        $res = $monPdo->query($req);
        $result = $res->fetch();    
        return $result;
    } 

    catch (PDOException $e){
        print "Erreur !: " . $e->getMessage();
        die();
    }
}

function getRapportVisiteMotif($matricule){

try{
    $monPdo = connexionPDO();
    $req = 'SELECT motif_visite.MOT_DESI
    FROM `rapport_visite` 
    INNER JOIN motif_visite ON motif_visite.MOT_CODE = rapport_visite.MOT_CODE
    WHERE `COL_MATRICULE` = "'.$matricule.'"';
    $res = $monPdo->query($req);
    $result = $res->fetch();    
    return $result;
} 

catch (PDOException $e){
    print "Erreur !: " . $e->getMessage();
    die();
}
}

function getIntervalleDateRapport($du,$au){
    try{
        $monPdo = connexionPDO();
        $req = 'SELECT `COL_MATRICULE`,`RAP_NUM`,`PRA_NUM`,`RAP_DATE`,`RAP_BILAN`,`RAP_MOTIF_AUTRE`,`DATE_VISITE` FROM `rapport_visite` WHERE `RAP_DATE` BETWEEN "'.$du.'" AND "'.$au.'"';
        $res = $monPdo->query($req);
        $result = $res->fetchAll();
        return $result;
    } 

    catch (PDOException $e){
        print "Erreur !: " . $e->getMessage();
        die();
    }

}

?>
