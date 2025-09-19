<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Trabalhando com GET</title>
</head>
<body>
    <?php
    $nome = $_GET['nome'];
    $cidade = $_GET['cidade'];
    echo "Olá $nome, você mora em $cidade.";
    ?>
</body>
</html>