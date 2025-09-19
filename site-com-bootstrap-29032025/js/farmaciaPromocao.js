const form = document.querySelector("form");
const resp = document.querySelector("h2");

form.addEventListener("submit", (e) => {
    e.preventDefault();

    const medicamento = form.inNome.value;
    const preco = Number(form.inPreco.value);
    let desconto = Number(Math.trunc(preco * 2));

    resp.innerText = `Medicamento : ${medicamento} . Preço : R$ ${preco.toFixed(2)} , levando dois : R$ ${desconto.toFixed(2)}`;

});