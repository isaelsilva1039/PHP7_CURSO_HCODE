<?php 

abstract class  Automovel {

    public $velocidade;
    public $freno;
    public $motor;

    public function velocidade($motor){
        
        return $this->motor = $motor;
    }

    public function freno($freno){
        
        return  $this->frenar=$freno;
    
    }

    public function motor($motor){

        return $this->motor=$motor;
    
    } 

}


class Hilux extends Automovel {
        
}






