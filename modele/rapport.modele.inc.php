<?php

include_once 'bd.inc.php';

    function getPraticienMesRapport($idCollab){

        try{
            $monPdo = connexionPDO();
            $req = 'SELECT praticien.PRA_NUM, praticien.PRA_NOM, praticien.PRA_PRENOM
                    FROM praticien
                    WHERE praticien.PRA_NUM IN (
                        SELECT PRA_NUM
                        FROM rapport_visite WHERE COL_MATRICULE="' . $idCollab . '")';
            $res = $monPdo->query($req);
            $result = $res->fetchAll();
            return $result;
        } 

        catch (PDOException $e){
            print "Erreur !: " . $e->getMessage();
            die();
        }
    }

    function getMesRapport($idCollab, $dateD, $dateF, $pra){

        try{
            $monPdo = connexionPDO();
            if($pra!=""){
                $req = 'SELECT * FROM rapport_visite
                        WHERE (DATE(RAP_DATE) BETWEEN "' . $dateD . '" AND "' . $dateF . '") AND COL_MATRICULE="' . $idCollab .'" AND PRA_NUM="' . $pra . '"';
            }
            else{
                $req = 'SELECT * FROM rapport_visite
                        WHERE (DATE(RAP_DATE) BETWEEN "' . $dateD . '" AND "' . $dateF . '") AND COL_MATRICULE="' . $idCollab .'"';
            }
            $res = $monPdo->query($req);
            $result = $res->fetchAll();
            return $result;
        } 

        catch (PDOException $e){
            print "Erreur !: " . $e->getMessage();
            die();
        }
    }

    function getInfoRapport($idRapport){

        try{
            $monPdo = connexionPDO();
            $req = 'SELECT c.COL_NOM, c.COL_PRENOM, r.RAP_NUM, p.PRA_NOM, p.PRA_PRENOM, DATE(r.RAP_DATE) as RAP_DATE, r.RAP_BILAN FROM rapport_visite r INNER JOIN collaborateur c ON r.COL_MATRICULE=c.COL_MATRICULE INNER JOIN praticien p ON r.PRA_NUM=p.PRA_NUM WHERE RAP_NUM=' . $idRapport ;
            $res = $monPdo->query($req);
            $result = $res->fetch();
            return $result;
        } 

        catch (PDOException $e){
            print "Erreur !: " . $e->getMessage();
            die();
        }
    }



    

    function getDepartement(){

        try{
            $monPdo = connexionPDO();
            $req = 'SELECT COL_CP from collaborateur';
            $res = $monPdo->query($req);
            $result = $res->fetch();
            return $result;
        } 

        catch (PDOException $e){
            print "Erreur !: " . $e->getMessage();
            die();
        }
    }

    function cpToTwoNb($cp){
        $nb = $cp;
        if(strlen($cp)>4){
            $nb = substr($cp,0,2);
        }
        else{
            $nb = substr($cp,0,1);
        }
        return $nb;
    }

    function getRegion($dep){
        try{
            $monPdo = connexionPDO();
            $req = 'SELECT REG_CODE FROM departement WHERE NoDEPT= "' . $dep . '"';
            $res = $monPdo->query($req);
            $result = $res->fetch();
            return $result;
        } 

        catch (PDOException $e){
            print "Erreur !: " . $e->getMessage();
            die();
        }
    }

    function getCollabDansReg($reg){

        try{
            $monPdo = connexionPDO();
            $req = 'SELECT NoDEPT FROM departement WHERE REG_CODE = "' . $reg . '"';
            $res = $monPdo->query($req);
            $result = $res->fetchAll();
            return $result;
        } 

        catch (PDOException $e){
            print "Erreur !: " . $e->getMessage();
            die();
        }
    }

    function getAllCollabRapport($idCollab){

        try{
            $monPdo = connexionPDO();
            $req = 'SELECT DISTINCT(COL_MATRICULE) FROM rapport_visite WHERE COL_MATRICULE != "' . $idCollab . '"';
            $res = $monPdo->query($req);
            $result = $res->fetchAll();
            return $result;
        } 

        catch (PDOException $e){
            print "Erreur !: " . $e->getMessage();
            die();
        }
    }

    function tableauDeDepartement($deps){
        foreach($deps as $dep){
            $tableauDeps[]=$dep['NoDEPT'];
        }
        return $tableauDeps;
    }

    function tableauDeCollab($collabs){
        foreach($collabs as $collab){
            $tableauCollabs[]=$collab['COL_MATRICULE'];
        }
        return $tableauCollabs;
    }

    function getCpCollab($idCollab){
        try{
            $monPdo = connexionPDO();
            $req = 'SELECT COL_CP FROM collaborateur WHERE COL_MATRICULE="' . $idCollab . '"';
            $res = $monPdo->query($req);
            $result = $res->fetch();
            return $result;
        } 

        catch (PDOException $e){
            print "Erreur !: " . $e->getMessage();
            die();
        }
    }

    function getTableauCpAllColab($collabs, $deps){
        $tab = [];
        foreach($collabs as $collab){
            if(in_array(cpToTwoNb(getCpCollab($collab)['COL_CP']), $deps)){
                $tab[]=$collab;
            }
        }
        return $tab;
    }

    function getRapportCollab($idCollab){
        try{
            $monPdo = connexionPDO();
            $req = 'SELECT DISTINCT(RAP_NUM) FROM rapport_visite WHERE COL_MATRICULE="' . $idCollab . '" AND (ID_ETAT="V" OR ID_ETAT="NC")'  ;
            $res = $monPdo->query($req);
            $result = $res->fetch();
            return $result;
        } 

        catch (PDOException $e){
            print "Erreur !: " . $e->getMessage();
            die();
        }
    }


    function getRapportMemeRegion($collabs){
        $tab = [];
        foreach($collabs as $collab){
            array_push($tab, getRapportCollab($collab));
        }
        return $tab;
    }



?>