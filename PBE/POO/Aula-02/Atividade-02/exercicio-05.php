<?php

class Documento
{

    private $numero;

    public function getNumero()
    {
        return $this->numero;
    }

    public function setNumero($novoNumero)
    {
        $this->numero = $novoNumero;
    }
}

class CPF extends Documento
{
    public function validar()
    {

        $numero = $this->getNumero();

        // Pega somente os números
        $cpf = preg_replace('/[^0-9]/is', '', $numero);

        // Verifica se foi informado todos os números corretamente
        if (strlen($cpf) != 11) {
            return false;
        }

        // Verifica se foi informado uma sequência de dígitos repetidos
        if (preg_match('/(\d)\1{10}/', $cpf)) {
            return false;
        }

        // Faz o cálculo para validar o CPF
        for ($t = 9; $t < 11; $t++) {
            for ($d = 0, $c = 0; $c < $t; $c++) {
                $d += $cpf[$c] * (($t + 1) - $c);
            }

            $d = ((10 * $d) % 11) % 10;
            if ($cpf[$c] != $d) {
                return false;
            }
        }
        return true;
    }
}

// INSTÂNCIA CPF
$CPF = new CPF();
$CPF->setNumero("417.682.088-83");

echo "CPF inserido: " . $CPF->getNumero() . "<br>";

$CPF->validar();
if ($CPF->validar() == true){
    echo "Este CPF é válido!";
}
else {
    echo "Este CPF é inválido.";
}