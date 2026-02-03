<?php

// CLASSE ESTOJO
class Estojo {

    // ATRIBUTOS
    public $cor;
    public $tamanho;
    public $capacidade;
    public $qtd_reparticao;
    public $peso;

    // MÉTODO
    private function abrir(){

        return "Você abriu um estojo que é ".$this->cor;

    }

    // MÉTODO
    private function fechar(){   
        
        return "Você acabou de fechar um estojo ".$this->capacidade;

    }

    // MÉTODO 
    private function organizar(){

        return "Depois que você organizou esse estojo ele tem peso de ".$this->peso;
    }
}

// INÍCIO DO OBJETO ESTOJO
$EstojoMelissa = new Estojo();
// INSTÂNCIANDO OBJETO
$EstojoMelissa->cor = "preto";
$EstojoMelissa->capacidade = "grande";
$EstojoMelissa->peso = "400g";
// EXECUTANDO MÉTODOS
echo $EstojoMelissa->abriu();
echo $EstojoMelissa->fechar();
echo $EstojoMelissa->organizar();

// CLASSE BORRACHA
class Borracha {

    // ATRIBUTOS
    public $tamanho;
    public $formato;
    public $cor;
    public $material;
    public $tema;

    // MÉTODO
    public function apagar(){

    }

    // MÉTODO
    public function emprestar(){

    }

    // MÉTODO
    public function morder(){

    }
}

// CLASSE PROJETOR
class Projetor {

    // ATRIBUTOS
    public $lente;
    public $marca;
    public $tamanho;
    public $cor;
    public $compatibilidade;

    // MÉTODO
    public function ligar(){

    }

    // MÉTODO
    public function projetar(){

    }

    // MÉTODO
    public function focar(){
        
    }
}

// CLASSE AR-CONDICIONADO
class ArCondicionado {

    // ATRIBUTOS
    public $marca;
    public $cor;
    public $tamanho;
    public $modelo;
    public $controle;

    // MÉTODO
    public function gelar(){

    }

    // MÉTODO
    public function esquentar(){

    }

    // MÉTODO
    public function ligar(){
        
    }
}

// CLASSE LIVRO
class Livro {

    // ATRIBUTOS
    public $tema;
    public $paginas;
    public $capa;
    public $genero;
    public $editora;

    // MÉTODO
    public function ler(){

    }

    // MÉTODO
    public function grifar(){

    }

    // MÉTODO
    public function resumir(){
        
    }
}
?>