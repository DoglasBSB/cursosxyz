<?php
	
	#Tipos de dados  primitivos básicos

	$nome = "hcode"; # variavel do tipo string aspas duplas

	$site = 'www.hcode.com.br'; #aspas simples

	$ano = 1990; # variavel do tipo inteiro
	$salario = 5500.99; #variavel do tipo float (ponto flutuante)
	$bloqueado = false; #variavel do tipo booleano
	////////////////////////////////////////////////////

	#Tipos de dados Composto
	$frutas = array("abacaxi", "laranja", "manga");

	echo $frutas[2];

	

	#Tipo de dados Objeto
	$nascimento = new DateTime();

	echo "<br>";
	var_dump($nascimento);



	#Tipos de dados Especiais

	$arquivo = fopen("03 - tipos de dados.php", "r");
	echo "<br>";

	var_dump($arquivo);

	$nulo = NULL;








?>