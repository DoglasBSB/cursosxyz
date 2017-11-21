<?php

//Conexão SLQ Server e PHP com PDO
//String de conexão
$conexao = new PDO("sqlsrv:Database=dbphp7; Server=localhost\SQLEXPRESS;ConnectionPooling=0", "sa", "root");

$stmt = $conexao->prepare("SELECT * FROM tb_usuarios ORDER BY deslogin;");
$stmt->execute();
$resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);

echo json_encode($resultado);
?>