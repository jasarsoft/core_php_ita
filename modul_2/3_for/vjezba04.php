<?php
$numberOfCharacters = 50;
$characters = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
$allCharacters = $characters . strtolower($characters);
$pass = "";
for($i=0;$i<$numberOfCharacters;$i++)
    $pass.=$allCharacters[rand(0,strlen($allCharacters)-1)];
echo $pass;
?>