<?php

// classe DateTime esta sendo instanciada(new)
// aparece a data atual
$dt = new DateTime();

// Da um intervalo de 15 dias
$periodo = new DateInterval("P15D");

echo $dt->format("d/m/Y H:i:s");

// adiciona o periodo de 15 dias 
$dt->add($periodo);

echo "<br>";
//imprimi a data adicionados os 15 dias
echo $dt->format("d/m/Y H:i:s");



?>