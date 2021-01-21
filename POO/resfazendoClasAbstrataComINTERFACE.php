<?php 

/*
Codifo feito com a seguinte estrutura
    -Class Pai altomovel: essa e uma class abstrract, ela não pode ser instaciada.
      -Clas Filha Hillux : e uma Class extends da class pai altomovel.
        - Metodos : acelera 
        - Metodos : freia
        - Metodos : exibir nome 
    Dev- Isael Duartes
*/

    @$nome = $_POST['nome'];
    @$machar= $_POST['machar'];
    @$velocidade1 = $_POST['valocidade'];

 abstract class altomovel {


    public function acelera($velocidade,$nomeCarro,$machar=1.0){        
        $this->acelera= $velocidade. "<br>";
        if( $this->acelera= $velocidade >=150 ){
            $this->frenar();"<br>";
            echo"Voce esta a :".$velocidade."km/h  Com  um  :" .$this->exibirDadosDoMeuCarro=$nomeCarro ."com a macha".$this->marchar= $machar ."<br>"."<br>";
        }else{
            echo"Velocidade  : " . $this->acelera= $velocidade. "<br>";
        }
    }
    public function frenar($frenar=false){   
        $this->frenar=$frenar;
        echo "Frerio ativado"."<br>";
    }
    public function machar($machar){
         $this->marchar= $machar ."<br>"; 
    }
    public function exibirDadosDoMeuCarro($nomeCarro){
        echo"Nome  : ". $this->exibirDadosDoMeuCarro=$nomeCarro ."<br>";  
    }
}
class Carros extends altomovel{
    public function validarVelocidade(){
    }
}
$Hillux = new Carros();
echo $Hillux->exibirDadosDoMeuCarro($nome);"<br>";
echo $Hillux->acelera($velocidade1,$nome);"<br>";
echo $Hillux->machar($machar);"<br>";

