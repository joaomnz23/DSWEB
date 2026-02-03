var adicao1 = Number(prompt("Para conta de adição, digite o primeiro número: "));
var adicao2 = Number(prompt("Digite o segundo número: "));

alert("O resultado da adição é: " + (adicao1+adicao2));

var subt1 = Number(prompt("Para conta de subtração, digite o primeiro número: "));
var subt2 = Number(prompt("Digite o segundo número: "));

alert("O resultado da subtração é: " + (subt1-subt2));

var mult1 = Number(prompt("Para conta de multipicação, digite o primeiro número: "));
var mult2 = Number(prompt("Digite o segundo número: "));

alert("O resultado da multiplicação é: " + (mult1*mult2));

var div1 = Number(prompt("Para conta de divisão, digite o primeiro número: ")); 
var div2 = Number(prompt("Digite o segundo número: "));

if (div2 == 0 || div2 == null) {
    alert("Número inserido é inválido! Digite novamente");
    div2 = Number(prompt("Digite o segundo número: "));
    alert("O resultado da divisão é: " + (div1/div2));
} else {
    alert("O resultado da divisão é: " + (div1/div2));
}


