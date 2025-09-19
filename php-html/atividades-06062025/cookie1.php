<?php
//Simulando um contador, tecle F5 para atualizar o navegador.

$contador = 0;

if(isset($_COOKIE['contador'])){
    $contador = $_COOKIE['contador'];
    echo "Valor: " . $contador;
    $contador++;
    setcookie("contador", $contador, 0);
} else {
    echo "Valor: " . $contador;
    $contador++;
    setcookie("contador", $contador, 0);
}

setcookie("usuario", "fulano", time() + 3600);
if (isset($_COOKIE['usuario'])) {
    echo "<br> Valor: " . $_COOKIE['usuario'] . "<br>";
} else {
    echo "<br> Cookie não criado!";
}