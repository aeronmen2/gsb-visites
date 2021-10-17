<?php

include_once('connexionDAO.php');
include_once('famille.php');

class familleDAO{

    static public function getFamilles(){
        $res = array();
        $connect = connexionDAO::connexionPDO();
        $request = $connect->prepare("select * from famille");
        $request->execute();
        $ligne=$request->fetchall();
        foreach($ligne as $key => $value){
            $collectionfamilles = new famille($value['id'],$value['libelle']);
            $res[]=$collectionfamilles;
        }
         return $res;

    }

    static public function getFamilleID($idfamille){
    
            $connect = connexionDAO::connexionPDO();
            $request = $connect->prepare("select * from famille where id = :idfamille ");
            $request->bindvalue(':famille', $famille, PDO::PARAM_STR);
            $request->execute();
            $ligne=$request->fetch(PDO::FETCH_ASSOC);
            $unefamille = new famille($ligne['id'],$ligne['libelle']);
            return $unefamille;
        

    }
}

