<?php

$conexao = new PDO("mysql:host=localhost;dbname=dbphp7", "root", "");

$stmt = $conexao->prepare("UPDATE tb_usuarios SET deslogin = :LOGIN, dessenha = :PASSWORD WHERE idusuario = :ID");

$login = "root";
$password = "12w123ad3";
$id = 9;

$stmt->bindParam(":LOGIN", $login);
$stmt->bindParam(":PASSWORD", $password);
$stmt->bindParam(":ID", $id);

$stmt->execute();

echo "Dados alterados com sucesso!";




?>