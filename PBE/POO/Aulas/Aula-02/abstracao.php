<?php

    // A CLASSE ABSTRATA SÓ SERVE PARA CRIAR UMA HERANÇA, NÃO É POSSÍVEL INSTANCIA-LÁ

    abstract class Animal
    {
        public function fazerSom() 
        {
            echo "ioakjgo";
        }
    }

    class Cachorro extends Animal
    {
        public function fazerSom()
        {
            echo "Au Au!";
        }
    }

    /* TESTE DE INSTANCIA DE CLASSE ABSTRATA
    $teste = new Animal();
    $teste->fazerSom();
    */

    $cachorro = new Cachorro();
    $cachorro->fazerSom();
?>