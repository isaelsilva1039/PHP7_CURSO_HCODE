<?php
interface Veiculo{
    public function acelera($velocidade);
    public function frenar($velocidade);
    public function trocaMachar($macha);
} 
abstract class automovel implements Veiculo{
    public function acelera($velocidade){
         echo "O veiculo esta a ". $velocidade."Km/h";    
    }
    public function frenar($velocidade){
        echo "Qaundo a velocidade chega a X veloccidade o fernar vai a tiva";
    }
    public function trocaMachar($macha){
        echo "Troca de macha ". $macha;   
    }
}
class delRey extends automovel{
    public $nomecarr ="Delrey  :";
    public function meuNomeCarro(){
        echo "Carro:".$this->nomecarr;
    }
}
$carro = new delRey();
$carro->meuNomeCarro(); 
$carro->acelera(200);
echo "<BR>";
class Hilux extends automovel{
    public $nomecarr ="Hilux  :";
    public function meuNomeCarro(){
        echo "Carro:".$this->nomecarr;
    }
    public function regraVelocidadeHilux($velocidade){
        $this->acelera($velocidade);
        if($velocidade >= 200){
            echo" O carro passou do limite ";
        }
    }
}

$carro = new Hilux();
$carro->meuNomeCarro(); 
$carro->regraVelocidadeHilux(300);  
$carro->acelera(320);
