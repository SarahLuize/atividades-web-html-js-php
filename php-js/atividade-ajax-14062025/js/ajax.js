function criaRequest() {
    let request;

    try {
        request = new XMLHttpRequest();
    } catch (IEAtual) {
        try {
            request = new ActiveXObject("Msxml2.XMLHTTP");
        } catch (IEAntigo) {
            try {
                request = new ActiveXObject("Microsoft.XMLHTTP");
            } catch (falha) {
                request = false;
            }
        }
    }

    if (!request) {
        alert("Seu Navegador não suporta Ajax!");
    } else {
        return request;
    }
}

function getDados() {
    let nome = document.getElementById("txtNome").value;
    let resultado = document.getElementById("resultado");
    let xmlreq = criaRequest();

    resultado.innerHTML = "<img src='./img/processo.gif'>";

    xmlreq.open("GET", "contato.php?txtNome" + nome, true);

    xmlreq.onreadystatechange = function () {
        if (xmlreq.readyState == 4) {
            if (xmlreq.status == 200) {
                resultado.innerHTML = xmlreq.responseText;
            } else {
                resultado.innerHTML = "Erro: " + xmlreq.statusText;
            }
        }
    }
}