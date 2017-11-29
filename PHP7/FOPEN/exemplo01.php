<?php

    // A função fopne espera dois parametros sendo string, o 1º e o caminho do arquivo e o 2º como vai ser usado("inserir,ler,alterar,remover")
    // Está variável  aparti deste momento e do tipo resource, pois faz referência a um arquivo externo 
    $file = fopen("log.txt", "a+");

    # w+ = escrever
    # a+ = adicionar informação toda vez que é precionado a tecla F5.
    # \r = retorno
    # \n = nova linha

    // Função para escrever dentro do arquivo também espera 2 arquivos, o 1º e o caminho e o 2º o que deseja inserir.  
    fwrite($file, date("Y-m-d H:i:s")."\r\n");  
    //fwrite($file, $_SERVER["SCRIPT_NAME"]."\r\n");
    //fwrite($file, $_SERVER["REMOTE_ADDR"]."\r\n");    
     

    //Fecha o arquivo 
    fclose($file);

    echo "arquivo criado com sucesso!";





?>