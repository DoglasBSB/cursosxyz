<?php

$file = fopen("teste.txt", "w+"); // cria o arquivo

fclose($file); // fecha o arquivo

unlink("teste.txt"); //exclui o arquivo
echo "Arquivo removido com successo!!!";

?>