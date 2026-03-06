<?php 

    class Veiculo {
        public $marca;
        public $modelo;
        private $velocidade;


        // FUNÇÃO QUE LÊ A VELOCIDADE (ATRIBUTO PRIVADO)
        public function getVelocidade()
        {
            return $this->velocidade;
        }

        // FUNÇÃO QUE ALTERA VELOCIDADE (ATRIBUTO PRIVADO)
        public function setVelocidade($velocidadeNova)
        {
            $this->velocidade = $velocidadeNova;
        }
    }

    class Carro extends Veiculo
    {
        public function acelerar()
        {
            return "O carro acelera quando o motorista pressiona o pedal, aumentando a entrada de ar e combustível no motor, gerando maior combustão e potência";
        }
    }

    class Moto extends Veiculo
    {
        public function acelerar()
        {
            return "A moto acelera quando o condutor gira o punho direito (manopla), puxando um cabo que abre a borboleta no corpo de injeção ou carburador";
        }
    }

    // INSTÂNCIA CARRO
    $McQueen = new Carro();
    $McQueen->setVelocidade(315);
    echo $McQueen->marca = "Chevrolet" . "<br>";
    echo $McQueen->modelo = "Corvette C6" . "<br>";
    echo $McQueen->getVelocidade() . "<br><br>";

    // INSTÂNCIA MOTO
    $Motoca = new Carro();
    $Motoca->setVelocidade(155);
    echo $Motoca->marca = "Honda" . "<br>";
    echo $Motoca->modelo = "Sahara 300" . "<br>";
    echo $Motoca->getVelocidade() . "<br><br>";
