<?php

class Carro {

    private $modelo;
    private $motor;
    private $ano;

    //metodo para exibir
    public function getModelo(){
        return $this->modelo;
         
    }

    //metodo para pega e atribuir a variavel modelo, que se torta o atributo ptovado 
    public function setModelo($modelo){
        $this->modelo = $modelo;

    }

    public function getMotor(){
        return $this->motor;
                 
    }

    public function setMotor($motor){
        $this->motor = $motor;

        
    }

    public function getAno(){
        return $this->ano;
         
    }

    public function setAno($ano){
        $this->ano = $ano;
        
    }

    public function exibir(){

         return array(
            "modelo"=>$this->getModelo(),
            "motor" =>$this->getMotor(),
            "ano"   =>$this->getAno()
         );

    }

}


$gol = new Carro();
$gol ->setModelo("Gol");
$gol ->setMotor ("1.0");
$gol ->setAno   ("2020");
print_r($gol->exibir());



