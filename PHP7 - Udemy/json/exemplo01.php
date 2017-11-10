<?php
#GERANDO UM JSON APARTIR DE UM ARRAY

$pessoas = array();

array_push($pessoas, array(
'Nome' => ' Joao Lucas',
'Idade' => 1 
	));

array_push($pessoas, array(
'Nome' => ' Doglas',
'Idade' => 26 
	));


array_push($pessoas, array(
'Nome' => ' Janiely',
'Idade' => 30 
	));

//print_r($pessoas[0]['Nome']);
echo json_encode($pessoas);

?>