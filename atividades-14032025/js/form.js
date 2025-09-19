//Criar handlers/manipuladores para objetos da página
const form = document.querySelector("form");
const resp = document.querySelector("h3");

form.addEventListener("submit", (e) => {
    const nome = form.inNome.value;
    console.log(nome);
    resp.innerText = `Oi ${nome}, tudo bem?`;
    e.preventDefault();
});