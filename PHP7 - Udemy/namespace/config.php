<?php

//-----------------------------função anônima
spl_autoload_register(function($nomeClass){

    //var_dump($nomeClass);

    //pasta onde encotra-se as classes
    $dirClass = "class";
    //caminho onde 
    $filename = $dirClass . DIRECTORY_SEPARATOR . $nomeClass.".php";

    if (file_exists($filename)) {

        require_once($filename);
        //var_dump($filename);
    }

});

?>