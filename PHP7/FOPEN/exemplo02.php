<?php

//ARQUIVO CSV ("Arquivo Formatado")

require_once("config.php");

$sql = new Sql();

$usuarios = $sql->select("SELECT * FROM tb_usuarios ORDER BY deslogin");

//print_r($usuarios);
// array
$headers = array();

foreach ($usuarios[0] as $key => $value) {
    array_push($headers, ucfirst($key));  
}
//cabeçalho do arquivo
$file = fopen("usuarios.csv", "w+");

fwrite($file, implode(",", $headers). "\r\n");

//alimentar o arquivo com os dados
// foreach na variavel usuarios passando todos os registros

//para cada linha que venha do banco de dados 
foreach ($usuarios as $row) { // foreach das linhas
    //pega os nomes das informações e joga dentro da variável $data 
    $data = array();
    //descobrir a chave e o valor
    foreach ($row as $key => $value) { // foreach dos campos
        //depois e colocado dentr odo array
        array_push($data, $value);
    }// End foreach de coluna

    //adicionando os dados da linha dentrko do arquivo
    fwrite($file, implode(",", $data). "\r\n");
 
}// End foreach de linha

fclose($file);

// Função implode espera 2 parametros.
//1º uma string SEPARADOR " o que deseja colocar para dividir umitem do outro". 
//2º o array que vai ser aplicado a regra ex:$headers
//echo implode(",", $headers);

?>