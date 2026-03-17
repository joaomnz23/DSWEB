<?php

class Arduino
{
    private $porta;

    public function __construct($porta)
    {
        $this->porta = $porta;
    }


    private function enviar($comando)
    {
        $cmd = "echo " . $comando . " > " . $this->porta;
        exec($cmd);
    }

    public function ligar()
    {
        $this->enviar('l');
    }

    public function desligar()
    {
        $this->enviar('d');
    }

    public function piscar(){
        $this->enviar('p');
    }
}