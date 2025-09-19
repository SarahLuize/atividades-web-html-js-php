<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>

<body>
    <?php
    $nome = isset($_POST['nome']) ? $_POST['nome'] : "";
    $cidade = isset($_POST['cidade']) ? $_POST['cidade'] : "";
    $transporte = isset($_POST['cidade']) ? $_POST['transporte'] : "";
    echo "Olá $nome, você mora em $cidade e anda de $transporte.";
    ?>
</body>

</html>