<?php

//string de conexão 
$conexao = new PDO("mysql:host=localhost;dbname=dbphp7", "root", "");

//metodo de transação
$conexao->beginTransaction();

$stmt = $conexao->prepare("DELETE FROM tb_usuarios WHERE idusuario = ?");

//id do usuario a ser excluido
$id = 8;

//como é so um paramentro fica so o id, caso tivesse mais colocaria a , e o próximo parametro
$stmt->execute(array($id));
//método cancela a trasação,não deixa deletar
//$conexao->rollback();
//echo "Cancela a exclusão de dados!";

//método confirma a exclusão de dados
$conexao->commit();
echo "commit a exclusão de dados!";

?>