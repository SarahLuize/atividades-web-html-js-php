<!doctype html>
<html lang="pt">

<head>
    <title>Consulta Ajax</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
        name="viewport"
        content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.2.1 -->
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
        crossorigin="anonymous" />
</head>

<body>
    <div id="container">
        <h1>Agenda de Contatos Utilizando Ajax</h1>
        <hr>
        <h2>Pesquisar Contato:</h2>
        <div id="pesquisar">
            Informe o nome:
            <input type="text" name="txtNome" id="txtNome" />
            <input type="button" name="btnPesquisar" value="Pesquisar"
                onclick="getDados();" />
        </div>
        <h2>Resultados da pesquisa:</h2>
        <div id="resultado"></div>
        <hr>
    </div>
    <script type="text/javascript" src="./js/ajax.js"></script>
</body>

</html>