const form = document.querySelector("form");
const resp = document.querySelector("h3");

form.addEventListener("submit", (e) => {
    const nome = form.inNome.value;
    const idade = form.inIdade.value; 

    resp.innerText = `Olá ${nome} - Sua idade é: ${idade}`;
    
    e.preventDefault();
});
