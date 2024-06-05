<?php

if ( $_SERVER["SCRIPT_FILENAME"] == __FILE__ ){
    $racine="..";
}

include "$racine/modele/visiteur.php";
include "$racine/modele/visiteurDAO.php";
include "$racine/modele/rapportDAO.php";
include "$racine/modele/medecinDAO.php";
include "$racine/modele/medicament.php";
include "$racine/modele/medicamentDAO.php";
include "$racine/modele/offrirDAO.php";
include "$racine/modele/offrir.php";

session_start();


if (isset($_POST["date"])){$date = date('Y-m-d', strtotime($_POST['date']));}
if (isset($_POST["motif"])){$motif = $_POST["motif"];}
if (isset($_POST["bilan"])){$bilan = $_POST["bilan"];}
if (isset($_POST["medicament"])){$medicament = $_POST["medicament"];}
if (isset($_POST["quantite"])){$quantite = $_POST["quantite"];}

$loginVisiteur = $_SESSION['login'];
$VisiteurRapport=visiteurDAO::getvisiteurbyloginDAO($loginVisiteur);
$id = $VisiteurRapport->getidvisiteur();

if (isset($_POST["medecin"])){$medecin = $_POST["medecin"];}

$req_createrapport = rapportDAO::createrapport($date, $motif, $bilan, $id, $medecin);

$lesRapports = rapportDAO::getRapportsDAO(); 
$dernierrapport = end($lesRapports); 
$iddernierrapport = $dernierrapport->getidrapport(); 
$req_addoffer = OffrirDAO::addMedicamentRapport($iddernierrapport, $medicament, $quantite); 

if ($req_createrapport == true && $req_addoffer == true ){

    include "$racine/vue/entete.html.php";
    include "$racine/vue/confirmationrapport.html.php";

}
