<?php
class User{
    private $pseudo;
    private $last_name;
    private $first_name;
    private $mdp;

    public function __construct($unpseudo, $unnom, $unprenom, $unmdp){
        $this->pseudo=$unpseudo;
        $this->last_name=$unnom;
        $this->first_name=$unprenom;
        $this->mdp=$unmdp;
    }

    public function getpseudo(){
        return $this->pseudo;
    }

    public function getlast_name(){
        return $this->last_name;
    }

    public function getfirst_name(){
        return $this->first_name;
    }
    
    public function getmdp(){
        return $this->mdp;
    }
}