<?php

class User{
    //constantes

    const pieds = 2;
//membres | propriétés | champs
    public $nom = "John";
    public $prenom = "Doe";

    public $age = 50;

    //méthodes

    public function present(){
        echo " Je m'appelle " . $this->nom ." " . $this->prenom. " J'ai " . self::pieds . " pieds.";
    }
}
?>