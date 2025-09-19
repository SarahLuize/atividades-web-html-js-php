<!doctype html>
<html lang="pt">
    <head>
        <title>Ajax</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
    </head>

    <body>
       <p>Começe a digitar um nome no campo abaixo</p>
       <p>Sugestão: <span id="txt-hint"></span></p>
       <form>
            Nome: <input type="text" onkeyup="showHint(this.value)">
       </form>
       <script src="./ajax.js"></script>
    </body>
</html>
