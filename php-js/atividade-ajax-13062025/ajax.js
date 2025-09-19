function showHint(str) {
    if (str.length == 0) {
        document.getElementById("txt-hint").innerHTML = "";
        return;
    } else {
        const xmlhttp = new XMLHttpRequest();

        xmlhttp.onload = function () {
            document.getElementById("txt-hint").innerHTML = this.responseText;
        }
        xmlhttp.open("GET", "dados.php?q=" + str);
        xmlhttp.send();
    }
}