/*
var numero1 = "10";
var numero2 = 50;
console.log(numero1 + numero2);
*/

/*
var resposta = window.confirm("Deseja continuar?");
if (resposta == true){
    console.log("Confirmado");  
} else {
    console.log("Cancelado");
}   
*/

/*
let apagar = window.confirm("Tem certeza que deseja apagar?");
if (apagar) 
{
    alert("Item apagado!");
    console.log("Item apagado!");
    document.body.innerHTML = "<h1>Item apagado!</h1>"
}
else 
{
    alert("Ação cancelada.");
    console.log("Ação cancelada.");
}
*/

/*
var nome = prompt("Digite seu nome:");
console.log(nome);
document.body.innerHTML = nome;
*/

/*
var n1 = Number(prompt("Digite o primeiro número:"));

var n2 = Number(prompt("Digite o segundo número:"));

console.log(n1 + n2);
*/

let nome = prompt("Qual é o seu nome?");

if (nome == null){
    alert("Você cancelou.");
    console.log("Você cancelou");
}
else
{
    alert("Olá, " + nome + "!");
    console.log("Olá, " + nome + "!");
}