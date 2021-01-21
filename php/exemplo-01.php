<?php

	$minhaArray  = array('isael','lucas', 'joão', 'glaucio' , 'pedro');

	$indeci = $minhaArray[0];
	

	ifComarraysDados();


	function ifComarraysDados(){

		global $indeci;
		
		if($indeci == 'isael'){

			echo"Esse cara esta coom o nome sujo no serasa, tira ele da ir rapido";

		}elseif ($indeci == 'lucas') {

			echo "esse e o irmão dele.";
		
		}else{
		
			echo "pode ser qulquer um não sendo esses ai ";
		
		}

	}

 ?>