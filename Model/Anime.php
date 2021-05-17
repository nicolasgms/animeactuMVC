<?php
class Anime{
    private $code_anime;
    private $titre;
    private $anneepublication;
    private $mangaka;
    private $NbEp;
    private $synopsis;
    private $cheminP;

    public function __construct($uncode, $untitre, $uneannee, $unauteur, $nbrep, $unsynopsis, $unChemin){
        $this->code_anime=$uncode;
        $this->titre=$untitre;
        $this->anneepublication=$uneannee;
        $this->mangaka=$unauteur;
        $this->NbEp=$nbrep;
        $this->synopsis=$unsynopsis;
        $this->cheminP=$unChemin;
    }

    public function getCode(){
        return $this->code_anime;
    }
    public function getTitre(){
        return $this->titre;
    }
    public function getAnnee(){
        return $this->anneepublication;
    }
    public function getMangaka(){
        return $this->mangaka;
    }
    public function getNbEp(){
        return $this->NbEp;
    }
    public function getSynopsis(){
        return $this->synopsis;
    }
    public function getChemin(){
        return $this->cheminP;
    }


}