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

?>