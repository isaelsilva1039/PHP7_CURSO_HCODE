<?php 

abstract class animal {

    public function andar(){

        return "Correr"."<br>";
    }

    public function falar(){

        return "SOM" ."<br>";
    }

}

class Cachorro extends animal{

    public function falar()
    {
        return "Late". "<br>";
    }

}


$cachoro = new Cachorro();
echo $cachoro->falar("late");
echo $cachoro->andar("correr");
echo"<br>";


class Gato extends animal{

    public function falar()
    {
        return "mia". "<br>";
    }
    
    public function andar()
    {
        return "Pula"."<br>";
    }

}


$Gato = new Gato();
echo $Gato->falar("MIA");
echo $Gato->andar("PULA");
echo"<br>";

class Passaro extends animal {

    public function andar()
    {
        return "Voa"." e ".parent::andar();
    }

}



$passaro = new Passaro();
echo $passaro->falar();
echo $passaro->andar();
echo"<br>";
