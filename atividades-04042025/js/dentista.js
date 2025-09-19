const form = document.querySelector("form");
const respNome = document.querySelector("span");
const respLista = document.querySelector("pre");

const pacientes = [] // declara vetor global

form.addEventListener("submit", (e) => {
    e.preventDefault();

    const nome = form.inPaciente.value; // Obtém nome do paciente
    pacientes.push(nome);               // Adiciona o nome no final do vetor
    let lista = "";                     // String para concatenar pacientes
    for(let i = 0; i < pacientes.length; i++){ 
        lista += `${i + 1}. ${pacientes[i]} \n}`;
    }
    
    respLista.innerText = lista;    //Exibe a lista de pacientes na página 
    form.inPaciente.value = "";     // Limpa conteúdo do campo de formulário
    form.inPaciente.focus();        // Posiciona o cursor no campo
});