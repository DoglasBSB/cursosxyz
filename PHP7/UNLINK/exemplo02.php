<?php

//CRIA PASTA

if (!is_dir("images")) mkdir("images");
    //ler todos os diretórios
    foreach (scandir("images") as $item) {
        if (!in_array($item, array(".", ".."))) {
        //ecluir todos os arquivos
        unlink("images/". $item);
        }
    }

echo "OK!";
?>