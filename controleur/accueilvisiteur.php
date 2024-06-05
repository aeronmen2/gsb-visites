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

            //rvérifier si l'utilisateur est bien connécté

if(visiteurDAO::isloggedon()){


    $visiteur = visiteurDAO::getvisiteurbyloginDAO($_SESSION['login']);
    $medecin5 = medecinDAO::get5MedecinDAO();

    $loginVisiteur = $_SESSION['login'];
    $VisiteurRapport=visiteurDAO::getvisiteurbyloginDAO($loginVisiteur);
    $idvisiteur = $VisiteurRapport->getidvisiteur();
    $vosdernierrapport = rapportDAO::getRapportsByIdRapportDAO5($idvisiteur);

    include "$racine/vue/entete.html.php";
    include "$racine/vue/accueil.html.php";
    include "$racine/vue/footer.html.php";
}

else {
    
    include "$racine/vue/connexion.html.php";
}
