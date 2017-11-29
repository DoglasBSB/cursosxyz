<?php

require_once("config.php");

#apaga as variaveis de sessão 
//session_unset($_SESSION['nome']);

# usando a sessão
//echo $_SESSION ['nome'];

#limpa a variável e remove o usuário
session_destroy();

?>