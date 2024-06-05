<?php

include_once('connexionDAO.php');
include_once('rapport.php');


class rapportDAO
{

    public static function getRapportsDAO()
    {

        $res = array();
        try {
            $connect = connexionDAO::connexionPDO();
            $request = $connect->prepare("select * from rapport");
            $request->execute();
            $ligne = $request->fetchall();
            foreach ($ligne as $key => $value) {
                $collectionrapports = new rapport($value['id'], $value['date'], $value['motif'], $value['bilan'], $value['idVisiteur'], $value['idMedecin']);
                $res[] = $collectionrapports;
            }
        } catch (PDOException $e) {
            print "Erreur !: " . $e->getMessage();
            die();
            return $res;
        }
    }


    public static function getRapportsByIdMedecinDAO($idmedecin)
    {
        $resultat = array();
        try {
            $connect = connexionDAO::connexionPDO();
            $request = $connect->prepare('SELECT R.id,date,motif,bilan,idVisiteur,idMedecin FROM rapport R, visiteur V 
            WHERE R.idMedecin=:idMedecin AND R.idVisiteur=V.id');
            $request->bindvalue(':idMedecin', $idmedecin, PDO::PARAM_STR);
            $request->execute();
            $ligne = $request->fetchall(PDO::FETCH_ASSOC);

            foreach ($ligne as $key => $val) {
                $rapport = new Rapport($val['id'], $val['date'], $val['motif'], $val['bilan'], $val['idVisiteur'], $val['idMedecin']);
                $resultat[] = $rapport;
            }
        } catch (PDOException $e) {
            print "Erreur !: " . $e->getMessage();
            die();
        }
        return $resultat;
    }


    public static function getRapportsByIdRapportDAO($idvisiteur)
    {
        $resultat = array();
        try {
            $connect = connexionDAO::connexionPDO();
            $request = $connect->prepare('SELECT R.id,date,motif,bilan,idVisiteur,idMedecin FROM rapport R, visiteur V 
            WHERE R.idVisiteur=:idVisiteur AND R.idVisiteur=V.id');
            $request->bindvalue(':idVisiteur', $idvisiteur, PDO::PARAM_STR);
            $request->execute();
            $ligne = $request->fetchall(PDO::FETCH_ASSOC);

            foreach ($ligne as $key => $val) {
                $rapport = new Rapport($val['id'], $val['date'], $val['motif'], $val['bilan'], $val['idVisiteur'], $val['idMedecin']);
                $resultat[] = $rapport;
            }
        } catch (PDOException $e) {
            print "Erreur !: " . $e->getMessage();
            die();
        }
        return $resultat;
    }

    static public function get_rapportByIdRapport($unIdRapport)
    {

        try {
            $connect = connexionDAO::connexionPDO();

            $request = $connect->prepare('SELECT id,date,motif,bilan,idVisiteur,idMedecin FROM rapport WHERE id=:id');
            $request->bindvalue(':id', $unIdRapport, PDO::PARAM_INT); // assignation de la valeur en paramètre 
            $request->execute(); // éxécution de la requête

            $ligne = $request->fetch(PDO::FETCH_ASSOC); // récupération des données dans un tableau associatif

            $rapport = new Rapport($ligne['id'], $ligne['date'], $ligne['motif'], $ligne['bilan'], $ligne['idVisiteur'], $ligne['idMedecin']);
        } catch (PDOException $e) {
            print "Erreur !: " . $e->getMessage();
            die();
        }
        return $rapport;
    }

    public static function getRapportsByIdRapportDAO5($idvisiteur)
    {

        $resultat = array();

        try {
            $connect = connexionDAO::connexionPDO();

            $request = $connect->prepare('SELECT R.id,date,motif,bilan,idVisiteur,idMedecin FROM rapport R, visiteur V 
            WHERE R.idVisiteur=:idVisiteur AND R.idVisiteur=V.id order by R.id DESC limit 5');
            $request->bindvalue(':idVisiteur', $idvisiteur, PDO::PARAM_STR); // assignation de la valeur en paramètre 
            $request->execute(); // éxécution de la requête

            $ligne = $request->fetchall(PDO::FETCH_ASSOC); // récupération des données dans un tableau associatif

            foreach ($ligne as $key => $val) {
                $rapport = new Rapport($val['id'], $val['date'], $val['motif'], $val['bilan'], $val['idVisiteur'], $val['idMedecin']);
                $resultat[] = $rapport;
            }
        } catch (PDOException $e) {
            print "Erreur !: " . $e->getMessage();
            die();
        }
        return $resultat;
    }



    static public function createrapport($date, $motif, $bilan, $idvisiteur, $idmedecin)
    {
        $check = false;

        try {
            $connect = connexionDAO::connexionPDO();
            $request = $connect->prepare('INSERT INTO rapport (date, motif, bilan, idVisiteur, idMedecin)
        VALUES (:date, :motif, :bilan, :idVisiteur, :idMedecin)');
            $request->bindValue(':date', $date, PDO::PARAM_STR);
            $request->bindValue(':motif', $motif, PDO::PARAM_STR);
            $request->bindValue(':bilan', $bilan, PDO::PARAM_STR);
            $request->bindValue(':idVisiteur', $idvisiteur, PDO::PARAM_STR);
            $request->bindValue(':idMedecin', $idmedecin, PDO::PARAM_INT);
            $request->execute();
            $check = true;
        } catch (PDOException $e) {
            print "Erreur !: " . $e->getMessage();
            die();
        }
        return $check;
    }


    static public function updaterapport($unId, $unMotif, $unBilan)
    {

        $check = false;
        try {
            $connect = connexionDAO::connexionPDO();

            $request = $connect->prepare('UPDATE rapport SET motif = :motif,bilan = :bilan WHERE id = :id');
            $request->bindvalue(':motif', $unMotif, PDO::PARAM_STR);
            $request->bindvalue(':bilan', $unBilan, PDO::PARAM_STR);
            $request->bindvalue(':id', $unId, PDO::PARAM_INT);

            $request->execute();
            $check = true;
        } catch (PDOException $e) {
            print "Erreur !: " . $e->getMessage();
            die();
        }
        return $check;
    }
}
