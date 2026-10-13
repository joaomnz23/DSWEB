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

    public function ligarLampada()
    {
        $this->enviar('l');
    }

    public function desligarLampada()
    {
        $this->enviar('d');
    }

    public function piscarLampada(){
        $this->enviar('p');
    }

    public function ligarVentilador(){
        $this->enviar('v');
    }

    public function desligarVentilador(){
        $this->enviar('c');
    }
}