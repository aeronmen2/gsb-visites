<?php

include_once "$racine/modele/visiteur.php";
include_once "$racine/modele/visiteurDAO.php";
include_once "$racine/modele/connexionDAO.php";
include_once "$racine/modele/rapportDAO.php";
include_once "$racine/modele/rapport.php";
include_once "$racine/modele/medecinDAO.php";
include_once "$racine/modele/medecin.php";
include_once "$racine/modele/medicament.php";
include_once "$racine/modele/medicamentDAO.php";
include_once "$racine/modele/offrir.php";
include_once "$racine/modele/offrirDAO.php";


if(visiteurDAO::isloggedon()){

    $loginVisiteur = $_SESSION['login'];
    $VisiteurRapport=visiteurDAO::getvisiteurbyloginDAO($loginVisiteur);
    $idvisiteur = $VisiteurRapport->getidvisiteur();


    $rapport = rapportDAO::getRapportsByIdRapportDAO($idvisiteur);
    $medicament = medicamentDAO::getMedicamentDAO();
    $offert =offrirDAO::getIdMedicamentRapport($idrapport);


    include "$racine/vue/entete.html.php";
    include "$racine/vue/listerapport.html.php";
    include "$racine/vue/footer.html.php";
}

else {
    
    include "$racine/vue/vueconnexion.html.php";
}
