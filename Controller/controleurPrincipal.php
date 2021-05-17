<?php
function controleurPrincipal($action) {
    $lesActions = array();
    //principal et fiche
    $lesActions["defaut"] = "ConnexionController.php";
    $lesActions["anime"] = "AnimeController.php";
    $lesActions["fiche"] = "FicheController.php";
    $lesActions["plateforme"] = "PlateformeController.php";
    $lesActions["ficheP"] = "FichePController.php";
    $lesActions["categorie"] = "CategorieController.php";
    $lesActions["ficheC"] = "FicheCController.php";
    $lesActions["search"] = "SearchAnime.php";


    //controller session (deconnexion, connexion, inscription et profil)
    $lesActions["connexion"] = "ConnexionController.php";
    $lesActions["deconnexion"] = "DeconnexionController.php";
    $lesActions["inscription"] = "inscriptionController.php";
    $lesActions["profil"] = "ProfilController.php";
    $lesActions["updatePSWD"] = "UpdatePSWDController.php";
    $lesActions["deleteU"] = "DeleteUController.php";


    if (array_key_exists($action, $lesActions)) {
        return $lesActions[$action];
    } 
    else {
        return $lesActions["defaut"];
    }
}

?>
