<?php
if ( $_SERVER["SCRIPT_FILENAME"] == __FILE__ ){
    $racine="..";
}

include_once "$racine/modele/rapport.php";
include_once "$racine/modele/rapportDAO.php";
include_once "$racine/modele/connexionDAO.php";
include_once "$racine/modele/visiteurDAO.php";
include_once "$racine/modele/visiteur.php";

$idrapport = $_GET["idrapport"];
$rapport = rapportDAO::get_rapportByIdRapport($idrapport);

if (visiteurDAO::isloggedon()){
    include "$racine/vue/entete.html.php";
    include "$racine/vue/detailrapport.html.php";
    include "$racine/vue/footer.html.php";
}
else {

    include "$racine/vue/connexion.html.php";

}
