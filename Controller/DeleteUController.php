<?php

include_once './Model/UserDAO.php';


if (isset($_GET["pseudo"])) {
    $pseudo = $_GET["pseudo"];
}

UserDAO::deleteUser($pseudo);

if(UserDAO::deleteUser($pseudo)){
    include './View/ConnectionView.php';
}else{
    include './View/baseView.php';
    print "votre compte n'a pas été supprimé";
}