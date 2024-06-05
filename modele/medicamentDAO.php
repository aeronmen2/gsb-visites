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


    public static function getMedicamentByID($idmedicament)
    {
        $resultat = array();
        try {
            $connect = connexionDAO::connexionPDO();
            $request = $connect->prepare("SELECT * FROM medicament WHERE id=:idMedicament");
            $request->bindvalue(":idMedicament", $idmedicament, PDO::PARAM_INT);
            $request->execute();
            $resultat = $request->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            print "Erreur !: " . $e->getMessage();
            die();
        }
        return $resultat;
    }

    static public function getMedicamentByNom($unNom){
        
        try{

            $connect = connexionDAO::connexionPDO();

            $request = $connect->prepare("SELECT * FROM medicament WHERE nomCommercial = :nomCommercial");
            $request->bindvalue(':nomCommercial',$unNom, PDO::PARAM_STR);
            $request->execute();

            $ligne = $request->fetch(PDO::FETCH_ASSOC);

            $Medicament=new Medicament($ligne['id'],$ligne['nomCommercial'], $ligne['famille'], $ligne['composition'], 
            $ligne['effets'],$ligne['contreIndications']);
        } catch (PDOException $e) {
            print "Erreur !: " . $e->getMessage();
            die();
        }
        return $Medicament;
    }


}