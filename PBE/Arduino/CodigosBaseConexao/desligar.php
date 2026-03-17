<?php

require "arduino.php";

// MUDE A PORTA COM AQUI
$arduino = new Arduino("COM5"); 

$arduino->desligar();

echo "LED DESLIGADO";
