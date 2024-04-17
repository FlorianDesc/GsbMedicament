<?php

include_once 'bd.inc.php';

function getNbrRapportVisite(){
    try{
        $monPdo = connexionPDO();
        $req = 'SELECT MAX(`RAP_NUM`)+1 FROM `rapport_visite`';
        $res = $monPdo->query($req);
        $result = $res->fetchAll();
        return $result[0][0];
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


function insertion($numrapport){
    $monPdo = connexionPDO();
    $post=$_POST['motif'];
        $motif = "SELECT MOT_CODE FROM motif_visite WHERE MOT_DESI= '$post'";
        $res = $monPdo->query($motif);
        $result = $res->fetchAll();

        if(isset($_POST['saisiedef'])){
            $id_etat=1;
        }

        if(!isset($_POST['saisiedef'])){ 
            $id_etat=0;
        }


        $req = $monPdo->prepare('INSERT INTO rapport_visite (COL_MATRICULE, RAP_NUM, PRA_NUM, RAP_DATE, RAP_BILAN, RAP_MOTIF_AUTRE, DATE_VISITE, ID_ETAT, PRA_NUM_REMPLACANT, MOT_CODE, MED_DEPOTLEGAL_Presente1, MED_DEPOTLEGAL_Presente2, MED_DEPOTLEGAL_Presente3) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?)');
        $req->execute(array($_SESSION['matricule'],$numrapport,$_POST['praticien'],$_POST['datesaisierapport'],$_POST['bilanrapportdevisite'],$_POST['autremotifcontent'],$_POST['datedevisite'],$id_etat,$_POST['remplacant'],$result[0][0],$_POST['med1'],$_POST['med2'],$_POST['med3']));

}

function insertion2($numrapport){
    $monPdo = connexionPDO();
    $post=$_POST['motif'];
        $motif = "SELECT MOT_CODE FROM motif_visite WHERE MOT_DESI= '$post'";
        $res = $monPdo->query($motif);
        $result = $res->fetchAll();

        if(($_POST['quantite']>0)){
            $req = $monPdo->prepare('INSERT INTO offrir (COL_MATRICULE, RAP_NUM, MED_DEPOTLEGAL,OFF_QTE) VALUES (?,?,?,?)');
            $req->execute(array($_SESSION['matricule'],$numrapport,$_POST['echantillon'],$_POST['quantite']));
        }  
}

function insertion3(){
    $monPdo = connexionPDO();
        if(isset($_POST['coefconfiance'])){
            $req = $monPdo->prepare('UPDATE `praticien` SET `PRA_COEFCONFIANCE` = (?) WHERE `PRA_NUM` = (?)');
            $req->execute(array($_POST['coefconfiance'],$_POST['praticien']));
        }  
}