<?php

include "getRacine.php";
include "$racine/controleur/controleurprincipal.php";

if (isset($_GET["action"])) {
    $action = $_GET["action"];
} 
else {
    $action = "defaut";
}


$fichier = controleurprincipal($action);

include "$racine/controleur/$fichier";
