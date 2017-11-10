<?php

// POR REFERENCIA
$pessoa = array(

	'nome'=>'doglas',
	'idade'=>26
);
// foreach(para cada)
foreach ($pessoa as &$value) {

		if (gettype($value) === 'integer') $value += 10;

	echo $value. '<br>';
}

print_r($pessoa);

echo "<br><br>";

// POR  VALOR
$carro = array(

		'marca'=>'chevrolet',
		'ano'=>2009
);

	foreach ($carro as $value) {

		if (gettype($value) === 'integer') $value +=1;

		echo $value. '<br>';
	}

	print_r($carro);

?>