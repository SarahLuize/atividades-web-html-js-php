const frm = document.querySelector("form");
const resp1 = document.querySelector("#outLista");
const resp2 = document.getElementById("outOrdem");

const numeros = [];

frm.addEventListener("submit", (e) => {
    e.preventDefault();
    const num = Number(frm.inNum.value); //10

    if (numeros.includes(num)) {
        alert(`Insira outro número! Você já adicionou o ${num}`);
        frm.reset();
        frm.inNum.focus();
        return;
    }

    numeros.push(num);

    resp1.innerText = "Números: " + numeros.join(" , ");
    resp2.innerText = "";

    frm.inNum.value = "";
    frm.inNum.focus();
});

frm.btVerificar.addEventListener("click", () => {

    if (numeros.length == 0) {
        alert("Não há números na lista...");
        frm.inNum.focus();
        return;
    }

    let ordem = true;

    for (let i = 0; i < numeros.length; i++) {

        if (numeros[i] > numeros[i + 1]) {
            ordem = false;
            break;
        }
    }

    resp2.innerText = ordem ? "Ok! Números estão em ordem crescente"
        : "Atenção não estão em ordem crescente.";
});

frm.btOrdenar.addEventListener("click", () => {
    numeros.sort(function (a, b) {
        return a - b;
    });
    resp1.innerText = "Números: " + numeros.join(" , ");
});

frm.btLimpar.addEventListener("click", () => {
    frm.inNum.value = "";
    frm.inNum.focus();
    resp1.innerText = "";
    resp2.innerText = "";
    numeros = [];


});