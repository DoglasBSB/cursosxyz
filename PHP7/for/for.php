<?php



for ($i = 0; $i < 10; $i++)

	echo $i. "<br>";

	echo "<br>";
	echo "<hr>";



for ($x = 0; $x < 1000; $x+=5){

#IF dentro do for
#IF e BREAK dentro do for
if ($x > 200 && $x < 800) continue;

if ($x === 900) break;

echo $x. "<br>";

} 

//echo $x. "<br>";
#LOOP INFINITO

//for ($z = 0; $z < 10; $z--){
//	echo $z;
//}


		

?>