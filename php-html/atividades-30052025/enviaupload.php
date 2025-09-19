<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Trabalhando com Arquivos</title>
</head>
<body>
    <form enctype="multipart/form-data" action="recebeupload.php" method="POST">
        <input type="hidden" name="tamanho_arquivo" value="30000" />
        <p>
            Digite uma informação do arquivo: <input type="text" name="info" size="20">
        </p>
        <p>
            Arquivo: <input type="file" name="arquivo"/>
        </p>
        <p>
            <input type="submit" value="Enviar" /><input type="reset" value="Limpar"/>
        </p>
    </form>    
</body>
</html>