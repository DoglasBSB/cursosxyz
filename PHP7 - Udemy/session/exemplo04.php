<?php

//recuperar sessão passando o id gerado no navegador
session_id('ojv3ji9i98pigkcqec0adb7lg0');

require_once("config.php");

//gera um id de sessão
//EM UMA  TELA DE LOGIN USA O SESSION NO ARQUIVO VALIDA.PHP (BOA PRÁTICA DE PROGRAMAÇÃO)

//altera o id toda vez que atualiza a página
session_regenerate_id();

//id da sessão
echo session_id();



var_dump($_SESSION);



?>