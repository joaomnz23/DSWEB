<?php

require "arduino.php";

// Altere para a porta COM do seu microcontrolador
$arduino = new Arduino("COM5");

$arduino->ligar();

echo "LED LIGADO";
