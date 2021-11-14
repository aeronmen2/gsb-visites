<?php

include_once('connexionDAO.php');
include_once('visiteur.php');


class visiteurDAO{

    public static function getvisiteursDAO(){

        $res=array();
        $connect = connexionDAO::connexionPDO();
        $request = $connect->prepare("select * from visiteur");
        $request->execute();
        $ligne=$request->fetchall();
        foreach($ligne as $key => $value){
            $collectionvisiteurs = new visiteur($value['id'],$value['nom'],$value['prenom'],$value['login'],$value['mdp'],$value['adresse'],$value['cp'],$value['ville'],$value['dateembauche'],$value['timespan'],$value['ticket']);
            $res[]=$collectionvisiteurs;
        }
         return $res;
        }
    
    public static function getvisiteurbyloginDAO($login){
        
        $connect = connexionDAO::connexionPDO();
        $request = $connect->prepare("select * from visiteur where login = :login ");
        $request->bindvalue(':login', $login, PDO::PARAM_STR);
        $request->execute();
        
        $ligne=$request->fetch(PDO::FETCH_ASSOC);
        $unvisiteur = new visiteur($ligne['id'],$ligne['nom'],$ligne['prenom'],$ligne['login'],$ligne['mdp'],$ligne['adresse'],$ligne['cp'],$ligne['ville'],$ligne['dateEmbauche'],$ligne['timespan'],$ligne['ticket']);
        return $unvisiteur;
    }

    public static function login($login, $mdp){
        if (!isset($_SESSION)) {
            session_start();
        }

        $visiteur = visiteurDAO::getvisiteurbyloginDAO($login);
        $mdpbd = $visiteur->getmdpvisiteur();
        $loginbd = $visiteur->getloginvisiteur();

        if (trim($mdpbd) == trim($mdp)) {
            $_SESSION["login"] = $loginbd;
            $_SESSION["mdp"] = $mdpbd;
        }
    }
    
    public static function isloggedon() {
        if (!isset($_SESSION)) {
            session_start();
        }
        $ret = false;
    
        if (isset($_SESSION["login"])) {
            $visiteur = visiteurDAO::getvisiteurbyloginDAO($_SESSION["login"]);
            if ($visiteur->getloginvisiteur() == $_SESSION["login"] && $visiteur->getmdpvisiteur() == $_SESSION["mdp"]
            ) {
                $ret = true;
            }
        }
        return $ret;
    }

    public static function logout() {
        if (!isset($_SESSION)) {
            session_start();
        }
        unset($_SESSION["login"]);
        unset($_SESSION["mdp"]);
    }

}