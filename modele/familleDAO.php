<?php

include_once('connexionDAO.php');
include_once('famille.php');

class familleDAO
{

        //récupérer les familles de médicaments
    static public function getFamilles()
    {
        $res = array();
        try {
            $connect = connexionDAO::connexionPDO();
            $request = $connect->prepare("select * from famille");
            $request->execute();
            $ligne = $request->fetchall();
            foreach ($ligne as $key => $value) {
                $collectionfamilles = new famille($value['id'], $value['libelle']);
                $res[] = $collectionfamilles;
            }
        } catch (PDOException $e) {
            print "Erreur !: " . $e->getMessage();
            die();
        }
        return $res;
    }

            //récupérer une famille avec son id
    static public function getFamillebyID($idfamille)
    {
        $connect = connexionDAO::connexionPDO();
        $request = $connect->prepare("select * from famille where id = :idfamille ");
        $request->bindvalue(':famille', $idfamille, PDO::PARAM_STR);
        $request->execute();
        $ligne = $request->fetch(PDO::FETCH_ASSOC);
        $unefamille = new famille($ligne['id'], $ligne['libelle']);
        return $unefamille;
    }
}
