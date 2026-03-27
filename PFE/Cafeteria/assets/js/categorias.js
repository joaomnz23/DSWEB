var divResposta = document.getElementById("resposta")


document.addEventListener('DOMContentLoaded', getCategorias)

async function getCategorias() {
    var requisicao = fetch('http://localhost/Cafeteria-API/categorias');
    console.log(requisicao);
}