<?php
include_once 'User.php';
include_once 'ConnexionDAO.php';
class UserDAO {

    public static function ChargeUser(){
        try {
            $cnx = ConnexionDAO::connexionPDO();
            $req = $cnx->prepare("select * from user");
            $req->execute();
    
            $ligne = $req->fetch(PDO::FETCH_ASSOC);
            while ($ligne) {
                $resultat[] = new User($ligne["pseudo"], $ligne["last_name"], $ligne["first_name"], $ligne["mdp"]);
                $ligne = $req->fetch(PDO::FETCH_ASSOC);
        }
        } catch (PDOException $e) {
            print "Erreur !: " . $e->getMessage();
            die();
        }
        return $resultat;
    }

    public static function getUserBypseudo($pseudo) {
        try {
            $cnx = ConnexionDAO::connexionPDO();
            $requete = $cnx->prepare("select * from User where pseudo=:pseudo");
            $requete->bindValue(':pseudo', $pseudo, PDO::PARAM_STR);
            $requete->execute();
            
            $resultat = $requete->fetch(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            print "Erreur !: " . $e->getMessage();
            die();
        }
        return $resultat;
    }

    public static function addUser($pseudo, $last_name, $first_name, $mdp) {
        try {
            $cnx = ConnexionDAO::connexionPDO();
            $req = $cnx->prepare("insert into user (pseudo, last_name, first_name, mdp) values(:pseudo, :last_name, :first_name, :mdp)");
            $req->bindValue(':pseudo', $pseudo, PDO::PARAM_STR);
            $req->bindValue(':last_name', $last_name, PDO::PARAM_STR);
            $req->bindValue(':first_name', $first_name, PDO::PARAM_STR);
            $req->bindValue(':mdp', $mdp, PDO::PARAM_STR);
            
            $resultat = $req->execute();
        } catch (PDOException $e) {
            print "Erreur !: " . $e->getMessage();
            die();
        }
        return $resultat;
    }

    public static function deleteUser($pseudo) {
        $resultat = -1;
        try {
            $cnx = ConnexionDAO::connexionPDO();
            $req = $cnx->prepare("delete from user where pseudo=:pseudo");
            $req->bindValue(':pseudo', $pseudo, PDO::PARAM_STR);
            $resultat = $req->execute();
        } catch (PDOException $e) {
            print "Erreur !: " . $e->getMessage();
            die();
        }
        return $resultat;
    }

    public static function changePSWD($pseudo, $mdp){
        try{
            $cnx = ConnexionDAO::connexionPDO();
            $req = $cnx->prepare("update user set mdp=:mdp where pseudo=:pseudo");
            $req->bindvalue(':mdp', $mdp, PDO::PARAM_STR);
            $req->bindvalue(':pseudo', $pseudo, PDO::PARAM_STR);
            $resultat = $req->execute();

        } catch (PDOException $e) {
            print "Erreur !: " . $e->getMessage();
            die();
        }
        return $resultat;
    }

}