<?php
include_once "controller/controleurPrincipal.php";
include_once "ConnexionDAO.php";
include_once "model/authentification.php"; // pour pouvoir utiliser isLoggedOn()
if (isset($_GET["action"])) {
    $action = $_GET["action"];
} 
else {
    $action = "defaut";
}

$fichier = controleurPrincipal($action);
include "controller/$fichier";
?>