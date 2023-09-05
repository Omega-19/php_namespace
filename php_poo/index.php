<?php
declare(strict_types=1);
use app\Programmer;

require __DIR__ . "/vendor/autoload.php";

// var_dump(new User());


$u1 = new Programmer("John", "Doe", 24, ["JS", "CSS"]);
echo "<pre>";
// var_dump($u1);
print_r($u1);
echo "</pre>";


?>