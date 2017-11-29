<?php

//conexão com o banco de dados
$conexao = new mysqli ("localhost", "root", "", "dbphp7");

if ($conexao->connect_error){

    echo "Error: " .$conexao->connect_error;

}
//else echo "conexão bem sucedida!";

//Guarda na variavel resultado a consulta da tabela usarios
$resultado = $conexao->Query("SELECT * FROM tb_usuarios ORDER BY deslogin");

//variavel para guardar dados econverter em um JSON
$data = array();

//para acessar os dados da variavel
 while ($row = $resultado->fetch_assoc() ) {
     //fetch_assoc (associativo)-> traz só o nome da string

    // faz um push em cada linha encontrada
    //ADICIONA UM NOVO ITEM NO ARRAY DATA
     array_push($data, $row);
     //var_dump($row);
 }

 //JSON aparti de um banco de dados 
 echo json_encode($data);

?>