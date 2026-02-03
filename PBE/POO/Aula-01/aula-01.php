<?php

// CLASSE
class Pessoa {

    // ATRIBUTOS
    public $nome;

    // MÉTODOS
    public function falar(){

        return "O meu nome é ".$this->nome;

    }
}

// INÍCIO DE UM NOVO OBJETO 
$Joao = new Pessoa();

// INSTÂNCIANDO OBJETO
$Joao->nome = "João Muniz";

// 
echo $Joao->falar();
?>