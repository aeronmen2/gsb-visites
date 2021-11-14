<?php
if ($_SERVER["SCRIPT_FILENAME"] == __FILE__) {
    $racine = "..";
}

include_once "$racine/modele/rapport.php";
include_once "$racine/modele/rapportDAO.php";
include_once "$racine/modele/connexionDAO.php";
include_once "$racine/modele/visiteurDAO.php";
include_once "$racine/modele/visiteur.php";
include_once "$racine/modele/medecinDAO.php";
include_once "$racine/modele/medecin.php";

$idrapport =  $_GET["idrapport"];
$rapport = rapportDAO::get_rapportByIdRapport($idrapport);

if(empty($_POST['idrapport'])) {
    $id = $rapport->getidrapport();
 }
else{
    $id = $_POST["idrapport"];
}

if(empty($_POST['motifrapport'])) {
    $motif = $rapport->getmotifrapport();
 }
else{
    $motif = $_POST["motifrapport"];
}

if(empty($_POST['bilanrapport'])) {
    $bilan = $rapport->getbilanrapport();
 }
else{
    $bilan = $_POST["bilanrapport"];
}

$req = rapportDAO::updaterapport($id, $motif, $bilan);

if ($req == true) {

    include "$racine/vue/entete.html.php";
    include "$racine/vue/confirmationrapport.html.php";
}

