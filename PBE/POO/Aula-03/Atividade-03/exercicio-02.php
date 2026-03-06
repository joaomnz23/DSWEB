<?php

class Artista
{

    public $nome;
    public $genero;

    public function __construct($nome, $genero)
    {
        $this->nome = $nome;
        $this->genero = $genero;
    }
}

class Musica
{

    public $titulo;
    public $duracao;
    public Artista $artista;

    public function __construct($titulo, $duracao, Artista $artista)
    {
        $this->titulo = $titulo;
        $this->duracao = $duracao;
        $this->artista = $artista;
    }

    public function exibirDados()
    {
        return $this->titulo . " | " . "Duração: " . $this->duracao . "<br>"
            . "Artista: " . $this->artista->nome . " | " . "Gênero: " . $this->artista->genero;
    }
}

//INSTÂNCIA DO OBJETO
$artista = new Artista("BK", "Hip Hop");
$musica = new Musica("Deusa", "4:35", $artista);

echo $musica->exibirDados();