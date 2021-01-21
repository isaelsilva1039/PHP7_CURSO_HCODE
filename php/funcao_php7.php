<?php

function soma(int ...$valores){

    return array_sum($valores);

}

echo soma(20 , 26);
echo "<br>";


echo soma(2.2 , 2.99);
echo "<br>";

function compelatdoNome($nome){

    return $nome;
}


echo compelatdoNome('isael');