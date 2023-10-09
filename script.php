<?php

var_dump($_POST);

$frase = $_POST["frase"];
$parola = $_POST["badword"];

echo $frase . ' ' . strlen($frase) . "<br><br>";
echo str_replace($parola, "***", $frase) . ' ' . strlen($frase);
