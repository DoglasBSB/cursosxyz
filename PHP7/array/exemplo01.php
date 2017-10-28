<?php

$frutas = array ("laranja","abacaxi", "melancia");

print_r($frutas);

echo "<br>";

#array bidimensional
$carros [0][0] = "GM";
$carros [0][1] = "Prisma";
$carros [0][2] = "Cobalt";
$carros [0][3] = "Onix";

$carros [1][0] = "FORD";
$carros [1][1] = "Fiesta";
$carros [1][2] = "Fusion";
$carros [1][3] = "EcoSport";

#Exibir Onix
echo $carros [0][2];

echo "<br>";
//trás o último valor dentro da posição
echo end($carros[0]);

echo "<br>";
echo "<br>";
echo "<br>";

echo "<hr>";

$pessoas = array();

array_push($pessoas, array(
'Nome' => ' João Lucas',
'Idade' => 1 
	));

array_push($pessoas, array(
'Nome' => ' Dôglas',
'Idade' => 26 
	));


array_push($pessoas, array(
'Nome' => ' Janiely',
'Idade' => 30 
	));

print_r($pessoas[0]['Nome']);

echo "<br>";
echo "<br>";
echo "<br>";

echo "<hr>";

#array_push -> Adiciona um ou mais elementos no final de um array
$cesta = array("laranja", "morango");
array_push($cesta, "melancia", "batata");
print_r($cesta);

echo "<br>";
echo "<br>";
echo "<br>";

echo "<hr>";

#array_pop -> Extrai um elemento do final do array
$cesta = array("laranja", "morango", "melancia", "batata");
$fruta = array_pop($cesta);
print_r($cesta);
#extrai e retorna o último elemento de array, diminuindo array em um elemento.
#Esta função irá resetar() o ponteiro do array depois do uso.

//ARRAY_SHIFT -> RETIRA UM ELEMENTO  DO INICIO DO ARRAY
$fruta = array_unshift($cesta);
//RETIRA LARANJA


//ARRAY_UNSHIFT -> ADICIONA UM OU MAIS ELEMENTOS NO INCIO DO ARRAY
//$fruta = array_unshift($cesta, "melao", "abacaxi");
//ADICIONA MELÃO E ABACAXI 

?>