<?php
class Pessoa
{
    public $nome = "Melissa";
    protected $idade = 48;
    private $senha = "12345";

    public function verDados()
    {
        echo $this->nome . "<br/>";
        echo $this->idade . "<br/>";
        echo $this->senha . "<br/>";
    }
}

class Programador extends Pessoa
{
    public function verDados()
    {

        //Exibe a Classe atual
        echo get_class($this) . "<br/>";
        echo $this->nome . "<br/>";
        echo $this->idade . "<br/>";
        echo $this->senha . "<br/>";
    }
}

// INSTÂNCIA CLASSE PAI
$Melissa = new Pessoa();
$Melissa->verDados();

echo "<br>";

// INSTÂNCIA CLASSE FILHO
$Joao = new Programador();
$Joao->verDados();
