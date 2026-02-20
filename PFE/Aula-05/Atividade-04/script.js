// Selecionando elementos
var area = document.getElementById("area");
var mensagem = document.getElementById("mensagem");
var posicao = document.getElementById("posicao");
var resultado = document.getElementById("resultado");

var pontos = 0;
var jogoAtivo = false;


// Mouse entra = começa o jogo
area.addEventListener("mouseenter", function(){
    jogoAtivo = true;
    mensagem.textContent = "Contagem iniciada! CLIQUE!";
    area.style.background = "#60f0f5fa";
});


// Clique = ganha ponto
area.addEventListener("click", function(){
    if(jogoAtivo){
        pontos++;
        resultado.textContent = "Pontos: " + pontos;
    }
});


// Saiu da área = perdeu
area.addEventListener("mouseleave", function(){
    jogoAtivo = false;
    mensagem.textContent = "Você saiu! Contagem encerrada.";
    area.style.background = "#ffffff";
    pontos = 0;
    posicao.textContent = "";
});


// Tecla R = reinicia
document.addEventListener("keydown", function(event){
    if(event.key === "r"){
        pontos = 0;
        jogoAtivo = false;
        mensagem.textContent = "Jogo reiniciado! Entre na área para recomeçar.";
        resultado.textContent = "Pontos: 0";
        area.style.background = "#ffffff";
    }
});