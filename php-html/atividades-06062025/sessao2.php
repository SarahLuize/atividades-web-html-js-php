<?php
session_start();
$_SESSION['nome'] = "Sarah";
$_SESSION['cidade'] = "Jaraguá do Sul";
echo "Olá " . $_SESSION['nome'] . ", você vive na cidade de " . $_SESSION['cidade'];