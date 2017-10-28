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

		echo "<h2> Operadores de Atribuição </h2>";

		$a = 5;
		$b = 2;

		echo "Adição = ".($a+=$b);
		echo "<br> Subtração = ".($a-=$b);
		echo "<br> Multiplicação = ".($a*=$b);
		echo "<br> Divisão = ".($a/=$b);
		echo "<br> Modulo = ".($a%=$b);
		echo "<br> Concatenação = ".($a.=$b);


		echo "<br>Exemplo <br>";

		$preco = $_GET["p"];
		echo "O preço do produto é R$ ". number_format($preco,2);

		$preco -= $preco*10/100;

		echo "<br>E o novo preço com 10% de aumento é: ".number_format($preco,2);

		# .number_format($preco,2) SERVE PARA DEIXAR COMO VALORES MONETÁRIOS

		/*echo "<br>E o novo preço com 10% de desconto é: $preco";*/

		echo "<h2> Operadores de incremento  </h2>";

		echo "<br> Exemplo: Mostrar qual foi o ano anterior ao ano atual";


		$atual = $_GET["aa"]; // essa linha pega o ano na url
		echo "<br><br> O ano atual e $atual e o ano anterior e ". --$atual;

		echo "<h2> <br > Referência entre variaveis  </h2>";

		#$x = 3;
		#$y = $x;
		#$y += 5;

		#VALOR PASSADO POR REFERÊNCIA  "&"
		$x = 3;
		$y = &$x;
		$y += 5;

		echo (" valor de x= ".$x);
		echo (" <br>valor de y= ".$y);
		echo "<br/>";
		#Variáveis de Variáveis

		$site = "cursoemvideo";
		$$site = "cursoPHP";

		echo "<br>";
		echo "$site";
		echo "<br>";
		echo "$cursoemvideo";

		echo "<br>";
















		


		


		?>
	</div>
</body>
</html>