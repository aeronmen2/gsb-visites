<?php
if ( $_SERVER["SCRIPT_FILENAME"] == __FILE__ ){
    $racine="..";
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

if (visiteurDAO::isloggedon()){
    include "$racine/vue/entete.html.php";
    include "$racine/vue/detailmedecin.html.php";
    include "$racine/vue/footer.html.php";
}
else {

    include "$racine/vue/vueconnexion.html.php";

}
