<?php

//vetor com nomes

$a[] = "Ana";
$a[] = "Beltrano";
$a[] = "Ciclano";
$a[] = "Daniela";
$a[] = "Eva";
$a[] = "Fulano";
$a[] = "Gabriel";
$a[] = "Hildergarda";
$a[] = "Indiada";
$a[] = "Joana";
$a[] = "Kely";
$a[] = "Lucimaria";
$a[] = "Nunes";
$a[] = "Otavio";
$a[] = "Patricia";
$a[] = "Amelia";

$q = $_GET["q"];

$hint = "";

if ($q !== "") {
    $q = strtolower($q);

    $len = strlen($q);

    foreach ($a as $name) {
        if (stristr($q, substr($name, 0, $len))) {
            if ($hint === "") {
                $hint = $name;
            } else {
                $hint .= ", $name";
            }
        }
    }
}


echo $hint === "" ? "Sem sugestão" : $hint;
