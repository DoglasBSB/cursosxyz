<?php

require_once("config.php");

//para usar o namespace
use Cliente\Cadastro;

//agora esta classe é a que esta dentro do diretorio cliente
$cad = new Cadastro();

$cad->setNome("fulano de taluax");
$cad->setEmail("funalo.tal@gmail.com.br");
$cad->setSenha("12345678");

$cad->registrarVenda();

?>