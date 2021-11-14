<?php
if ( $_SERVER["SCRIPT_FILENAME"] == __FILE__ ){
    $racine="..";
}

include_once "$racine/modele/visiteur.php";
include_once "$racine/modele/visiteurDAO.php";
include_once "$racine/modele/connexionDAO.php";

visiteurDAO::logout();

include "$racine/vue/connexion.html.php";
include "$racine/vue/footer.html.php";
