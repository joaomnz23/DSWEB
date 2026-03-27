<?php

require "arduino.php";

$arduino = new Arduino("COM5");

$arduino->desligar();

echo "LED DESLIGADO";
