<?php

include_once './Model/UserDAO.php';

if (isset($_POST["pseudo"]) && isset($_POST["mdp"])) {
    $pseudo = $_POST["pseudo"];
    $mdp = $_POST["mdp"];
    $ret = UserDAO::changePSWD($pseudo, $mdp);
}

include './View/baseView.php';
if ($ret!=NULL){
    include './View/ProfilView.php';
}else{
    include './View/ChangePSWD.php';
}
