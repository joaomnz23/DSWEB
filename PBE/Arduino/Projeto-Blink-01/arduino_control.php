<?php
require "arduino.php";

// Altere para a porta COM do seu microcontrolador
$led = new Arduino("COM4");

if (isset($_GET['acao'])) {
    if ($_GET['acao'] === 'ligar') {
        $led->ligar();
        echo "LIGADO";
    } elseif ($_GET['acao'] === 'desligar') {
        $led->desligar();
        echo "DESLIGADO";
    } elseif ($_GET['acao'] === 'piscar'){
        $led->piscar();
        echo "PISCANDO";
    }
    
    else {
        echo "AÇÃO INVÁLIDA";
    }
} else {
    echo "Nenhuma ação informada";
}
