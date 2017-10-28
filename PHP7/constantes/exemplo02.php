<?php

#ARRAY CONSTANTE PERMITIDO A PARTIR DO PHP 7
define('BANCO_DE_DADOS', [
		'127.0.0.1',
		'root',
		'passoword',
		'test'
	],true);

print_r(BANCO_DE_DADOS[2]);

?>