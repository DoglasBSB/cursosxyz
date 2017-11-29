<?php

$nome = "João "; #variavel global

function teste() {

	global $nome;
	echo $nome;
}


function teste2(){
    
    $nome = "Lucas"; #variavel do escopo
	echo $nome. " agora no teste2";
}


teste();

teste2();


	
?>