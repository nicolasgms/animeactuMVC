<?php
include_once 'Anime.php';
include_once 'ConnexionDAO.php';
class AnimeDAO {

    public static function ChargeAnime(){
        $resultat = array();
        try {
            $cnx = ConnexionDAO::connexionPDO();
            $req = $cnx->prepare("select * from anime");

            $req->execute();
    
            $ligne = $req->fetch(PDO::FETCH_ASSOC);
            while ($ligne) {
                $resultat[] = new Anime($ligne['code_anime'], $ligne['titre'], $ligne['anneepublication'], $ligne['Mangaka'], $ligne['NbEp'], $ligne['synopsis'], $ligne['cheminP'] );
                $ligne = $req->fetch(PDO::FETCH_ASSOC);
        }
        } catch (PDOException $e) {
            print "Erreur !: " . $e->getMessage();
            die();
        }
        return $resultat;
    }
    public static function ChargeAnimeCode($code_anime){
        try {
            $cnx = ConnexionDAO::connexionPDO();
            $requete = $cnx->prepare("select * from anime where code_anime=:code_anime");
            $requete->bindValue(':code_anime', $code_anime, PDO::PARAM_STR);
            $requete->execute();
    
            $ligne = $requete->fetch(PDO::FETCH_ASSOC);
            while ($ligne) {
                $resultat = new Anime($ligne['code_anime'], $ligne['titre'], $ligne['anneepublication'], $ligne['Mangaka'], $ligne['NbEp'], $ligne['synopsis'], $ligne['cheminP'] );
                $ligne = $requete->fetch(PDO::FETCH_ASSOC);
        }
        } catch (PDOException $e) {
            print "Erreur !: " . $e->getMessage();
            die();
        }
        return $resultat;
    }

    public static function SearchAnimeBytitre($titre) {
        $resultat = array();
         try {
            $cnx = ConnexionDAO::connexionPDO();
            $req = $cnx->prepare("select * from anime where titre like :titre");
            $req->bindValue(':titre', "%".$titre."%", PDO::PARAM_STR);

            $req->execute();
    
            $ligne = $req->fetch(PDO::FETCH_ASSOC);
            while ($ligne) {
                $resultat []= new Anime ($ligne['code_anime'], $ligne['titre'], $ligne['anneepublication'], $ligne['Mangaka'], $ligne['NbEp'], $ligne['synopsis'], $ligne['cheminP'] );
                $ligne = $req->fetch(PDO::FETCH_ASSOC);
            }
        } catch (PDOException $e) {
            print "Erreur !: " . $e->getMessage();
            die();
        }
        return $resultat;
    }
    public static function ChargeAnimePlateforme($id_plateforme){
        $resultat = array();
        try {
            $cnx = ConnexionDAO::connexionPDO();
            $requete = $cnx->prepare("select * from anime, voir where anime.code_anime=voir.code_anime and voir.id_plateforme=:id_plateforme");
            $requete->bindValue(':id_plateforme', $id_plateforme, PDO::PARAM_INT);
            $requete->execute();

    
            $ligne = $requete->fetch(PDO::FETCH_ASSOC);
            while ($ligne) {
                $resultat[] = new Anime ($ligne['code_anime'], $ligne['titre'], $ligne['anneepublication'], $ligne['Mangaka'], $ligne['NbEp'], $ligne['synopsis'], $ligne['cheminP'] );
                $ligne = $requete->fetch(PDO::FETCH_ASSOC);
        }
        } catch (PDOException $e) {
            print "Erreur !: " . $e->getMessage();
            die();
        }

        return $resultat;
    }

    public static function ChargeAnimeCategorie($id_categorie){
        $resultat = array();
        try {
            $cnx = ConnexionDAO::connexionPDO();
            $requete = $cnx->prepare("select * from anime, appartenir where anime.code_anime=appartenir.code_anime and appartenir.id_categorie=:id_categorie");
            $requete->bindValue(':id_categorie', $id_categorie, PDO::PARAM_INT);
            $requete->execute();

    
            $ligne = $requete->fetch(PDO::FETCH_ASSOC);
            while ($ligne) {
                $resultat[] = new Anime ($ligne['code_anime'], $ligne['titre'], $ligne['anneepublication'], $ligne['Mangaka'], $ligne['NbEp'], $ligne['synopsis'], $ligne['cheminP'] );
                $ligne = $requete->fetch(PDO::FETCH_ASSOC);
        }
        } catch (PDOException $e) {
            print "Erreur !: " . $e->getMessage();
            die();
        }

        return $resultat;
    }


}