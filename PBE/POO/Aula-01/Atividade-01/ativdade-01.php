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
    public function abrir(){

        return "Você abriu um estojo que é ".$this->cor;

    }

    // MÉTODO
    public function fechar(){   
        
        return "Você acabou de fechar um estojo ".$this->capacidade;

    }

    // MÉTODO 
    public function organizar(){

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
echo $EstojoMelissa->abrir()."<br>";
echo $EstojoMelissa->fechar()."<br>";
echo $EstojoMelissa->organizar()."<br>";

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
        return "Depois de você apagar com sua borracha, ela está ".$this->tamanho;
    }

    // MÉTODO
    public function emprestar(){
        return "Você acabou de emprestar sua borracha ".$this->cor;
    }

    // MÉTODO
    public function morder(){
        return "Não é recomendado morder borrachas de ".$this->material;
    }
}

// INÍCIO DO OBJETO BORRACHA
$BorrachaEscolar = new Borracha();
// INSTÂNCIANDO OBJETO
$BorrachaEscolar->tamanho = "pequena";
$BorrachaEscolar->cor = "vermelha";
$BorrachaEscolar->material = "látex";
// EXECUTANDO MÉTODOS
echo $BorrachaEscolar->apagar()."<br>";
echo $BorrachaEscolar->emprestar()."<br>";
echo $BorrachaEscolar->morder()."<br>";

// CLASSE PROJETOR
class Projetor {

    // ATRIBUTOS
    public $lente;
    public $marca;
    public $tamanho;
    public $cor;
    public $resolucao;

    // MÉTODO
    public function ligar(){
        return "O projetor ".$this->marca." está ligando...";
    }

    // MÉTODO
    public function projetar(){
        return "Você está projetando um vídeo com resolução ".$this->resolucao;
    }

    // MÉTODO
    public function focar(){
        return "Tentativa de configuração de uma lente ".$this->lente;
    }
}

// INÍCIO DO OBJETO PROJETOR
$ProjetorSenai = new Projetor();
// INSTÂNCIANDO OBJETO
$ProjetorSenai->marca = "Epson";
$ProjetorSenai->resolucao = "4K Full HD";
$ProjetorSenai->lente = "grande angular";
// EXECUTANDO MÉTODOS
echo $ProjetorSenai->ligar()."<br>";
echo $ProjetorSenai->projetar()."<br>";
echo $ProjetorSenai->focar()."<br>";

// CLASSE AR-CONDICIONADO
class ArCondicionado {

    // ATRIBUTOS
    public $marca;
    public $cor;
    public $voltagem;
    public $modelo;
    public $controle;

    // MÉTODO
    public function gelar(){
        return "Seu ar-condicionado ".$this->modelo." está gelando o local";
    }

    // MÉTODO
    public function esquentar(){
        return "Para o ar-condicionado ".$this->marca." aquecer a sala, deve estar conectado em uma fonte ".$this->voltagem;
    }

    // MÉTODO
    public function ligar(){
        return "O ar-condicionado ".$this->marca." está ligando...";
    }
}

// INÍCIO DO OBJETO AR-CONDICIONADO
$ArCondicionado_quarto = new ArCondicionado();
// INSTÂNCIANDO OBJETO
$ArCondicionado_quarto->marca = "Split";
$ArCondicionado_quarto->modelo = "portátil";
$ArCondicionado_quarto->voltagem = "110V";
// EXECUTANDO MÉTODOS
echo $ArCondicionado_quarto->gelar()."<br>";
echo $ArCondicionado_quarto->esquentar()."<br>";
echo $ArCondicionado_quarto->ligar()."<br>";

// CLASSE LIVRO
class Livro {

    // ATRIBUTOS
    public $titulo;
    public $paginas;
    public $capa;
    public $genero;
    public $editora;

    // MÉTODO
    public function ler(){
        return "Você está lendo um livro da editora ".$this->editora;
    }

    // MÉTODO
    public function emprestar(){
        return "Você está emprestando o livro ".$this->titulo;
    }

    // MÉTODO
    public function resumir(){
        return "Você está resumindo todas as ".$this->paginas." páginas deste livro.";
    }
}

// INÍCIO DO OBJETO LIVRO
$LivroJoao = new Livro();
// INSTÂNCIANDO OBJETO
$LivroJoao->paginas = "250";
$LivroJoao->titulo = "O Alquimista ";
$LivroJoao->editora = "Paralela";
// EXECUTANDO MÉTODOS
echo $LivroJoao->ler()."<br>";
echo $LivroJoao->emprestar()."<br>";
echo $LivroJoao->resumir()."<br>";
?>