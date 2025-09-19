<?php
try {
    $conexao = new PDO('mysql:host=localhost:3306;dbname=test', 'root', '');
    echo "Conectou!<br>";
} catch (PDOException $e) {
    echo "Erro! " . $e->getMessage() . "<br>";
} finally {
    $conexao = null;
}
