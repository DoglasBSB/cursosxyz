<?php


$ts = strtotime("2001-09-11");

//função  
//$ts = strtotime("+1 week");

//now (agora)
// +1 day (dia)
// +1 week (semana)

echo date("l, d/m/Y", $ts);

?>