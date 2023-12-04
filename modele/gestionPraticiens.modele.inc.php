<?php

include_once 'bd.inc.php';

    function getAllNomPraticiensGestion(){

        try{
            $monPdo = connexionPDO();
            $req = 'SELECT PRA_NUM, PRA_NOM, PRA_PRENOM FROM praticien';
            $res = $monPdo->query($req);
            $result = $res->fetchAll();
            return $result;
        } 

        catch (PDOException $e){
            print "Erreur !: " . $e->getMessage();
            die();
        }
    }

    function getInfoPraticien($idPra){

        try{
            $monPdo = connexionPDO();
            $req = 'SELECT * FROM praticien WHERE PRA_NUM = "' . $idPra . '"';
            $res = $monPdo->query($req);
            $result = $res->fetch();
            return $result;
        } 

        catch (PDOException $e){
            print "Erreur !: " . $e->getMessage();
            die();
        }
    }

    function getAllInfoPraticienGestion(){

        try{
            $monPdo = connexionPDO();
            $req = 'SELECT * FROM praticien';
            $res = $monPdo->query($req);
            $result = $res->fetchAll();
            return $result;
        } 

        catch (PDOException $e){
            print "Erreur !: " . $e->getMessage();
            die();
        }
    }

    function getDepartementCollab($matricule){

        try{
            $monPdo = connexionPDO();
            $req = 'SELECT COL_CP FROM Collaborateur WHERE COL_MATRICULE = "' . $matricule . '"';
            $res = $monPdo->query($req);
            $result = $res->fetch();
            return $result;
        } 

        catch (PDOException $e){
            print "Erreur !: " . $e->getMessage();
            die();
        }
    }

    function getRegionCollab($dep){
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

    function cpToNb($cp){
        $nb = $cp;
        if(strlen($cp)>4){
            $nb = substr($cp,0,2);
        }
        else{
            $nb = substr($cp,0,1);
        }
        return $nb;
    }


    function tableauDepartement($deps){
        foreach($deps as $dep){
            $tableauDeps[]=$dep['NoDEPT'];
        }
        return $tableauDeps;
    }
    
    function medecinDansReg($lesDep, $praticiens){
        $praDansReg = [];
        foreach($praticiens as $praticien){
            if($praticien['PRA_CP']>4){
                if(array_search(substr($praticien['PRA_CP'],0,2),$lesDep)){
                    $praDansReg[] = $praticien;
                }
            }
            else{ 
                if(array_search(substr($praticien['PRA_CP'],0,1),$lesDep)){
                    $praDansReg[] = $praticien;
                } 
            }           
        }
        return $praDansReg;
    }


    function getDepPraticiens($reg){

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

    function insertNewInfoPraticien($idpra, $nom, $prenom, $adresse, $cp, $ville, $cn, $cc, $tp){

        try{
            $monPdo = connexionPDO();
            $req = 'UPDATE praticien SET PRA_NOM=:nom, PRA_PRENOM=:prenom, PRA_ADRESSE=:adresse, PRA_CP=:cp, PRA_VILLE=:ville, PRA_COEFNOTORIETE=:cn, PRA_COEFCONFIANCE=:cc, TYP_CODE=:tp WHERE PRA_NUM="' . $idpra . '"';

            $res = $monPdo->prepare($req);
            $param = array(':nom'=>$nom, ':prenom'=>$prenom, ':adresse'=>$adresse, ':cp'=>$cp, ':ville'=>$ville, ':cn'=>$cn, ':cc'=>$cc, ':tp'=>$tp,);

            
            $result = $res->execute($param);
            return $result;
        } 

        catch (PDOException $e){
            print "Erreur !: " . $e->getMessage();
            die();
        }
    }

    function getAllTypePraticien(){

        try{
            $monPdo = connexionPDO();
            $req = 'SELECT TYP_CODE FROM type_praticien';
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