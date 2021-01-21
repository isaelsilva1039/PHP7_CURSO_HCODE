<?php

$conn = new PDO("mysql:dbname=de_volta;host=localhost","root", "");

$smte = $conn->prepare("SELECT * FROM login");

$smte->execute();

$resuts = $smte->fetchAll(PDO::FETCH_ASSOC);

var_dump($resuts);