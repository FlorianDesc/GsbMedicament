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

function getAllInformationRapportVisite($numrapport){

    try{
        $monPdo = connexionPDO();
        $req = 'SELECT * 
        FROM `rapport_visite` 
        WHERE RAP_NUM = "'.$numrapport.'"';
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

function getReportDate(){
    try{
              $monPdo = connexionPDO();
              $dateDeb=$_POST['dudate'];
              $dateFin=$_POST['audate'];
              $req = 'SELECT * FROM rapport_visite WHERE RAP_DATE between "'.$dateDeb.'" and "'.$dateFin.'" ORDER BY `RAP_DATE`';
              $res = $monPdo->query($req);
              $result = $res->fetchAll();
              return $result;
          } 

          catch (PDOException $e){
              print "Erreur !: " . $e->getMessage();
              die();
          }

      }

function getAllNomCollaborateurs(){

    try{
        $monPdo = connexionPDO();
        $req = 'SELECT  COL_MATRICULE, COL_NOM, COL_PRENOM FROM collaborateur';
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
