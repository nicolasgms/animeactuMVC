<?php
class Categorie{
    private $id_categorie;
    private $nom_categorie;

    public function __construct($unid, $unnomC){
        $this->id_categorie=$unid;
        $this->nom_categorie=$unnomC;
    }

    public function getidC(){
        return $this->id_categorie;
    }
    public function getnomCat(){
        return $this->nom_categorie;
    }
}