<?php

//conexão com o banco de dados
$conexao = new mysqli ("localhost", "root", "", "dbphp7");

if ($conexao->connect_error){

    echo "Error: " .$conexao->connect_error;

}
//else echo "conexão bem sucedida!";

//$stmt (statments) // prepare -> prepara um comando para enviar p/ o banco de dados
// as ? vai ser trocadas pelos valores
$stmt = $conexao->prepare("INSERT INTO tb_usuarios (deslogin, dessenha) VALUES(?, ?)");

//?
//s->string
//i->inteiro
//d-double

//s - dessenha e s- deslogin
//obs: no bind_param não passa string e sim uma variavel que referencia a string
$stmt->bind_param("ss", $login, $pass);

$login = "user";
$pass = "12345";
//chamando o metodo execute
$stmt->execute();

//caso queira adicionar outro usuario.
$login = "root";
$pass = "#e4fr";

$stmt->execute();


?>