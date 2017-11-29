<?php

$conexao = new PDO("mysql:host=localhost;dbname=dbphp7", "root", "");

$stmt = $conexao->prepare("INSERT INTO tb_usuarios (deslogin, dessenha) VALUES(:LOGIN, :PASSWORD)");

$login = "doglas";
$password = "123456";

$stmt->bindParam(":LOGIN", $login);
$stmt->bindParam(":PASSWORD", $password);
$stmt->execute();

echo "Inserido com sucesso!";


?>