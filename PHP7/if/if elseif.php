<?php

$baixoPeso = 18.5; # <
$saudavel = 18.6; # 18.6 - 24.9
$sobrePeso = 25; # >25
$obesidade = 30; # >30

$qualSeuImc = 29;

if ($qualSeuImc < $baixoPeso) {
 	echo " Você está abaixo do peso!";
 } elseif ($qualSeuImc > $baixoPeso && $qualSeuImc < $sobrePeso ) {
 	echo " Você está saudavel";
  } elseif ($qualSeuImc >= $sobrePeso && $qualSeuImc < $obesidade ) {
  	echo " Você esta acima do peso";
  } else  {
  	echo " Você está obeso";
  }



?>