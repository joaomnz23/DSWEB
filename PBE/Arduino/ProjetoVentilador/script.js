const ventilador = document.getElementById("ventilador");
const mensagem = document.getElementById("mensagem")

ventilador.addEventListener("click", function (event) {
    const cliques = event.detail;

    if (cliques === 1) {
        fetch('arduino_control.php?acao=ligar');
        ventilador.setAttribute("src", "ventilador-ligado.gif");
        console.log("VENTILADOR LIGADO");
    }
    else if (cliques === 2) {
        fetch('arduino_control.php?acao=desligar');
        ventilador.setAttribute("src", "ventilador-desligado.png");
        console.log("VENTILADOR DESLIGADO");
    }
});