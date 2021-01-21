<?php

class Teste
{
    public $idade;

    public function exibirIdade()
    {
        $this->idade = 10;
        $this->manipula();
    }


    public function manipula()
    {
        if ($this->idade < 18) {
            echo "Idade: " . $this->idade . "<br>" . "Voce e menor de idade";
        } else {

            echo "Idade: " . $this->idade . "<br>" . "Voce e Maior de idade ";
        }
    }


    public function mudaIdade()
    {
        $idade = $this->idade;

        if ($idade <= 17) {
            echo $this->idade = 18;
        } else {
            echo $this->idade;
        }
    }
}


$exibir = new Teste();
// $exibir->idade = 30;
$exibir->exibirIdade();
$exibir->mudaIdade();
