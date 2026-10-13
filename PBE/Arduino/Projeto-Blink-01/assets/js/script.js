lampada = document.getElementById("lampada");

function enviar(acao) {
    fetch('arduino_control.php?acao=' + acao)
        .then(response => response.text())
        .then(data => { console.log("Resposta do Arduino: " + data); })

    if (acao == 'ligar'){
        lampada.setAttribute("src", "assets/img/lampada_acesa.png");
    }
    if (acao == 'desligar') {
        lampada.setAttribute("src", "assets/img/lampada_apagada.png");
    }
    if (acao == 'piscar'){
        lampada.setAttribute("src", "assets/img/lampada_piscando.gif");
    }
    };