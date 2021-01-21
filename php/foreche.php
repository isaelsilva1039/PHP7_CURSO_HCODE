<?php 

$meses = array(
	"janeiro", "fevereiro", "março",
	"abril", "maio", "junho",
	"julho", "agosto", "setembro",
	"outubro", "novembro", "dezembro",
);


foreach ($meses as $indeci => $mes) {
	
	echo $indeci ;
	echo  strtoupper( "Mês :".$mes."<br>");

}

