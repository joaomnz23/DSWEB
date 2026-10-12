// Selecionando elementos
var area = document.getElementById("area");
var mensagem = document.getElementById("mensagem");
var posicao = document.getElementById("posicao");
var resultado = document.getElementById("resultado");
var timerDisplay = document.getElementById("timer");

var pontos = 0;
var jogoAtivo = false;
var tempoRestante = 15;
var timerInterval = null;

// Função para atualizar o display do timer
function atualizarTimer() {
    timerDisplay.textContent = "Tempo: " + tempoRestante + "s";
}

// Função para parar o timer (se estiver rodando)
function pararTimer() {
    if (timerInterval) {
        clearInterval(timerInterval);
        timerInterval = null;
    }
}

// Função para iniciar o timer
function iniciarTimer() {
    pararTimer(); // Garante que não haja outro timer rodando
    tempoRestante = 15;
    atualizarTimer();
    timerInterval = setInterval(function () {
        tempoRestante--;
        atualizarTimer();

        if (tempoRestante <= 0) {
            // Tempo esgotado: encerra o jogo
            pararTimer();
            jogoAtivo = false;
            mensagem.textContent = "Tempo esgotado! Pressione R para reiniciar.";
            area.style.background = "#ffffff";
            // Não zera os pontos aqui, apenas desativa
            resultado.textContent = "Pontos: " + pontos; // mantém os pontos para referência
            // Opcional: desabilitar contagem
        }
    }, 1000);
}

// Função para reiniciar tudo (usada pela tecla R)
function reiniciarJogo() {
    pararTimer();
    pontos = 0;
    jogoAtivo = false;
    tempoRestante = 15;
    atualizarTimer();
    mensagem.textContent = "Jogo reiniciado! Entre na área para recomeçar.";
    resultado.textContent = "Pontos: 0";
    area.style.background = "#ffffff";
    posicao.textContent = "";
}

// Mouse entra = começa o jogo e inicia o timer
area.addEventListener("mouseenter", function () {
    // Se já houver um jogo ativo (por exemplo, se o mouse saiu e entrou de novo), reinicia o timer
    // Mas vamos sempre reiniciar o timer ao entrar
    jogoAtivo = true;
    mensagem.textContent = "Contagem iniciada! CLIQUE!";
    area.style.background = "#60f0f5fa";
    iniciarTimer(); // Inicia o timer (sempre reseta para 15)
    area.style.color = "black";
});

// Clique = ganha ponto
area.addEventListener("click", function () {
    if (jogoAtivo) {
        pontos++;
        resultado.textContent = "Pontos: " + pontos;

        if(pontos == 100){
            pararTimer();

            jogoAtivo = false;

            mensagem.textContent = "PARABÉNS, VOCÊ GANHOU!";
            area.style.background = "#4CAF50";
            area.style.color = "white";
            timerDisplay.textContent = "VITÓRIA! 100 PONTOS ALCANÇADOS!";
        }
    }
});

// Saiu da área = perdeu (para o timer e reseta)
area.addEventListener("mouseleave", function () {
    if (jogoAtivo) {
        jogoAtivo = false;
        mensagem.textContent = "Você saiu! Contagem encerrada.";
        area.style.background = "#ffffff";
        pararTimer();
        pontos = 0; // zera os pontos ao sair
        resultado.textContent = "Pontos: 0";
        posicao.textContent = "";
        tempoRestante = 15; // reseta o timer visualmente
        atualizarTimer();
    }
});

// Tecla R = reinicia tudo
document.addEventListener("keydown", function (event) {
    if (event.key === "r" || event.key === "R") {
        reiniciarJogo();
    }
});