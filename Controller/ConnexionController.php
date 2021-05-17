<?php
include_once "./Model/authentification.php";
if (isset($_POST["pseudo"]) && isset($_POST["mdp"])){
    $pseudo=$_POST["pseudo"];
    $mdp=$_POST["mdp"];
}
else
{
    $pseudo="";
    $mdp="";
}


if($pseudo !=""){
    AuthentificationDAO::login($pseudo,$mdp);
}

if (AuthentificationDAO::isLoggedOn()){
    include "./Controller/ProfilController.php";
}else{
    include "./View/ConnectionView.php";
    include "./View/footView.php";
}