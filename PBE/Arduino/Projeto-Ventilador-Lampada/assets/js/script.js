lampada = document.getElementById("lampada");
ventilador = document.getElementById("ventilador");

function enviar(acao) {
    fetch('arduino_control.php?acao=' + acao)
        .then(response => response.text())
        .then(data => { console.log("Resposta do Arduino: " + data); })

    if (acao == 'ligarLampada') {
        lampada.setAttribute("src", "assets/img/lampada_acesa.png");
    }
    if (acao == 'desligarLampada') {
        lampada.setAttribute("src", "assets/img/lampada_apagada.png");
    }
    if (acao == 'piscarLampada') {
        lampada.setAttribute("src", "assets/img/lampada_piscando.gif");
    }
    if (acao == 'ligarVentilador') {
        ventilador.setAttribute("src", "assets/img/ventilador-ligado.gif");
    }
    if (acao == 'desligarVentilador') {
        ventilador.setAttribute("src", "assets/img/ventilador-desligado.png");
    }
};