<?php

include_once __DIR__ . "/../vendor/autoload.php";

use App\model\Usuario;

$u = new Usuario("joaozinho", 18);

echo "<h2>Task Today App</h2>";
echo $u->getNome();
echo $u->getIdade();
?>