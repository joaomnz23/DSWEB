
var divResposta = document.getElementById("resposta");
var inputNome = document.getElementById("nome");
var inputPreco = document.getElementById("preco");
var inputCategoria = document.getElementById("categoria");

document.addEventListener('DOMContentLoaded', () => {
    getProdutos();
    getCategorias();
});

document.getElementById('botaoEnviar').addEventListener('click', postProduto)

async function getCategorias() {
    try {
        // Faz a requisição para a rota de categorias
        var requisicao = await fetch("http://localhost/Cafeteria-API/categorias");
        var resposta = await requisicao.json();

        // Verifica se a API retornou sucesso conforme o seu PHP
        if (resposta.status === 'success') {

            // Mapeia o array 'data' retornado pelo PHP para criar as tags <option>
            const opcoes = resposta.data.map(categoria =>
                `<option value="${categoria.id}">${categoria.nome}</option>`
            ).join("");

            // Insere uma opção padrão seguida das opções vindas do banco
            inputCategoria.innerHTML = `<option value="" disabled selected>Selecione uma categoria...</option>` + opcoes;

        } else {
            inputCategoria.innerHTML = `<option value="">Erro ao carregar categorias</option>`;
            console.error("Erro da API:", resposta.message);
        }

    } catch (erro) {
        console.error('Algo deu errado ao buscar categorias: ', erro);
        inputCategoria.innerHTML = `<option value="">Erro de conexão</option>`;
    }
}

async function getProdutos() {
    var requisicao = await fetch("http://localhost/Cafeteria-API/produtos")
    var resposta = await requisicao.json()

    console.log(resposta)

    // Gera as linhas automaticamente para todos os itens do array
    const linhas = resposta.data.map(item => `
        <tr>
            <td>${item.id}</td>
            <td>${item.nome}</td>
            <td>${item.preco}</td>
            <td>${item.categoria_id}</td>
            <td>${item.disponivel}</td>
            <td><button onclick="deleteProduto(${item.id})">Deletar</button></td>
        </tr>
    `).join("");

    console.log(linhas)
    divResposta.innerHTML = `
        <table class="sua-classe">
            <thead>
                <tr>
                    <th colspan="6" ><center>Produtos Cadastrados</center></th>
                </tr>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Preço</th>
                    <th>ID Categoria</th>
                    <th>Disponível</th>
                    <th>Opções</th>
                </tr>
            </thead>
            <tbody>
                ${linhas}
            </tbody>
        </table>
    `;
}

async function postProduto() {
    try {
        var requisicao = await fetch("http://localhost/Cafeteria-API/produtos", {
            method: "POST",
            body: JSON.stringify
                (
                    {
                        nome: inputNome.value,
                        preco: inputPreco.value,
                        categoria_id: inputCategoria.value,
                    }
                )
        })

        var resposta = await requisicao.json()
        console.log(resposta)

        //Limpa o campo
        inputNome.value = ""

        getProdutos()
    }
    catch (erro) {
        console.error('Algo deu errado: ', erro);
    }
}


async function deleteProduto(id) {
    try {
        var requisicao = await fetch("http://localhost/Cafeteria-API/produtos/" + id, {
            method: "DELETE"
        })

        var resposta = await requisicao.json()
        console.log(resposta)

        getProdutos()
    }
    catch (erro) {
        console.error('Algo deu errado: ', erro);
    }
}