<?php

echo "Hello";

$requete = file_get_contents('https://randomuser.me/api/');
print(json_encode($requete, JSON_PRETTY_PRINT));
print($requete);
echo($requete);

?>