<?php

class Pessoa
{
    public $nome;
    public $idade;

    public function __construct($novoNome, $novoIdade)
    {
        $this->nome = $novoNome;
        $this->idade = $novoIdade;
    }

    public function exibirDados()
    {
        return "O nome da pessoa é " . $this->nome . " e a idade é " . $this->idade;
    }

    public function alterarDados($novoNome, $novoIdade)
    {
        $this->nome = $novoNome;
        $this->idade = $novoIdade;
    }
}

// INSTÂNCIA DO OBJETO
$pessoa = new Pessoa("João", 17);
echo $pessoa->exibirDados();

echo "<br>";

$pessoa->alterarDados("Melissa", 17);
echo $pessoa->exibirDados();

?>