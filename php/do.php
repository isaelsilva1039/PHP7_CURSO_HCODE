
<?php 
$total = 1500;
$desconto = 0.9;

do{

	$total *= $desconto;

} 
while ($total > 1000) ;
	
	echo $total	 ;



?>
