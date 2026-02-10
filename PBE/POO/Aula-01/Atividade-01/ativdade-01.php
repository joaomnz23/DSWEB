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
$EstojoJoao = new Estojo();
$EstojoVitor = new Estojo();
// INSTÂNCIANDO OBJETO
$EstojoMelissa->cor = "preto";
$EstojoJoao->capacidade = "grande";
$EstojoVitor->peso = "400g";
// EXECUTANDO MÉTODOS
echo "<h3>ESTOJO</h3>";
echo $EstojoMelissa->abrir()."<br>";
echo $EstojoJoao->fechar()."<br>";
echo $EstojoVitor->organizar()."<br><br>";

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
$BorrachaEscolarMelissa = new Borracha();
$BorrachaEscolarJoao = new Borracha();
$BorrachaEscolarVitor = new Borracha();  
// INSTÂNCIANDO OBJETO
$BorrachaEscolarMelissa->tamanho = "pequena";
$BorrachaEscolarJoao->cor = "vermelha";
$BorrachaEscolarVitor->material = "látex";
// EXECUTANDO MÉTODOS
echo "<h3>BORRACHA</h3>";
echo $BorrachaEscolarMelissa->apagar()."<br>";
echo $BorrachaEscolarJoao->emprestar()."<br>";
echo $BorrachaEscolarVitor->morder()."<br><br>";

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
$ProjetorSesi = new Projetor();
$ProjetorCinema = new Projetor();
// INSTÂNCIANDO OBJETO
$ProjetorSenai->marca = "Epson";
$ProjetorSesi->resolucao = "4K Full HD";
$ProjetorCinema->lente = "grande angular";
// EXECUTANDO MÉTODOS
echo "<h3>PROJETOR</h3>";
echo $ProjetorSenai->ligar()."<br>";
echo $ProjetorSesi->projetar()."<br>";
echo $ProjetorCinema->focar()."<br><br>";

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
$ArCondicionado_salaJantar = new ArCondicionado();
$ArCondicionado_quarto = new ArCondicionado();
$ArCondicionado_escritorio = new ArCondicionado();
// INSTÂNCIANDO OBJETO
$ArCondicionado_salaJantar->modelo = "portátil";
$ArCondicionado_quarto->marca = "Split";
$ArCondicionado_quarto->voltagem = "110V";
$ArCondicionado_escritorio->marca = "Brastemp"; 
// EXECUTANDO MÉTODOS
echo "<h3>AR-CONDICIONADO</h3>";
echo $ArCondicionado_salaJantar->gelar()."<br>";
echo $ArCondicionado_quarto->esquentar()."<br>";
echo $ArCondicionado_escritorio->ligar()."<br><br>";

// CLASSE LIVRO
class Livro {

    // ATRIBUTOS
    public $titulo;
    public $paginas;
    public $capa;
    public $genero;
    public $editora;

    // MÉTODO
    public function resumir(){
        return "Você está resumindo todas as ".$this->paginas." páginas deste livro.";
    }
    

    // MÉTODO
    public function emprestar(){
        return "Você está emprestando o livro ".$this->titulo;
    }

    // MÉTODO
    public function ler(){
        return "Você está lendo um livro da editora ".$this->editora;
    }
}

// INÍCIO DO OBJETO LIVRO
$LivroMelissa = new Livro();
$LivroJoao = new Livro();
$LivroVitor = new Livro();
// INSTÂNCIANDO OBJETO
$LivroMelissa->paginas = "250";
$LivroJoao->titulo = "O Alquimista ";
$LivroVitor->editora = "Paralela";
// EXECUTANDO MÉTODOS
echo "<h3>LIVRO</h3>";
echo $LivroMelissa->resumir()."<br>";
echo $LivroJoao->emprestar()."<br>";
echo $LivroVitor->ler()."<br><br>";
?>