<?php

class Dono
{
    public $nome;
    public $telefone;

    public function __construct($nome, $telefone)
    {
        $this->nome = $nome;
        $this->telefone = $telefone;
    }
}

class Animal
{
    public $nome;
    public $especie;
    public Dono $dono;

    public function __construct($nome, $especie, Dono $dono)
    {
        $this->nome = $nome;
        $this->especie = $especie;
        $this->dono = $dono;
    }
}

// INSTÂNCIANDO OBJETO DONO
$Dono1 = new Dono("Melissa", "15998402314");
$Pet = new Animal("Hannah", "Porco da Índia", $Dono1);

echo $Pet->nome . " | " . $Pet->especie . "<br>";
echo "Dono: " . $Dono1->nome . " | " . "Tel: " . $Dono1->telefone;
