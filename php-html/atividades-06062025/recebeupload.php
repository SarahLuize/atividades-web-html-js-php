<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trabalhando com Arquivos</title>
</head>

<body>
    <?php
    echo "<pre>";
    if (is_uploaded_file($_FILES['arquivo']['tmp_name'])) {
        $info_arquivo = isset($_POST['info']) ? $_POST['info'] : "não há";
        $nome_arquivo = $_FILES['arquivo']['name'];
        $tamanho_arquivo = $_FILES['arquivo']['size'];
        $tipo_arquivo = $_FILES['arquivo']['type'];
        $caminho_temporario = $_FILES['arquivo']['tmp_name'];

        echo "Informação auxiliar do arquivo: <b>".$info_arquivo."</b><br>";
        echo "Informação do arquivo - nome: <b>".$nome_arquivo."</b><br>";
        echo "Informação do arquivo - tipo (MIME): <b>".htmlspecialchars($tipo_arquivo)."</b><br>";
        echo "Informação do arquivo - tamanho: <b>".$tamanho_arquivo."</b><br>";

        $diretorio_destino = 'C:/xampp/htdocs/06062025/uploaded-files/';

        $nome_salvo = basename($nome_arquivo);
        $caminho_completo_destino = $diretorio_destino . $nome_salvo;

        if (move_uploaded_file($caminho_temporario, $caminho_completo_destino)) {
            echo "<p style='color: green;'>Arquivo enviado e salvo com sucesso em: <b>" . htmlspecialchars($caminho_completo_destino) . "</b></p>";
        } else {
            echo "<p style='color: red;'>Erro ao mover o arquivo para o diretório de destino.</p>";
        }
    } else {
        echo "Upload inválido! Segue informações sobre o mesmo:<br>";
        print_r($_FILES);
    }
    echo "</pre>";
    ?>
</body>

</html>