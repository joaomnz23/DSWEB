<?php

    abstract class Animal
    {
        public function fazerSom()
        {
            return "";
        }

        public function mover()
        {
            return "anda";
        }
    }

    class Sapo extends Animal
    {
       public function fazerSom()
        {
            return "Ribbit";
        } 
    }
    
    class Cavalo extends Animal
    {
        public function fazerSom()
        {
            return "Riiinch";
        }

        public function mover() {
            return "Galopa e " . parent::mover();
        }
    }

    class Tartaruga extends Animal
    {
        public function fazerSom()
        {
            return "Splash";
        } 
    }

    // INSTANCIA OBJETO SAPO
    $Kermit = new Sapo();

    echo "<h3>Sapo</h3>";
    echo $Kermit->fazerSom() . "<br>";
    echo "-------------------------<br/>";

    // INSTANCIA OBJETO CAVALO
    $PeDePano = new Cavalo();

    echo "<h3>Cavalo</h3>";
    echo $PeDePano->fazerSom() . "<br>";
    echo $PeDePano->mover() . "<br>";
    echo "-------------------------<br/>";
    
    // INSTANCIA OBJETO TARTARUGA
    $Crush = new Tartaruga();

    echo "<h3>Tartaruga</h3>";
    echo $Crush->fazerSom() . "<br>";
    echo "-------------------------<br/>";