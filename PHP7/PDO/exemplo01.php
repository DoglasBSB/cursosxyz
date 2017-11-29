<?php

//Conexão MySQL e PHP com PDO
$conexao = new PDO("mysql:dbname=dbphp7; host=localhost", "root", "");

$stmt = $conexao->prepare("SELECT * FROM tb_usuarios ORDER BY deslogin");

$stmt->execute();

//fetchAll -> retorna mais de uma linha de array e é indexado por números.

$resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);


//para ler o array de que vem do fetchAll linha por linha
foreach ($resultado as $row) {
    //coluna por colluna
    foreach ($row as $key => $value) {
        //escreve o nome da coluna em negrito e o valor normal
        echo "<strong>". $key.":</strong>". $value."<br/>";
    }
    //para separar um registro de outro
    echo "============================<br>";
}

//var_dump($resultado);
?>