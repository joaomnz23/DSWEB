
var divResposta = document.getElementById("resposta")

var inputCliente = document.getElementById("cliente")

document.addEventListener('DOMContentLoaded', getPedidos)
document.getElementById('botaoEnviar').addEventListener('click', postPedidos)

async function getPedidos() {
    try {
        var requisicao = await fetch("http://localhost/cafeteria-api/pedidos")
        var resposta = await requisicao.json()

        console.log(resposta)

        // Gera as linhas automaticamente para todos os itens do array
        const linhas = resposta.data.map(item => `
        <tr>
            <td>${item.id}</td>
            <td>${item.cliente}</td>
            <td>${item.total}</td>
            <td>${item.criado_em}</td>
            <td>
                <a href="pedido-item.html?id=${item.id}"><button class="button button-enviar" onclick="">Visualizar</button></a>
                <button class="button button-enviar" onclick="deletePedidos(${item.id})">Deletar</button>
            </td>
        </tr>
    `).join("");

        console.log(linhas)
        divResposta.innerHTML = `
        <table class="sua-classe">
            <thead>
                <tr>
                    <th colspan="5" ><center>Pedidos Cadastrados</center></th>
                </tr>
                <tr>
                    <th>ID</th>
                    <th>Cliente</th>
                    <th>Total</th>
                    <th>Data do Pedido</th>
                    <th>Opções</th>
                </tr>
            </thead>
            <tbody>
                ${linhas}
            </tbody>
        </table>
    `;
    }
    catch (error) {
        console.error('Algo deu errado: ', error);
    }


}

async function postPedidos() {
    try {
        var requisicao = await fetch("http://localhost/cafeteria-api/pedidos", {
            method: "POST",
            body: JSON.stringify(
                {
                    cliente: inputCliente.value
                }
            )
        })

        var resposta = await requisicao.json()
        console.log(resposta)

        //Limpa o campo
        inputCliente.value = ""

        getPedidos()
    }
    catch (error) {
        console.error('Algo deu errado: ', error);
    }
}


async function deletePedidos(id) {
    try {
        var requisicao = await fetch("http://localhost/cafeteria-api/pedidos/" + id, {
            method: "DELETE"
        })

        var resposta = await requisicao.json()
        console.log(resposta)

        getPedidos()
    }
    catch (error) {
        console.error('Algo deu errado: ', error);
    }

}
