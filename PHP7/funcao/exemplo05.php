<?php

$a = 10;
$pessoa = array(

	'nome'=>'doglas',
	'idade'=>26);

foreach ($pessoa as &$value) {
	echo $value. '<br>'; 
}

echo "<br>";
echo "<hr>";




# PASSAGEM DE PARÂMETROS POR VALOR 
//$a parâmetro da função
function trocavalor(&$a){
// SE COLOCAR O & PASSA A SER PASSAGEM DE PARÂMETROS POR REFERÊNCIA VAI IMPRIMIR 60
	$a = 50;

	return $a;

}

#
//chamando a função
echo trocavalor($a); // IMPRIME 50, POIS E DA FUNÇÃO

echo "<br>";

echo $a;// IMPRIME 10, POIS ESTÁFORA DA FUNÇÃO

?>