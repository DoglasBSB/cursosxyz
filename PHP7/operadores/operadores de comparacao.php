<?php

$a= 15;
$b = 10;


#IGUAL
var_dump($a==$b);
echo "<br>";

#IDÊNTICO
var_dump($a===$b); 
echo "<br>";

#DIFERENTE
var_dump($a!=$b); 
echo "<br>";

#DIFERENTE
var_dump($a<>$b); 
echo "<br>";

#NÃO IDÊNTICO
var_dump($a!==$b); 
echo "<br>";

#MENOR QUE
var_dump($a<$b);
echo "<br>";

#MAIOR QUE 
var_dump($a>$b);
echo "<br>";

#MENOR OU IGUAL 
var_dump($a<=$b);
echo "<br>";

#MAIOR OU IGUAL 
var_dump($a>=$b);
echo "<br>";

#SPACESHIP "NAVE ESPACIAL"(Disponivel a partir do php 7)
var_dump($a<=>$b);
echo "<br>";

#SE $a MENOR -1
#SE $a IGUAL 0
#SE $a MAIOR 1

echo "<br>";
#Operador Null Coalescing
# retornar o primeiro valor que exista e não seja nulo dentre os valores passados

$a = NULL; 
$b = NULL;
$c = 10;

echo $a ?? $b ?? $c;





//////////////////////////////////////////
echo "<hr>";
echo "Integers <br>";

echo 1 <=> 1; // 0
echo 1 <=> 2; // -1
echo 2 <=> 1; // 1

echo "<br>";

echo "Floats <br>";
echo 1.5 <=> 1.5; // 0
echo 1.5 <=> 2.5; // -1
echo 2.5 <=> 1.5; // 1

echo "<br>";

echo "Strings <br>";
echo "a" <=> "a "; // 0
echo "a" <=> "b"; // -1
echo "b" <=> "a"; // 1

echo "<br>";

echo "a" <=> "aa"; // -1
echo "zz" <=> "aa"; // 1

echo "<br>";

echo "Arrays <br>";
echo [] <=> []; // 0
echo [1, 2, 3] <=> [1, 2, 3]; // 0
echo [1, 2, 3] <=> []; // 1
echo [1, 2, 3] <=> [1, 2, 1]; // 1
echo [1, 2, 3] <=> [1, 2, 4]; // -1

echo "<br>";

// 
echo "Objects <br>";
$a = (object) ["a" => "b"];
$b = (object) ["a" => "b"];
echo $a <=> $b; // 0

echo "<br>";

$a = (object) ["a" => "b"];
$b = (object) ["a" => "c"];
echo $a <=> $b; // -1

echo "<br>";

$a = (object) ["a" => "c"];
$b = (object) ["a" => "b"];
echo $a <=> $b; // 1

echo "<br>";

// only values are compared
$a = (object) ["a" => "b"];
$b = (object) ["b" => "b"];
echo $a <=> $b; // 1


?>