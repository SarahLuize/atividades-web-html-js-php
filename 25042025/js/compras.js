const form = document.querySelector("form");
const resp = document.querySelector("pre");

form.addEventListener("submit", (e) => {
    e.preventDefault();

    const produto = form.inProduto.value;

    // se houver dados salvos
    if (localStorage.getItem("comprasProduto")) {
        const produtos = localStorage.getItem("comprasProduto").split(";");
        // obtém itens separando-os em elementos de vetor
        produtos.push(produto);

        // classifica o vetor
        produtos.sort();

        //salva vetor classificado (com elementos separados por "")
        localStorage.setItem("comprasProduto", produtos.join(";"));
    } else {
        // senão (é a primeira inclusão), salva apenas o produto
        localStorage.setItem("comprasProduto", produto);
    }
    listarProdutos();

    form.reset();       // ou form.inProduto.value = ""
    form.inProduto.focus();
});

const listarProdutos = () => {
    if (!localStorage.getItem("comprasProduto")) {
        resp.innerText = "";
        return;
    }

    const produtos = localStorage.getItem("comprasProduto").split(";");

    resp.innerText = `Produtos Adicionados\n-------------------------\n${produtos.join("\n")}`;
}
window.addEventListener("load", listarProdutos);

form.btLimpar.addEventListener("click", () => {
    if (localStorage.getItem("comprasProduto")) {
        if (confirm("Deseja realmente excluir todos os itens da lista?")) {
            localStorage.removeItem("comprasProduto");
            listarProdutos();
        }
    } else {
        alert("Lista está vazia...");
    }
    form.inProduto.focus();
});