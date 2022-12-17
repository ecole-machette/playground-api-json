<?php

echo ("Hello" . "\r\n");

$requete = file_get_contents('https://randomuser.me/api/?inc=gender,name,nat');
// print(json_encode($requete, JSON_PRETTY_PRINT));
// print($requete);
echo($requete . "\r\n");

$propre = json_decode($requete);

echo($propre . "\r\n");


?>