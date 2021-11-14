<?php
if ( $_SERVER["SCRIPT_FILENAME"] == __FILE__ ){
    $racine="..";
}

include_once "$racine/modele/visiteur.php";
include_once "$racine/modele/visiteurDAO.php";
include_once "$racine/modele/connexionDAO.php";
include_once "$racine/modele/rapportDAO.php";
include_once "$racine/modele/rapport.php";
include_once "$racine/modele/medecinDAO.php";
include_once "$racine/modele/medecin.php";
include_once "$racine/modele/medicament.php";
include_once "$racine/modele/medicamentDAO.php";


if(visiteurDAO::isloggedon()){

    $collectionmedecins = medecinDAO::getMedecinAscDAO();
    $collectionmedicaments = medicamentDAO::getMedicamentDAO();

    $loginVisiteur = $_SESSION['login'];
    $VisiteurRapport=visiteurDAO::getvisiteurbyloginDAO($loginVisiteur);
    $idvisiteur = $VisiteurRapport->getidvisiteur();
    $vosdernierrapport = rapportDAO::getRapportsByIdRapportDAO5($idvisiteur);



    include "$racine/vue/entete.html.php";
    include "$racine/vue/rapport.html.php";
    include "$racine/vue/footer.html.php";
}

else {

    include "$racine/vue/connexion.html.php";
}
