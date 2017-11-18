<?php

function incluirClasses($nomeClasse){

    //verifica se o arquivo é existente
    if(file_exists($nomeClasse .".php") === true) {
        //Se for passa o nome do arquivo
        require_once($nomeClasse .".php");
       // var_dump($nomeClasse);
    }

}

//Função SPL 
spl_autoload_register("incluirClasses");
spl_autoload_register(function($nomeClasse){

    if(file_exists("abstratas" . DIRECTORY_SEPARATOR . $nomeClasse.".php") === true) {
        require_once("abstratas" . DIRECTORY_SEPARATOR . $nomeClasse.".php");
        //var_dump($nomeClasse.".php");
    }

});

$carro = new Delrey();

$carro->acelerar(80);

?>