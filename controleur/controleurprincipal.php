<?php
if ( $_SERVER["SCRIPT_FILENAME"] == __FILE__ ){
    $racine="..";
}

function controleurprincipal($action){
    $lesActions = array();
    $lesActions["defaut"] = "accueilvisiteur.php";
    $lesActions["accueil"] = "accueilvisiteur.php";
    $lesActions["connexion"] = "connexion.php";
    $lesActions["CreationRapport"]= "creationrapport.php";
    $lesActions["deconnexion"] = "deconnexion.php";
    $lesActions["medecin"] = "medecin.php";
    $lesActions["rapport"] = "rapport.php";
    $lesActions["listerapport"] = "listerapport.php";
    $lesActions["detailrapport"] = "detailrapport.php";
    $lesActions["modifrapport"] = "modifrapport.php";
    $lesActions["detailmedecin"] = "detailmedecin.php";
    $lesActions["modifmedecin"] = "modifmedecin.php";
    $lesActions["rapportmedecin"] = "rapportmedecin.php";
    

    if (array_key_exists($action, $lesActions)) {
        return $lesActions[$action];
      } 
      else {
        return $lesActions["defaut"];
      }
    }
