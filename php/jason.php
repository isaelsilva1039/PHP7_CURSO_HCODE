<?php

$pessoas = array();

array_push($pessoas, array(

	'nome'=>'Isael',
	'idade'=>'23'
));

array_push($pessoas, array(

	 'nome'=>'lucas',
	'idade'=>'24'

));


echo json_encode($pessoas);
