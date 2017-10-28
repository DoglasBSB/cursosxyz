<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Curso de PHP Básico</title>
	<style type="text/css">
		h2{
			font: 15pt Arial;
			color: #171559;
			font-weight: bold;
		}
	</style>
</head>
<body>
	<div>
		<?php

		$v1 = $_GET['x'];
		$v2 = $_GET['y'];

		echo "<h2> Valores recebidos: $v1 e $v2</h2>";
		echo "Valor absoluto de $v2 e ".abs($v2);
		echo "<br> O avalor de $v1<sup>$v2</sup> e ".pow($v1, $v2);
		echo "<br> A Rais de $v1 e ".sqrt($v1);
		echo "<br> O Valor de $v2 arredondado e ".round($v2); // ceil ou floor
		echo "<br> A parte inteira de $v1 e ".intval($v1);
		echo "<br> O valor de $v2 em moeda e R$".number_format($v2,2,",",".");



		?>
	</div>
</body>
</html>