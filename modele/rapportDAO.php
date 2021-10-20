<?php

include_once('connexionDAO.php');
include_once('rapport.php');


class rapportDAO{

    public static function getRapportsDAO(){

        $res=array();
        $connect = connexionDAO::connexionPDO();
        $request = $connect->prepare("select * from rapport");
        $request->execute();
        $ligne=$request->fetchall();
        foreach($ligne as $key => $value){
            $collectionrapports = new rapport($value['id'],$value['date'],$value['motif'],$value['bilan'],$value['idVisiteur'],$value['idMedecin']);
            $res[]=$collectionrapports;
        }
         return $res;
        }

    public static function getRapportsByIdRapportDAO($idvisiteur){

        $res=array();
        $connect = connexionDAO::connexionPDO();
        $request = $connect->prepare("select * from rapport");            
        $request->execute();
        $ligne=$request->fetchall();
        foreach($ligne as $key => $value){
        $collectionrapports = new rapport($value['id'],$value['date'],$value['motif'],$value['bilan'],$value['idVisiteur'],$value['idMedecin']);
        $res[]=$collectionrapports;
            }
             return $res;
            }

    public static function getRapportsByIdVisiteurDAO($idvisiteur){

        $res=array();
        $connect = connexionDAO::connexionPDO();
        $request = $connect->prepare("select * from rapport");
        $request->execute();
        $ligne=$request->fetchall();
        foreach($ligne as $key => $value){
            $collectionrapports = new rapport($value['id'],$value['date'],$value['motif'],$value['bilan'],$value['idVisiteur'],$value['idMedecin']);
            $res[]=$collectionrapports;
        }
         return $res;
        }

    public static function getRapportsByIdMedecinDAO($idvisiteur){

            $res=array();
            $connect = connexionDAO::connexionPDO();
            $request = $connect->prepare("select * from rapport");
            $request->execute();
            $ligne=$request->fetchall();
            foreach($ligne as $key => $value){
                $collectionrapports = new rapport($value['id'],$value['date'],$value['motif'],$value['bilan'],$value['idVisiteur'],$value['idMedecin']);
                $res[]=$collectionrapports;
            }
            return $res;
            }

    public static function createRapport($idvisiteur){

            $res=array();
            $connect = connexionDAO::connexionPDO();
            $request = $connect->prepare("select * from rapport");
            $request->execute();
            $ligne=$request->fetchall();
            foreach($ligne as $key => $value){
                $collectionrapports = new rapport($value['id'],$value['date'],$value['motif'],$value['bilan'],$value['idVisiteur'],$value['idMedecin']);
                $res[]=$collectionrapports;
            }
            return $res;
            }

    public static function updateRapport(){

            $res=array();
            $connect = connexionDAO::connexionPDO();
            $request = $connect->prepare("select * from rapport");
            $request->execute();
            $ligne=$request->fetchall();
            foreach($ligne as $key => $value){
                $collectionrapports = new rapport($value['id'],$value['date'],$value['motif'],$value['bilan'],$value['idVisiteur'],$value['idMedecin']);
                $res[]=$collectionrapports;
            }
            return $res;
            }

        
}