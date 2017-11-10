
<?php

#DECLARAÇÃO DE TIPOS ESCALARES

function soma(int ...$valores){
			//função que soma os valores
	return array_sum($valores);

}

echo "#DECLARAÇÃO DE TIPOS ESCALARES";
echo "<br>";

echo soma(2,2);
echo "<br>";
echo soma(20,10,15);
echo "<br>";
echo soma(1.3,4.5);
echo "<br>";

?>