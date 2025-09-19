const form = document.querySelector("form");
const resp = document.querySelector("h2");

form.addEventListener("submit", (e) => {
    e.preventDefault();

    const clienteMin = Number(form.inUsoCliente.value);
    const fracoesMin = Math.ceil(clienteMin / 15);
    const preco = fracoesMin * 3;

    resp.innerText = `Minutos usados : ${clienteMin} , R$ ${preco.toFixed(2)}`;
});