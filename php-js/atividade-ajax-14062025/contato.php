<?php

if (isset($_GET["txtNome"])) {
    $nome = $_GET["txtNome"];

    //conexao com o banco de dados
    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $base = "ajax";

    $conexao = mysqli_connect($servidor, $usuario, $senha)
        or die("Erro na conexão!");

    mysqli_select_db($conexao, $base);

    //verifica se a variável está vazia

    if (empty($nome)) {
        $sql = "select * from contato";
    } else {
        $nome .= "%";
        $sql = "select * from contato where nome like '$nome'";
    }
    sleep(1);

    $resultado = mysqli_query($conexao, $sql);
    $contador = mysqli_affected_rows($conexao);

    if ($contador > 0) {
        $tabela = "<table class='table table-striped table-hover'>
                   <thead>
                   <tr>
                        <th>Nome</th>
                        <th>Telefone</th>
                        <th>Celular</th>
                        <th>E-mail</th>
                   </tr>
                   </thead> 
                   <tbody>
                   <tr>";
        $retorno = "$tabela";

        while ($linha = mysqli_fetch_array($resultado)) {
            $retorno .= "<td>" . $linha["nome"] . "</td>";
            $retorno .= "<td>" . $linha["fone"] . "</td>";
            $retorno .= "<td>" . $linha["celular"] . "</td>";
            $retorno .= "<td>" . $linha["email"] . "</td>";
        }
        echo $retorno .= "</tbody></table>";
    } else {
        echo "Não foram encontrador registros!";
    }
}
