const form = document.querySelector("form");
const resultado = document.querySelector("h3")

form.addEventListener("submit", (e) => {
    const base = form.inBase.value;
    const expoente = form.inExpoente.value;
    const raiz = form.inRaiz.value;
    const resultadoPotencia = Math.pow(base, expoente);
    const resultadoRaiz = Math.sqrt(raiz);

    resultado.innerText = `O resultado da potência: ${resultadoPotencia} - Resultado da raiz: ${resultadoRaiz}`;

    e.preventDefault();
})