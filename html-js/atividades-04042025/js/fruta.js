const frm = document.querySelector("form");
const resp = document.querySelector("h2");

frm.addEventListener("submit", (e) => {
    e.preventDefault();

    const numero = Number(frm.inNumero.value);
    const fruta = frm.inFruta.value;

    let resposta = "";

    for (let i = 0; i < numero; i++) {
        if (i < numero - 1) {
            resposta = resposta + fruta + " * ";
        } else {
            resposta = resposta + fruta + ".";
        }
    }
    resp.innerText = resposta;
});
