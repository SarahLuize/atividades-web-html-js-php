<?php

setcookie("usuario", false, -1);

if (isset($_COOKIE['usuario'])) {
    echo "Valor: " . $_COOKIE['usuario'];
} else {
    echo "Cookie excluído!";
}
