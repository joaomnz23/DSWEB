
var divResposta = document.getElementById("resposta")

var inputProdutos = document.getElementById("produtos")
var inputQuantidade = document.getElementById("quantidade")

const resultadoTotal = document.getElementById("resultado-total")

// 1. Obtém os parâmetros da URL
const urlParams = new URLSearchParams(window.location.search);
// 2. Pega o valor específico de uma chave
const id = urlParams.get('id');

var tituloPedido = document.getElementById("pedidoTitulo");
tituloPedido.innerHTML = `Pedido #${id}`


document.addEventListener('DOMContentLoaded', () => {
    getPedidoItem();
    getProdutos();
});

document.getElementById('botaoEnviar').addEventListener('click', postPedidoItem)

async function getProdutos() {
    try {
        // Faz a requisição para a rota de produtos
        var requisicao = await fetch("http://localhost/cafeteria-api/produtos");
        var resposta = await requisicao.json();

        // Verifica se a API retornou sucesso conforme o seu PHP
        if (resposta.status === 'success') {

            // Mapeia o array 'data' retornado pelo PHP para criar as tags <option>
            const opcoes = resposta.data.map(produtos =>
                `<option value="${produtos.id}">${produtos.nome}</option>`
            ).join("");

            // Insere uma opção padrão seguida das opções vindas do banco
            inputProdutos.innerHTML = `<option value="" disabled selected>Selecione um produto...</option>` + opcoes;

        } else {
            inputProdutos.innerHTML = `<option value="">Erro ao carregar produtos</option>`;
            console.error("Erro da API:", resposta.message);
        }

    } catch (erro) {
        console.error('Algo deu errado ao buscar produtos: ', erro);
        inputProdutos.innerHTML = `<option value="">Erro de conexão</option>`;
    }
}

async function getPedidoItem() {
    try {
        var requisicao = await fetch("http://localhost/cafeteria-api/pedido-item/" + id)
        var resposta = await requisicao.json()

        console.log(resposta)

        // Gera as linhas automaticamente para todos os itens do array
        const linhas = resposta.data.map(item => `
        <tr>
            <td>${item.id}</td>
            <td>${item.pedido_id}</td>
            <td>${item.produto_id}</td>
            <td>${item.quantidade}</td>
            <td>${item.preco}</td>
            <td>
                <button class="button button-enviar" onclick="deletePedidos(${item.id})">Deletar</button>
            </td>
        </tr>
    `).join("");

        console.log(linhas)
        divResposta.innerHTML = `
        <table class="sua-classe">
            <thead>
                <tr>
                    <th colspan="6" ><center>Produtos do Pedido</center></th>
                </tr>
                <tr>
                    <th>ID</th>
                    <th>ID do Pedido</th>
                    <th>ID do Produto</th>
                    <th>Quantidade</th>
                    <th>Preço</th>
                    <th>Opções</th>
                </tr>
            </thead>
            <tbody>
                ${linhas}
            </tbody>
        </table>
    `;

        calculoTotal();
    }
    catch (error) {
        console.error('Algo deu errado: ', error);
    }


}

async function postPedidoItem() {
    try {
        var requisicao = await fetch("http://localhost/cafeteria-api/pedido-item", {
            method: "POST",
            body: JSON.stringify
                (
                    {
                        pedido_id: id,
                        produto_id: inputProdutos.value,
                        quantidade: inputQuantidade.value,
                    }
                )
        })

        var resposta = await requisicao.json()
        console.log(resposta)

        //Limpa o campo
        inputQuantidade.value = ""


        getPedidoItem()
    }
    catch (error) {
        console.error('Algo deu errado: ', error);
    }
}


async function deletePedidos(id) {
    try {
        var requisicao = await fetch("http://localhost/cafeteria-api/pedido-item/" + id, {
            method: "DELETE"
        })

        var resposta = await requisicao.json()
        console.log(resposta)

        getPedidoItem()
    }
    catch (error) {
        console.error('Algo deu errado: ', error);
    }

}

async function calculoTotal() {
    try {
        var requisicao = await fetch("http://localhost/cafeteria-api/pedido-item/" + id);
        var resposta = await requisicao.json();

        let totalPedido = 0;

        // Soma os subtotais
        resposta.data.forEach(item => {
            totalPedido += item.quantidade * item.preco;
        });

        // Exibe o total no elemento (use innerText ou innerHTML corretamente)
        resultadoTotal.innerText = `Total do pedido: R$ ${totalPedido.toFixed(2)}`;

    } catch (error) {
        console.error("Erro ao calcular total:", error);
        resultadoTotal.innerText = "Erro ao calcular total";
    }
}