<?php

    include_once __DIR__ . "/../../vendor/autoload.php";

    use App\model\Usuario;

    $u = new Usuario("joaozinho", 18);

    $attr = $_GET["atributo"];
    var_dump($attr);

    if ( $attr === "nome"){
        return $u->getNome();
    }

    if ( $attr === "idade"){
        return $u->getIdade();
    }