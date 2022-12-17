<?php

// echo ("Hello" . "\r\n");

$requete = file_get_contents('https://randomuser.me/api/?inc=gender,name,email,nat,picture');
// print(json_encode($requete, JSON_PRETTY_PRINT));
// print($requete);
// echo($requete . "\r\n");

$propre = json_decode($requete);
// echo($propre . "\r\n");
var_dump($propre);
echo ("TECHIO> open --port 8080 /project/target/api-connect.php");

?>