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
            if($estoque <= 5){

            }
            else    
            {
                return $this->preco = $this->preco - ($this->preco * 20/100);
            }
            
        }
    }
