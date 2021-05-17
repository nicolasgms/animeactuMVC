<?php
include_once 'Plateforme.php';
include_once 'ConnexionDAO.php';
class PlateformeDAO {

    public static function ChargePlatform(){
        try {
            $cnx = ConnexionDAO::connexionPDO();
            $req = $cnx->prepare("select * from plateforme");
            $req->execute();
    
            $ligne = $req->fetch(PDO::FETCH_ASSOC);
            while ($ligne) {
                $resultat[] = new Plateforme($ligne['id_plateforme'], $ligne['nom_plateforme'], $ligne['Photo']);
                $ligne = $req->fetch(PDO::FETCH_ASSOC);
        }
        } catch (PDOException $e) {
            print "Erreur !: " . $e->getMessage();
            die();
        }
        return $resultat;
    }

    public static function ChargePlatformById($id_plateforme){
        try {
            $cnx = ConnexionDAO::connexionPDO();
            $req = $cnx->prepare("select * from plateforme where id_plateforme=:id_plateforme");
            $req->bindValue(':id_plateforme', $id_plateforme, PDO::PARAM_INT);
            $req->execute();
    
            $ligne = $req->fetch(PDO::FETCH_ASSOC);
                $resultat = new Plateforme($ligne['id_plateforme'], $ligne['nom_plateforme'], $ligne['Photo']);
        } catch (PDOException $e) {
            print "Erreur !: " . $e->getMessage();
            die();
        }
        return $resultat;
    }


}