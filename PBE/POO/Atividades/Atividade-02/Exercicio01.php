<?php

    // CLASSE ABSTRATA SÓ SERVE PARA PARENTESCO  
    abstract class Pessoa
    {
        public $nome;
        public $idade;
    }

    // ADICIONA ATRIBUTO DE SALARIO
    class Funcionario extends Pessoa
    {
        protected $salario;
    }

    // EXTENDE FUNCIONARIO PARA PEGAR OUTROS ATRIBUTOS
    class Gerente extends Funcionario 
    {

        // CRIA ATRIBUTO ESPECIFICO DA CLASSE
        // SALARIO PRIVADO POR SENSIBILIDADE DE DADOS
        private $salarioGerente;

        // FUNÇÃO QUE DEFINE NOVO SALÁRIO BASEADO NO SALÁRIO DE ENTRADA
        // USA $SALARIO COMO PARAMETRO JA QUE ATRIBUTO $SALARIOGERENTE É PRIVADO
        public function setSalarioGerente($salario){
            // DEFINE QUE O $SALARIOGERENTE É O VALOR QUE ESTÁ EM $SALARIO
            $this->salarioGerente = $salario;
        }

        // FUNÇÃO QUE CALCULA O BÔNUS E JÁ ADICIONA SALÁRIO REAL
        public function calcularBonus()
        {
            // FAZ O CÁLCULO E RETORNA O VALOR GUARDANDO NA *VARÍAVEL*
            return $this->salarioGerente = ($this->salarioGerente * 20/100) + $this->salarioGerente;
        }

    }

    class Desenvolvedor extends Funcionario 
    {

        // CRIA ATRIBUTO ESPECIFICO DA CLASSE
        // SALARIO PRIVADO POR SENSIBILIDADE DE DADOS
        private $salarioDesenvolvedor;

        // FUNÇÃO QUE DEFINE NOVO SALÁRIO BASEADO NO SALÁRIO DE ENTRADA
        // USA $SALARIO COMO PARAMETRO JA QUE ATRIBUTO $SALARIODESENVOLVEDOR É PRIVADO
        public function setSalarioDesenvolvedor($salario){
            // DEFINE QUE O $SALARIODESENVOLVEDOR É O VALOR QUE ESTÁ EM $SALARIO
            $this->salarioDesenvolvedor = $salario;
        }

        // FUNÇÃO QUE CALCULA O BÔNUS E JÁ ADICIONA SALÁRIO REAL
        public function calcularBonus()
        {
            // FAZ O CÁLCULO E RETORNA O VALOR GUARDANDO NA *VARÍAVEL*
            return $this->salarioDesenvolvedor = ($this->salarioDesenvolvedor * 10/100) + $this->salarioDesenvolvedor;
        }

    }


    // INSTANCIA GERENTE
    $Melissa = new Gerente();
    $Melissa->nome = "Melissa";
    $Melissa->setSalarioGerente(3500); 
    echo "Salário Melissa: ";
    echo $Melissa->calcularBonus() . "<br><br>";


    // INSTANCIA DESENVOLVEDOR
    $Joao = new Desenvolvedor();
    $Joao->nome = "João";
    echo "Salário João: ";
    $Joao->setSalarioDesenvolvedor(2000);
    echo $Joao->calcularBonus();
?>