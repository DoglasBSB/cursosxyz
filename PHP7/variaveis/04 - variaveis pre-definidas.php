<?php

#Passando informação pela URL
//?a=123 se quiser adicionar mais info. &b=456

$nome = $_GET["a"];

//var_dump($nome);

#Saber ip do usuário
$ip = $_SERVER["REMOTE_ADDR"];
echo $ip;

echo "<br>";

#Pegar nome do arquivo
$ip = $_SERVER["SCRIPT_NAME"];
echo $ip;


	
?>