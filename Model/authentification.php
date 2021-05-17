<?php
include_once "UserDAO.php";
class AuthentificationDAO{
    public static function login($pseudo, $mdp) {
        if (!isset($_SESSION)) {
            session_start();
        }
        $util= UserDAO::getUserBypseudo($pseudo);
        $mdpBD = $util["mdp"];
        if ($mdpBD == $mdp) {
            // le mot de passe est celui de l'User dans la base de donnees
            $_SESSION["pseudo"] = $pseudo;
            $_SESSION["mdp"] = $mdpBD;
            $_SESSION["last_name"] = $util["last_name"];
            $_SESSION["first_name"] = $util["first_name"];
        }else{
            echo 'Le pseudo ou mot de passe est incorrect';
        }
        }

    public static function logout() {
        if (!isset($_SESSION)) {
            session_start();
        }
        unset($_SESSION["pseudo"]);
        unset($_SESSION["mdp"]);
    }

    public static function getpseudoLoggedOn(){
        if (AuthentificationDAO::isLoggedOn()){
            $ret = $_SESSION["pseudo"];
        }
        else {
            $ret = "";
        }
        return $ret;
            
    }

    public static function getLastNLoggedOn(){
        if (AuthentificationDAO::isLoggedOn()){
            $ret = $_SESSION["last_name"];
        }
        else {
            $ret = "";
        }
        return $ret;
            
    }

    public static function getFirstNLoggedOn(){
        if (AuthentificationDAO::isLoggedOn()){
            $ret = $_SESSION["first_name"];
        }
        else {
            $ret = "";
        }
        return $ret;
            
    }

    public static function isLoggedOn() {
        if (!isset($_SESSION)) {
            session_start();
        }
        $ret = false;

        if (isset($_SESSION["pseudo"])) {
            $util = UserDAO::getUserBypseudo($_SESSION["pseudo"]);
            if ($util["pseudo"] == $_SESSION["pseudo"] && $util["mdp"] == $_SESSION["mdp"]) {
                $ret = true;
            }
        }
        return $ret;
    }
}