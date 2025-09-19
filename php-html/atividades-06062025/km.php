<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trabalhando com conversão de quiômetros para milhas</title>

    <script>
        function valida() {
            var valor = document.forms["conversao"]["km"].value;
            if (valor == null || valor == "") {
                alert("Favor informar o valor a ser convertido!");
                return false;
            } else if (isNaN(valor)) {
                alert("O valor informado não é um número!");
                return false;
            } else {
                return true;
            }
        }
    </script>

</head>
<body>

<?php const MILHA_CONVERSAO = 0.6214; ?>
        <?php
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
             ?>

             <form name="conversao" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
             Quilômetros: <input type="text" name="km" /><br /> <input type="submit" value="Converter para milhas!" onclick="return valida();"/>
            </form>
            <?php     
            } else if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $km = isset($_POST['km']) ? $_POST['km'] : 0;
                $milhas = $km * MILHA_CONVERSAO;
                printf("%.2f km é %.2f m", $km, $milhas);
            } else {
                exit("Esse script trabalha apenas com as requisições GET e POST.");
            }
        ?>
</body>
</html>