<?php

include_once('connexionDAO.php');
include_once('medicament.php');

//récupérer table de tout les médicaments
class medicamentDAO

{

    public static function getMedicamentDAO()
    {
        $res = array();
        $connect = connexionDAO::connexionPDO();
        $request = $connect->prepare("select * from medicament");
        $request->execute();
        $ligne = $request->fetchall();
        foreach ($ligne as $key => $value) {
            $collectionmedicament = new medicament($value['id'], $value['nomCommercial'], $value['idFamille'], $value['composition'], $value['effets'], $value['contreIndications']);
            $res[] = $collectionmedicament;
        }
        return $res;
    }
}
