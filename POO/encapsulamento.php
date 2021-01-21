<?php 

class Pessoa{
    public    $nome ;
    protected $idade;
    private   $senha;

    public function getIdade(){

        return $this->idade;

    }

    public function setIdade($idade){

        $this->idade = $idade;

    }


    public function exibirDados(){

        echo $this->nome;echo"<br>";
        echo $this->idade;echo"<br>";
        echo $this->senha;echo"<br>";

    }





}

$objeto = new Pessoa();
$objeto->nome = "isael";
$objeto->setIdade("23");
$objeto->exibirDados();