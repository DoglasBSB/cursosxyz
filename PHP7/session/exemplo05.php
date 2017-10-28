<?php

require_once("config.php");

// define o caminho do armazenamento da sessão atual
echo session_save_path();

echo "<br>";

//retorna o status atual da sessão 
//echo session_status();

//retorna um int
var_dump(session_status());


/*

    se retornar 0 - PHP_SESSION_DISABLED se as sessões estiverem desabilitadas.
    se retornar 1 - PHP_SESSION_NONE se as sessões estiverem habilitadas, mas nenhuma existir.
    se retornar 2 - PHP_SESSION_ACTIVE se as sessões estiverem habilitadas, e uma existir.

*/
echo "<br>";

switch (session_status()) {

		case PHP_SESSION_DISABLED:
		echo "as sessões estiverem desabilitadas";
		break;

		case PHP_SESSION_NONE:
		echo "as sessões estiverem habilitadas, mas nenhuma existir.";
		break;

		case PHP_SESSION_ACTIVE:
		echo "as sessões estiverem habilitadas, e uma existir.";
		break;
	
}	

?>