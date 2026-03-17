<?php

require "arduino.php";

// MUDE A PORTA COM AQUI
$arduino = new Arduino("COM5");

$arduino->ligar();

echo "LED LIGADO";
