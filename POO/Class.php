<?php  


class Pessoa{
    public $nome;
    public $idade;


    public function falar(){

        return "Meu Nome e ".$this->nome;

    }


    public function idade(){

        return "Minha Idade e :".$this->idade;

    }


}

$glacio = new Pessoa();
$glacio->nome = "Isael";//pasandp direto pro atributo
echo $glacio->falar();  

echo "<br>";

$glacio->idade="23";
echo $glacio->idade();


