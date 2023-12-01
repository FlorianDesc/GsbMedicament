<?php

include_once 'bd.inc.php';

    function getAllNomPraticiens(){

        try{
            $monPdo = connexionPDO();
            $req = 'SELECT  PRA_NUM, PRA_NOM, PRA_PRENOM FROM praticien';
            $res = $monPdo->query($req);
            $result = $res->fetchAll();
            return $result;
        } 

        catch (PDOException $e){
            print "Erreur !: " . $e->getMessage();
            die();
        }

    }

    function getAllInformationsPraticien($praNum){
        try{
            $monPdo = connexionPDO();
            $req = 'SELECT p.*, t.TYP_LIBELLE, t.TYP_LIEU FROM praticien p INNER JOIN type_praticien t ON p.TYP_CODE=t.TYP_CODE WHERE PRA_NUM= "' . $praNum . '"';
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