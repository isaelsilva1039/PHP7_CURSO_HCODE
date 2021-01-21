<?php 

$frase = "A repetição e mãe da retenção";

$qualPosicao = strpos($frase, "mãe");


//var_dump($qualPosicao);


$texto = substr($frase, 0, $qualPosicao);

echo $texto;


 ?>