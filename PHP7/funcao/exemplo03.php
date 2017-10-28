<?php

//parâmetros de funções
//valores  obrigatorios ficam a esquerda
function ola($texto = "Mundo", $periodo){//parametro com valor ou mais de um
//function ola($texto){

	return "Olá $texto! $periodo <br>";


}
//chamando a função
// echo ola(""); parametro vazio 

//         
echo ola("mundo","Bom dia");

echo ola("","Boa noite");
echo ola("funalo","Boa tarde");
echo ola("ciclano","");

?>