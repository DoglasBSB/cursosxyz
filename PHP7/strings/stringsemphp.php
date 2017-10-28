<?php

$nome = 'hcode';

$nome2 = 'treinamento';

var_dump($nome);
echo "<br>";
var_dump($nome2);

echo "<hr>";

 # ASPAS DUPLAS (aparece o valor da variável)
echo "ABC $nome"; //hcode
echo "<br>"; 
# ASPAS SIMPLES (aparece o nome da variável)
echo 'ABC $nome'; //$nome

echo "<br><br>";
echo "CONVERTE PARA MAIUSCULO";
echo "<br>";

#CAIXA ALTA (MAIUSCULO) - Função strtoupper($texto);
$texto = "> joao lucas";

$texto = strtoupper($texto);

echo $texto;

echo "<br>";

echo "<br>";
echo "CONVERTE PARA MINUSCULO";
echo "<br>";
#CAIXA BAIXA (MINUSCULA) - Função strtolower($texto);

$texto = strtolower($texto);

echo $texto;
echo "<br>";

echo "<hr>";

echo "Apenas a 1ª letra Maiuscula  <br>";
#Apenas a 1ª letra Maiuscula
echo ucfirst($nome);
echo "<br>";
echo "1ª Letra de cada palavra Maiuscula <br>";
#A 1ª letra de cada palavra Maiuscula
echo ucwords($texto);
echo "<br><br>";

echo "Função 'str_replace' para trocar letras ou números";

$empresa = "Hcode";

$empresa = str_replace("o", "0", $empresa);
$empresa = str_replace("e", "3", $empresa);
echo "<br>";
echo "$empresa"; 

echo "<br><br>";
echo "<hr>";


echo "<hr>";

$frase = "A repetição é a mãe da retenção. ";

$palavra = "mãe";

#POSIÇÃO DA PALAVRA
$q = strpos($frase, $palavra);
var_dump($q); // posição 20

echo "<br>";

#Retorna a parte de uma string
$textofrase = substr($frase, 0, $q);
var_dump($textofrase);

echo "<br>";

#Retorna o tamanho de uma string

$texto2 = substr($frase, $q + strlen($palavra), strlen($frase));

echo "<br>";

var_dump($texto2);












?>