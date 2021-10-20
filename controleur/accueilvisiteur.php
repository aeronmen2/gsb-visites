<?php
if ( $_SERVER["SCRIPT_FILENAME"] == __FILE__ ){
    $racine="..";
}

include_once "$racine/modele/visiteur.php";
include_once "$racine/modele/visiteurDAO.php";
include_once "$racine/modele/connexionDAO.php";

//vérifier si l'utilisateur est cnnecté et de récupére le mail utilisateur
if(visiteurDAO::isloggedon()){
    $login = $_SESSION["login"];

    // traitement si necessaire des donnees recuperee
    // appel du script de vue qui permet de gerer l'affichage des donnees
    include "$racine/vue/entete.html.php";
    include "$racine/vue/vueaccueilvisiteur.html.php";
    include "$racine/vue/footer.html.php";
}

else { 
       
    print("Pas connecté");
    include "$racine/vue/entete.html.php";
    include "$racine/vue/vueconnexion.html.php";
}

?>
