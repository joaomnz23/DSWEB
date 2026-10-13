<?php

    abstract class Produto {
        public $nome;
        public $preco;
        public $estoque;

        abstract public function calcularDesconto();
    }

    class Eletronico extends Produto
    {
        public function calcularDesconto()
        {
            return $this->preco = $this->preco - ($this->preco * 10/100);
        }
    }

    class Roupa extends Produto
    {
        public function calcularDesconto()
        {
            if($this->estoque > 5){
                return $this->preco = $this->preco - ($this->preco * 20/100);
            }
            else    
            {
                return $this->preco = $this->preco - ($this->preco * 30/100);
            }
            return $this->preco;
        }
    }

    // INSTÂNCIA ELETRONICO
    $N3DS = new Eletronico();
    echo $N3DS->nome = "Nintendo 3DS" . "<br>";
    $N3DS->preco = 1400;
    echo "Preço original: " . $N3DS->preco . "<br>";   
    $N3DS->calcularDesconto();
    echo "Preço com desconto: " . $N3DS->preco . "<br><br>";

    // INSTÂNCIA ROUPA
    $Camiseta = new Roupa();
    echo $Camiseta-> nome = "Camiseta Oversized" . "<br>";
    $Camiseta->preco = 64.90;
    $Camiseta->estoque = 4;
    echo "Preço original: " . $Camiseta->preco . "<br>";
    $Camiseta->calcularDesconto();
    echo "Preço com desconto: " . $Camiseta->preco . "<br><br>";
