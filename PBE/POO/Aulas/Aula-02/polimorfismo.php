<?php
    class Animal 
    {
        public function falar()
        {
            return "Som";
        }
        public function mover()
        {
            return "Anda";
        }
    }

    class Cachorro extends Animal
    {
        public function falar()
        {
            return "Late";
        }
    }

    class Gato extends Animal
    {
        public function falar()
        {
            return "Mia";
        }
    }

    class Passaro extends Animal
    {
        public function falar()
        {
            return "Canta";
        }
        public function mover()
        {
            return "Voa e " . parent::mover();
        }
    }

    // INSTANCIA OBJETO CACHORRO
    $pluto = new Cachorro();

    echo "<h3>Cachoro</h3>";
    echo $pluto->falar() . "<br/>";
    echo $pluto->mover() . "<br/>";
    echo "-------------------------<br/>";

    // INSTANCIA OBJETO GATO
    $garfield = new Gato();

    echo "<h3>Gato</h3>";
    echo $garfield->falar() . "<br/>";
    echo $garfield->mover() . "<br/>";
    echo "-------------------------<br/>";

    // INSTANCIA OBJETO PÁSSARO
    $ave = new Passaro();
    
    echo "<h3>Pássaro</h3>";
    echo $ave->falar() . "<br/>";
    echo $ave->mover() . "<br/>";
?>