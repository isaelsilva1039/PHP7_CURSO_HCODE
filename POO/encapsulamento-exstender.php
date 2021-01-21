<?php 

class Pessoa{
    public    $nome ="isael jose da silva ";
    protected $idade = "23";
    private   $senha = "123456";

    public function getIdade(){

        return $this->idade;

    }

    public function setIdade($idade){

        $this->idade = $idade;

    }

    public function exibirDados(){

        get_class($this);
        echo $this->nome;echo"<br>";
        echo $this->idade;echo"<br>";
        echo $this->senha;echo"<br>";

    }

}

class Visitante extends Pessoa{
    
    public function exibirDados(){
        get_class($this);
        echo $this->nome;echo"<br>";
        echo $this->idade;echo"<br>";
        echo $this->senha;echo"<br>";
    }
}

$objeto = new Visitante();
$objeto->exibirDados();