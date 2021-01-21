<?php


class teste{

    private $nome = "isael jose da silva";
    private $idade="23";
    private $senha ="123";

    public function exibirDados(){

           echo $this->nome ;
           echo $this->idade;
           echo $this->senha;

    }

}

$Pessoa = new teste();
$Pessoa->exibirDados();