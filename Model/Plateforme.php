<?php

class Plateforme{
    private $id_plateforme;
    private $nom_plateforme;
    private $Photo;

    public function __construct($unIdPlat, $unNomPlat, $unePhoto){
        $this->id_plateforme=$unIdPlat;
        $this->nom_plateforme=$unNomPlat;
        $this->Photo=$unePhoto;
    }
    

    public function getId(){
        return $this->id_plateforme;
    }

    public function getNomPlateforme(){
        return $this->nom_plateforme;
    }

    public function getPhoto(){
        return $this->Photo;
    }
}