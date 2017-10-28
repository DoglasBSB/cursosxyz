<?php
	
	#Operadores de Atribuição string

	$nome = "hcode"; 
	echo $nome. " mais alguma coisa <br>";
	
	#Operadores compostos

	$nome .= " Treinamentos <br><hr>";
	echo $nome;

/////////////////////////////////////////////////
	
	# Valores ja atribuidos
	//$valor1 = 5;
	//$valor2 = 2;

	# recendo valor pela URL
	$valor1 = $_GET['a'];
	$valor2 = $_GET['b'];

	function soma(){

	global $valor1;
	global $valor2;  

	echo "Valor Total= ".$valor1+=$valor2;
	echo "<br>";
	
	}


	function subtracao(){

	global $valor1;
	global $valor2;  

	echo "Valor Total= ".$valor1-=$valor2;
	echo "<br>";
	
	}

	function multiplicacao(){

	global $valor1;
	global $valor2;  

	echo "Valor Total= ".$valor1*=$valor2;
	echo "<br>";
	
	}

	function divisao(){

	global $valor1;
	global $valor2;  
	
	echo "Valor Total= ".$valor1/=$valor2;
	echo "<br>";

	}

	function modulo(){

	global $valor1;
	global $valor2;  
	
	echo "Valor Total= ".$valor1%=$valor2;
	echo "<br>";

	}

	function concatencao(){

	global $valor1;
	global $valor2;  
	
	echo "Valor Total= ".$valor1.=$valor2;
	echo "<br>";

	}

	soma();
	subtracao();
	multiplicacao();
	divisao();	
	
	modulo();
	concatencao();
	?>