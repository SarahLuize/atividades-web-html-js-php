<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Trabalhando com Arquivos</title>
</head>
<body>
    <?php
    echo "<pre>";
    if (is_uploaded_file($_FILES['arquivo']['tmp_name'])) {
        $info_arquivo = isset($_POST['info']) ? $_POST['info'] : "Não há";
        $nome_arquivo = $_FILES['arquivo']['name'];
        $tamanho_arquivo = $_FILES['arquivo']['size'];

        echo "Informação auxiliar arquivo info : <b>" . $info_arquivo . ". </b> <br>";
        echo "Informação do arquivo nome : <b>" . $nome_arquivo . ". </b> <br>";
        echo "Informação do arquivo tamanho : <b>" . $tamanho_arquivo . ". </b> <br>";
    } else {
        echo "Upload inválido! Segue informações sobre o mesmo: <br>";
        print_r($_FILES);
    }
    echo "</pre>";
    ?>
</body>
</html>