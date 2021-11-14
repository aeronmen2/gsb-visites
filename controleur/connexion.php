<?php
if ( $_SERVER["SCRIPT_FILENAME"] == __FILE__ ){
    $racine="..";
}

include_once "$racine/modele/visiteur.php";
include_once "$racine/modele/visiteurDAO.php";
include_once "$racine/modele/connexionDAO.php";

$loginvisiteur=null;

if (isset($_POST["login"]) && isset($_POST["mdp"])){
    $loginvisiteur=$_POST["login"];
    $mdpvisiteur=$_POST["mdp"];
}


if($loginvisiteur!="" && $mdpvisiteur!=""){
    visiteurDAO::login($loginvisiteur, $mdpvisiteur);
}


if (visiteurDAO::isloggedon()){
    include "$racine/controleur/accueilvisiteur.php";
}
else {
    include "$racine/vue/connexion.html.php";

}
