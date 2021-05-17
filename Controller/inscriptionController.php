<?php
include_once "./Model/authentification.php";

if (isset($_POST["pseudo"]) && isset($_POST["last_name"]) && isset($_POST["first_name"]) && isset($_POST["mdp"])) {
        $pseudo = $_POST["pseudo"];
        $last_name = $_POST["last_name"];
        $first_name = $_POST["first_name"];
        $mdp = $_POST["mdp"];
}else{
    $pseudo = "";
    $last_name = "";
    $first_name = "";
    $mdp = "";
}
$users = UserDAO::ChargeUser();
if ($pseudo !="" && $last_name !=""  && $first_name !=""  && $mdp !="" ){
        UserDAO::addUser($pseudo, $last_name, $first_name, $mdp);
        include './View/baseView.php';
        include './View/ProfilView.php';
        include './View/footView.php';
}else{
include './View/InscriptionView.php';
}
