<?php

include_once('connexionDAO.php');
include_once('medecin.php');

//récupérer table de tout les médicaments
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
}