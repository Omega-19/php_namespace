<?php
namespace app;

class User{
    public string $nom;
    public string $prenom;
    public int $age;

    public function __construct(string $nom, string $prenom, int $age){
        echo "constructeur user <br>";
        $this->nom=$nom;
        $this->prenom=$prenom;
        $this->age=$age;
        echo "<br>";
        echo "fin constructeur user <br>";
        echo "<br>";
    }
}

?>