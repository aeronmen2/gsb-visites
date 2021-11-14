<?php

include_once('connexionDAO.php');
include_once('medecin.php');

class medecinDAO{
    
    public static function getMedecinDAO(){
        $connect = connexionDAO::connexionPDO();
        $request = $connect->prepare("select * from medecin");
        $request->execute();
        $ligne=$request->fetchall();
        foreach($ligne as $key => $value){
            $collectionmedecin = new medecin($value['id'],$value['nom'],$value['prenom'],$value['adresse'],$value['tel'],$value['specialitecomplementaire'],$value['departement']);
            $res[]=$collectionmedecin;
        }
         return $res;
    }

    public static function getMedecinAscDAO(){
        $connect = connexionDAO::connexionPDO();
        $request = $connect->prepare("select * from medecin order by nom ASC");
        $request->execute();
        $ligne=$request->fetchall();
        foreach($ligne as $key => $value){
            $collectionmedecin = new medecin($value['id'],$value['nom'],$value['prenom'],$value['adresse'],$value['tel'],$value['specialitecomplementaire'],$value['departement']);
            $res[]=$collectionmedecin;
        }
         return $res;
    }

    public static function get5MedecinDAO(){
        $connect = connexionDAO::connexionPDO();
        $request = $connect->prepare("select * from medecin limit 5");
        $request->execute();
        $ligne=$request->fetchall();
        foreach($ligne as $key => $value){
            $collectionmedecin = new medecin($value['id'],$value['nom'],$value['prenom'],$value['adresse'],$value['tel'],$value['specialitecomplementaire'],$value['departement']);
            $res[]=$collectionmedecin;
        }
         return $res;
    }


    public static function countMedecinDAO(){
        $connect = connexionDAO::connexionPDO();
        $count = $connect->prepare("select count(id) as nb from medecin");
        $count->setFetchMode(PDO::FETCH_ASSOC);
        $count->execute();
        $tcount=$count->fetchAll();
        return $tcount[0]["nb"];
    }

    static public function get_medecinById($unIdMedecin){
        $Medecin = null;
        try {
            $cnx = connexionDAO::connexionPDO();
            $req = $cnx->prepare('SELECT * FROM medecin WHERE id=:id');
            $req->bindValue(':id', $unIdMedecin, PDO::PARAM_INT);
    
            $req->execute();
    
            $ligne = $req->fetchall();
            foreach ($ligne as $key => $val) { 
                $Medecin = new Medecin($val['id'], $val['nom'], $val['prenom'], $val['adresse'], $val['tel'], $val['specialitecomplementaire'], $val['departement']);
            }
        } catch (PDOException $e) {
            print "Erreur !: " . $e->getMessage();
            die();
        }
        return $Medecin;
    }

    static public function update_MedecinById($id,$nom,$prenom,$adresse,$tel,$specialite,$departement){

        $check = false;
        try{

            $connect = connexionDAO::connexionPDO();
            $request = $connect->prepare("update medecin set nom=:nom, prenom=:prenom, adresse=:adresse, tel=:tel, specialitecomplementaire=:specialitecomplementaire, departement=:departement WHERE id=:id");
            $request->bindvalue(":id", $id, PDO::PARAM_INT);
            $request->bindvalue(":nom", $nom, PDO::PARAM_STR);
            $request->bindvalue(":prenom", $prenom, PDO::PARAM_STR);
            $request->bindvalue(":adresse", $adresse, PDO::PARAM_STR);
            $request->bindvalue(":tel", $tel, PDO::PARAM_INT);
            $request->bindvalue(":specialitecomplementaire", $specialite, PDO::PARAM_STR);
            $request->bindvalue(":departement", $departement, PDO::PARAM_INT);

            $request->execute();

            $check = true;
        }catch (PDOException $e) {
            print "Erreur !: " . $e->getMessage();
            die();
        }
        return $check;
    }
}

