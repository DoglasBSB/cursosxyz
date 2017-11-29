<?php

//include "inc/exemplo01.php"; #
require_once "inc/exemplo01.php"; # REQUIRE_ONCE TRAZ O ARQUIVO SOMENTE 1 VEZ INGNORANDO OUTRA CHAMADA DO MSM ARQUIVO


#INCLUDE = Tenta funcionar msm que o arquivo não exista. + recursos como inclue_path,bom para projetos de INTRANET. Boa prática e usar API e não include usando metodo GET para arquivos externos.

#REQUIRE =Obriga que o arquivo exista e que esteja funcionando,caso contrario para a aexecução do código.


$resultado = somar(10, 20);

echo $resultado;


?>