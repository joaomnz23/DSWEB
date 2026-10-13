<?php

class Arduino
{
    private $porta;

    public function __construct($porta)
    {
        $this->porta = $porta;
    }

    private function enviarComando($comando)
    {
        $cmd = "mode " . $this->porta . " BAUD=9600 PARITY=N DATA=8 STOP=1 & echo " . $comando . " > " . $this->porta;
        exec($cmd);
    }

    public function ligar()
    {
        $this->enviarComando("L");
    }
    public function desligar()
    {
        $this->enviarComando("D");
    }
}
