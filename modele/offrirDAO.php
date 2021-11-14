<?php

class OffrirDAO

{

    public static function addMedicamentRapport($unRapport, $unMedicament, $uneQuantite)
    {

        $check = false;
        try {
            $connect = connexionDAO::connexionPDO();
            $request = $connect->prepare("INSERT INTO offrir (idRapport, idMedicament, quantite)
            VALUES (:idRapport, :idMedicament, :quantite) ");
            $request->bindvalue(':idRapport', $unRapport, PDO::PARAM_INT);
            $request->bindvalue(':idMedicament', $unMedicament, PDO::PARAM_STR);
            $request->bindvalue(':quantite', $uneQuantite, PDO::PARAM_INT);
            $request->execute();
            $check = true;
        } catch (PDOException $e) {
            print "Erreur !: " . $e->getMessage();
            die();
        }
        return $check;
    }

    public static function getIdMedicamentRapport($idrapport)
    {
        $resultat = array();
        try {
            $connect = connexionDAO::connexionPDO();
            $request = $connect->prepare("SELECT idMedicament FROM offrir WHERE idRapport=:idRapport");
            $request->bindvalue(":idRapport", $idrapport, PDO::PARAM_INT);
            $request->execute();
            $resultat = $request->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            print "Erreur !: " . $e->getMessage();
            die();
        }
        return $resultat;
    }

    public static function getQteMedicamentRapport($idrapport)
    {
        $resultat = array();
        try {
            $connect = connexionDAO::connexionPDO();
            $request = $connect->prepare("SELECT quantite FROM offrir WHERE idRapport=:idRapport");
            $request->bindvalue(":idRapport", $idrapport, PDO::PARAM_INT);
            $request->execute();
            $resultat = $request->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            print "Erreur !: " . $e->getMessage();
            die();
        }
        return $resultat;
    }
}
