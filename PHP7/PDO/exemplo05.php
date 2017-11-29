<?php

//string de conexão 
$conexao = new PDO("mysql:host=localhost;dbname=dbphp7", "root", "");

$stmt = $conexao->prepare("DELETE FROM tb_usuarios WHERE idusuario = :ID");
//id do usuario a ser excluido
$id = 7;

$stmt->bindParam(":ID", $id);

$stmt->execute();

echo "Dados excluídos com sucesso!";




?>