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
            return $this->preco = ($this->preco * 10/100) - $this->preco;
        }
    }

    class Roupa extends Produto
    {
        public function calcularDesconto()
        {
            return $this->preco = ($this->preco * 20/100) - $this->preco;
        }
    }