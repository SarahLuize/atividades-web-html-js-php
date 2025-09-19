<?php

function tabuada($numero) {
    for ($i = 1; $i < 11; $i++) {
        echo "$numero " . " X " . $i . " = " . ($numero * $i) . "<br>";
    }
}

function soma($a, $b=1) {
    return $a + $b;
}
function subtracao($a, $b) {
    return $a - $b;
}

function multiplicacao($a, $b) {
    return $a * $b;
}

function divisao($a, $b) {
    return $a / $b;
}

tabuada(10);
tabuada(3);

$resultado = 0;
$resultado = soma(10, 20);
echo "Soma: " . $resultado . "<br>";
$resultado = soma(5);
echo "Soma: " . $resultado . "<br>";
$resultado = subtracao(40, 20);
echo "Subtração: " . $resultado . "<br>";
$resultado = multiplicacao(8, 3);
echo "Multiplicação: " . $resultado . "<br>";
$resultado = divisao(50, 5); 
echo "Divisão: " . $resultado . "<br>";