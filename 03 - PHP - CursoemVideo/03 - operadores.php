<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="css/estilo.css">
	<title>Curso de PHP Básico</title>
</head>
<body>
<div>
<?php
	

	$n1 = $_GET["a"];
	$n2 = $_GET["b"];
	$m = ($n1+$n2)/2;

	echo "<h2>Valores recebidos: $n1 e $n2</h2>";

	
	echo "A soma vale ".($n1 + $n2);
	echo "<br>A subtração vale ".($n1 - $n2);
	echo "<br>A multiplicação vale ".($n1 * $n2);
	echo "<br>A divisão vale ".($n1 / $n2);
	echo "<br>O módulo vale ".($n1 % $n2);

	echo "<br> A Média é: ".($m);

	#UTILIZANDO VALORES PERSONALIZADOS (PASSANDO PELA URL)

	#http://localhost/Cursos/03%20-%20PHP%20-%20CursoemVideo/03%20-%20operadores.php?a=5&b=5

	#RECENDO OS VALORESDE A E B 
	








?>
</div>
</body>
</html>