<?php 
require_once("config.php");

/*
//Carrega um usuário
$root = new Usuario();
$root->loadbyId(3);
echo $root;
*/

/*
//Carrega uma lista de usuários
$lista = Usuario::getList();
echo json_encode($lista);
*/

/*
//Carrega uma lista de usuários buscando pelo login
$search = Usuario::search("jo");
echo json_encode($search);
*/

/*
//carrega um usuário usando o login e a senha
$usuario = new Usuario();
$usuario->login("doglas", "123456");
echo $usuario;
*/
/*
//Criando um novo usuário
$aluno = new Usuario("fabuloso", "dasdf@sd");
$aluno->insert();
echo $aluno;
*/
/*
//Alterar um usuário
$usuario = new Usuario();
$usuario->loadById(2); //carrega o usuário
$usuario->update("professor", "!@#$%¨&*"); //chama o método p/ alterar
echo $usuario;
*/
//Deletando um usuário
/*
$usuario = new Usuario();
$usuario->loadById(5); //carrega o usuário
$usuario->delete(); // chama o método delete
echo $usuario;
*/
 ?>