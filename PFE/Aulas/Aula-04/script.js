// Criando contador de itens
var contadorItem = 0;

function addLista(){
    // Incrementando contador de itens
    contadorItem ++;

    // Crio o item
    let novoItem = document.createElement("li");
    let novaTarefa = document.getElementById("novaTarefa").value;

    // Adiciono texto ao item
    novoItem.textContent = contadorItem + " - " + novaTarefa;

    // Atribuo um ID
    novoItem.setAttribute("id", contadorItem);
    
    // Cria o botão remover
    let botaoRemover = document.createElement("button");
    botaoRemover.textContent = "Remover";
    botaoRemover.setAttribute("onclick", `delLista(${contadorItem})`);

    // Adiciona o botão na linha e cria a linha
    novoItem.appendChild(botaoRemover);
    document.getElementById("lista").appendChild(novoItem);

}

function delLista(itemLista) {
    var item = document.getElementById(itemLista);
    document.getElementById("lista").removeChild(item);
}