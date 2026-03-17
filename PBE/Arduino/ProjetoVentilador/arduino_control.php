<?php
require "arduino.php";

$ventilador = new Arduino("COM4");

if (isset($_GET['acao'])) {
    if ($_GET['acao'] === 'ligar') {
        $ventilador->ligar();
        echo "LIGADO";
    } elseif ($_GET['acao'] === 'desligar') {
        $ventilador->desligar();
        echo "DESLIGADO";
    } else {
        echo "AÇÃO INVÁLIDA";
    }
} else {
    echo "Nenhuma ação informada";
}
