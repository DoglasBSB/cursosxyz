<?php

// Manipulando Arquivos
$name = "image";
//se não existir o diretorio, ele cria com mkdir
if(!is_dir($name)) {

    mkdir($name);
    echo "Diretório $name criado com sucesso!";

} else {
   // Para remover 
    //rmdir($name);
    echo "Já existe o diretório: $name foi removido !";
}

?>