<?php

//permet de redigerer grâce au controleur

function controleurprincipal($action){
    $lesactions = array();
    $lesactions["defaut"] = "connexion.php";
    $lesactions["connexion"] = "connexion.php";
    $lesactions["deconnexion"] = "deconnexion.php";
    $lesactions["creationrapport"] = "creationrapport.php";
    $lesactions["modifrapport"] = "modifrapport.php";
    $lesactions["medecin"] = "medecin.php";


    if (array_key_exists ( $action , $lesactions )){
        return $lesactions[$action];
    }
    else{
        return $lesactions["defaut"];
    }

}

?>