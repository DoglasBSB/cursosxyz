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

		$valor = $_GET["v"];
		$rq = sqrt($valor);
		echo "O valor enviado foi $valor";
		echo "<br>A Raiz de $valor e ". number_format($rq,2);
		?>

		<!--LINK PARA VOLTAR AO FORMULÁRIO -->
		<br>
		<a href="06 - html e php.html"><h3>Voltar <h3></a>

	</div>

</body>
</html>