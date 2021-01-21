<?php

//recebebdo arquivi JSON externa, e jogando em uma array  
$json = '[{"nome":"Isael","idade":"23"},{"nome":"lucas","idade":"24"}]';


$data = json_decode($json, true);

var_dump($data);

?>

