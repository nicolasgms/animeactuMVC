<?php
include_once 'Categorie.php';
include_once 'ConnexionDAO.php';
class CategorieDAO {

    public static function ChargeCategorie(){
        try {
            $cnx = ConnexionDAO::connexionPDO();
            $req = $cnx->prepare("select * from categorie");
            $req->execute();
    
            $ligne = $req->fetch(PDO::FETCH_ASSOC);
            while ($ligne) {
                $resultat[] = new categorie($ligne['id_categorie'], $ligne['nom_categorie']);
                $ligne = $req->fetch(PDO::FETCH_ASSOC);
        }
        } catch (PDOException $e) {
            print "Erreur !: " . $e->getMessage();
            die();
        }
        return $resultat;
    }

    public static function ChargeCategorieId($id_categorie){
        try {
            $cnx = ConnexionDAO::connexionPDO();
            $req = $cnx->prepare("select * from categorie where id_categorie=:id_categorie");
            $req->bindValue(':id_categorie', $id_categorie, PDO::PARAM_INT);
            $req->execute();
    
            $ligne = $req->fetch(PDO::FETCH_ASSOC);
                $resultat = new Categorie($ligne['id_categorie'], $ligne['nom_categorie']);
        } catch (PDOException $e) {
            print "Erreur !: " . $e->getMessage();
            die();
        }
        return $resultat;
    }
}