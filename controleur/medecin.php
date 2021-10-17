<?php
if ( $_server["script_filename"] == __file__ ){
    $racine="..";
}

include_once "$racine/modele/medecin.php";
include_once "$racine/modele/medecinDAO.php";
include_once "$racine/modele/connexionDAO.php";
include_once "$racine/modele/visiteurDAO.php";
include_once "$racine/modele/visiteur.php";

$listemedecin = medecinDAO::getMedecinDAO();

if (visiteurDAO::isloggedon()){
    include "$racine/vue/vuelistemedecins.html.php";
}
else {
    include "$racine/vue/entete.html.php";
    include "$racine/vue/vueconnexion.html.php";
    include "$racine/vue/pied.html.php";
}

?>