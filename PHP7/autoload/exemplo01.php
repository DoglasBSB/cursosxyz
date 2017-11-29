<?php

function __autoload($nomeClasse){

    var_dump($nomeClasse);
    require_once($nomeClasse.".php");  
}

// o New já invoca a função autoload
$carro = new Delrey();

//método da classe abstrata automovel
$carro->acelerar(80);

//Obs: autoload feito com arquivos da mesma pasta.

?>