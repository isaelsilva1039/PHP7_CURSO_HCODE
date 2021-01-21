<?php

interface Veiculo{

    public function acelera($velocidade);
    public function frenar($velocidade);
    public function trocaMachar($macha);

}

class Civic implements Veiculo{

    public function acelera($velocidade)
    {
       
         echo "O veiculo esta a ". $velocidade."Km/h";
         
    }

    public function frenar($velocidade)
    {
        echo "Qaundo a velocidade chega a X veloccidade o fernar vai a tiva";
    }

    public function trocaMachar($macha)
    {

        echo "Troca de macha ". $macha;
        
    }

}


$carro = new Civic();
$carro->trocaMachar(2);
$carro->acelera(2);
$carro->frenar(10);
