// FUNÇÕES EM JAVASCRIPT

function somarNumeros (num1, num2){

    return num1 + num2;

}

let resultado = somarNumeros(5,10);
console.log(resultado);

resultado = somarNumeros(50, 100);
console.log(resultado);

function calcFrete (dist, peso) {

    return (dist * 0.5) + (peso *2);

}

let frete1 = calcFrete(25, 53);
let frete2 = calcFrete(14, 23);

console.log("Frete 1 - R$: " + frete1);
console.log("Frete 2 - R$: " + frete2);

// TRABALHANDO COM DATA E HORA

let dataAtual = new Date();
console.log(dataAtual);
console.log(dataAtual.toISOString());

let ano = dataAtual.getFullYear();
let mes = dataAtual.getMonth();
let dia = dataAtual.getDay();
let hora = dataAtual.getHours();
let minuto = dataAtual.getMinutes();
let segundo = dataAtual.getSeconds();

console.log(`${dia}/${mes}/${ano} ${hora}:${minuto}:${segundo}`);

// ==================================================================
// NOVO USO DE DATA
let hoje = new Date();
let diasParaAdicionar = 7;

// Cria uma nova data a partir da data atual
let novaData = new Date(hoje);
novaData.setDate(novaData.getDate() + diasParaAdicionar);

// toLocaleDateString = Exibe a data no formato local (DIA/MÊS/ANO)
console.log(novaData.toLocaleDateString());

// =============================== 
// SUBTRAÇÃO DE DATAS
let data1 = new Date('2025-03-19');
let data2 = new Date('2025-03-25');

// Diferença em milissegundos
let diferencaMs = data2 - data1;
console.log(`${data2.toLocaleDateString()} - ${data1.toLocaleDateString()}`);

// Convertendo para dias
let diferencaDias = diferencaMs / (1000 * 60 * 60 * 24);
console.log(`Diferença: ${diferencaDias} dias`);

// =======================
// MANIPULANDO O DOM
// Usando o InnerHTML 
document.getElementById("conteudo").innerHTML = "<p>Olá, mundo!</p>";

var valor = document.getElementById("conteudo").innerHTML;
console.log(valor);

// Usando o setAtributte
document.getElementById("foto").setAttribute("src", "imagem.jpg");

console.log(document.getElementById("foto").getAttribute("src"));

// Altearndo propriedades CSS
document.getElementById("conteudo").style.backgroundColor = "lightblue";
document.getElementById("foto").style.width = "200px";

// FUNÇÃO BOTÃO
function mudaTamanho(){
    document.getElementById("foto").style.width = "500px";
}