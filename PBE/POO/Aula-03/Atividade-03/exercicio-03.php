<?php

class Fabricante
{
    public $nome;
    public $paisOrigem;

    public function __construct($nome, $paisOrigem)
    {
        $this->nome = $nome;
        $this->paisOrigem = $paisOrigem;
    }
}

class Motor
{
    public $potencia;
    public $combustivel;

    public function __construct($potencia, $combustivel)
    {
        $this->potencia = $potencia;
        $this->combustivel = $combustivel;
    }
}

class Carro
{
    public $modelo;
    public $ano;
    public Fabricante $fabricante;
    public Motor $motor;

    public function __construct($modelo, $ano, Fabricante $fabricante, Motor $motor)
    {
        $this->modelo = $modelo;
        $this->ano = $ano;
        $this->fabricante = $fabricante;
        $this->motor = $motor;
    }

    public function exibirFicha()
    {

        return $this->modelo . " | " . $this->ano . "<br>"
            . "Fabricante: " . $this->fabricante->nome . " | " . "Origem: " . $this->fabricante->paisOrigem . "<br>"
            . "Motor: " . $this->motor->potencia . " | " . "Combustível: " . $this->motor->combustivel;
    }
}

// INSTÂNCIANDO OBJETO
$fabricante = new Fabricante("FIAT", "Itália");
$motor = new Motor("130cv/125cv","Flex");
$carro = new Carro("Fastback Turbo 200 AT", "2025", $fabricante, $motor);

echo $carro->exibirFicha();