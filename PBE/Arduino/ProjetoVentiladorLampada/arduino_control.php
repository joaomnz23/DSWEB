<?php
require "arduino.php";

$led = new Arduino("COM4");

if (isset($_GET['acao'])) {
    if ($_GET['acao'] === 'ligarLampada') {
        $led->ligarLampada();
        echo "LÂMPADA LIGADA";
    } elseif ($_GET['acao'] === 'desligarLampada') {
        $led->desligarLampada();
        echo "LÂMPADA DESLIGADA";
    } elseif ($_GET['acao'] === 'piscarLampada') {
        $led->piscarLampada();
        echo "LÂMPADA PISCANDO";
    } elseif ($_GET['acao'] === 'ligarVentilador') {
        $led->ligarVentilador();
        echo "VENTILADOR LIGADO";
    } elseif ($_GET['acao'] === 'desligarVentilador') {
        $led->desligarVentilador();
        echo "VENTILADOR DESLIGADO";
    } else {
        echo "AÇÃO INVÁLIDA";
    }
} else {
    echo "Nenhuma ação informada";
}
