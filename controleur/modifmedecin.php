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

$idmedecin = $_GET["idmedecin"];
$medecin = medecinDAO::get_medecinById($idmedecin);

if(empty($_POST['id'])) {
    $id = $medecin->getidmedecin();
 }
else{
    $id = $_POST["id"];
}

if(empty($_POST['nom'])) {
    $nom = $medecin->getnommedecin();
 }
else{
    $nom = $_POST["nom"];
}

if(empty($_POST['prenom'])) {
    $prenom = $medecin->getprenommedecin();
 }
else{
    $prenom = $_POST["prenom"];
}

if(empty($_POST['adresse'])) {
    $adresse = $medecin->getadressemedecin();
}
else{
    $adresse = $_POST["adresse"];
}

if(empty($_POST['tel'])) {
    $tel = $medecin->gettelmedecin();
 }
else{
    $tel = $_POST["tel"];
}

if(empty($_POST['specialitecomplementaire'])) {
    $specialite = $medecin->getspecialitecomplementaire();
 }
else{
    $specialite = $_POST["specialitecomplementaire"];
}

if(empty($_POST['departement'])) {
    $departement = $medecin->getdepartement();
 }
else{
    $departement = $_POST["departement"];
}


$req = medecinDAO::update_MedecinById($id, $nom, $prenom, $adresse, $tel, $specialite, $departement);

if ($req == true) {

    include "$racine/vue/entete.html.php";
    include "$racine/vue/confirmationmedecin.html.php";
}
