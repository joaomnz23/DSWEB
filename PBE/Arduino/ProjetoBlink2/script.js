const lampada = document.getElementById("lampada");

lampada.addEventListener("click", function (event) {
    const cliques = event.detail;

    if (cliques === 1) {
        fetch('arduino_control.php?acao=ligar');
        lampada.setAttribute("src", "lampada_acesa.png");
        console.log("Ligado");
    } 
    else if (cliques === 2) {
        fetch('arduino_control.php?acao=desligar');
        lampada.setAttribute("src", "lampada_apagada.png");
        console.log("Desligado");
    } 
    else if (cliques === 3) {
        fetch('arduino_control.php?acao=piscar');
        lampada.setAttribute("src", "lampada_piscando.gif");
        console.log("Piscando");
    }
});