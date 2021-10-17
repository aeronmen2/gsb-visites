<?php

include_once('connexiondao.php');
include_once('medicament.php');

//récupérer table de tout les médicaments
class medicamentdao{
    
    public static function getmedicamentdao(){
        $connect = connexiondao::connexionpdo();
        $request = $connect->prepare("select * from medicament");
        $request->execute();
        $ligne=$request->fetchall();
        foreach($ligne as $key => $value){
            $collectionmedicament = new medicament($value['id'],$value['nomcommercial'],$value['idfamille'],$value['composition'],$value['effets'],$value['contreidications']);
            $res[]=$collectionmedicament;
        }
         return $res;
    }
}