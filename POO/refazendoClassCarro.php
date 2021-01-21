<?php

class Carro2 {

    private $modelo;
    private $motor;
    private $ano;


    public function getModelo(){
        return $this->modelo;

    }

    public function setModelo($modelo){
        $this->modelo = $modelo;

    }

    
    public function getMorotr(){
        return $this->motor;
        
    }

    public function setMotor($motor){   
        $this->motor= $motor;
        
    }


    public function getAno(){
        return $this->ano;
    
    }

    public function setAno($ano){
        $this->ano=$ano;
    
    }


    public function exibirCarro(){
      
        return array(
            "modelo"=>$this->getModelo(),
            "motor" =>$this->getMorotr(),
            "ano"   =>$this->getAno() 
        );
     }
}

$Gol = new Carro2();
$Gol->setModelo("HILUX");
$Gol->setMotor("2.0");
$Gol->setAno("2020");

print_r($Gol->exibirCarro());

