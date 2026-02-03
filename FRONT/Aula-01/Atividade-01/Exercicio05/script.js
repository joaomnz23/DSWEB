var C = Number(prompt("Digite o capital incial de investimento: "));
var T = Number(prompt("Digite o tempo, em meses, do investimento: "));
var I = Number(prompt("Digite a taxa de juros (ex: 0.02 para 2%): "));

var M = C*(1+I)**T;
var MFormat = M.toLocaleString('pt-br', {style: 'currency', currency: 'BRL'});

alert("O resultado do seu investimento é de: " + MFormat);