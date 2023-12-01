<?php

include_once 'bd.inc.php';

function getNbrRapportVisite(){
    try{
        $monPdo = connexionPDO();
        $req = 'SELECT COUNT(`COL_MATRICULE`)+1 FROM `rapport_visite`';
        $res = $monPdo->query($req);
        $result = $res->fetchAll();
        return $result;
    } 

    catch (PDOException $e){
        print "Erreur !: " . $e->getMessage();
        die();
    }

}

function getMotifVisite(){
    try{
        $monPdo = connexionPDO();
        $req = 'SELECT `MOT_DESI` FROM `motif_visite`';
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