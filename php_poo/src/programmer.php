<?php

namespace app;

class Programmer extends User{
    public array $languages;
    public function __construct(string $n, string $p, int $a, array $languages){
        echo "constructeur programmeur <br>";
        echo "<br>";
        //appel du constructeur parent
        parent::__construct($n, $p, $a);
        //initialisation 

        $this->languages = $languages;


        echo "fin constructeur programmeur";

    }
}

?>