<?php

//function nome da função e (parametros)
//uma função tem que ter o return,caso contario ela e uma sub-rotina.
function hello(){

echo "Função: ";
return "Olá Mundo!<br>";
//não recebe parâmetros só retorna
};

//chamando a função
echo hello(); // printa na tela o return
$frase = hello(); 

//para ver quantos caracteres tem em $frase
echo strlen($frase);



////////////////////////
echo "<br>";
echo "<br>";

#sub rotina

function baybay(){

echo "Sub-rotina: ";
echo "Bay Bay Mundo! <br>";

};

//chamando a função
baybay();

?>