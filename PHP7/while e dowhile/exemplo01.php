<?php

$condicao = true;

#faça enquanto for verdade
while ($condicao) {

	$numero = rand(1, 10);

	if ($numero === 3) {

		echo "três!!!";
		$condicao = false;

	}
	echo $numero. " ";
}

?>