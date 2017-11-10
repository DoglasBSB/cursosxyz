<?php

class Pessoa{

        public $nome; // atributo

        public function falar (){ // método 
                                    //$this é uma variavel internado PHP, serve para referenciar atributos e métodos dentro de outros métodos  
            return "O meu nome e ".$this->nome;
        }

}
//criando uma pessoa
$joao = new Pessoa();
$joao-> nome = "João Lucas";
echo $joao->falar();

?>