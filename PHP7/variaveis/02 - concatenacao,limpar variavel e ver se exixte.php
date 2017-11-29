<?php
	
	#$anoNascimento = 1990;

	#limpar variavel da memoria

	$nome = "João";

	$sobrenome = "Lucas";

	echo "$nome";

	echo "<br/>";

	#concatenação

	$nomeCompleto = $nome." ".$sobrenome;

	echo $nomeCompleto;

	#limpa a variavel $nome da memoria
	unset($nome);

	# verifica se a variavel $nome existe
	if(isset($nome)){

		echo "$nome";
	}

	echo "<hr>";
	
?>