<?php

class Pessoa{


    //atributos
    public $nome = "Rasmus Lerdorf";
    protected $idade = 27;
    private $senha = "123456";

    //método publico verDados está na mesca classe Pessoa,por meio dele os dados serão acessados mesmo sendo protected ou private  
    public function verDados(){

        echo $this->nome. "<br/>";
        echo $this->idade. "<br/>";
        echo $this->senha. "<br/>";


    }
} 

$objeto = new Pessoa();

//echo $objeto->nome. "<br/>"; //mesmo acessando fora do objeto vai aparecer pois e público
//echo $objeto->idade. "<br/>"; // acesso negado,pois e protegido a não ser que esteja dentro da propria classe ou herdado da classe
//echo $objeto->senha. "<br/>"; // acesso negado só a própria classe acessa

//chama o metodo verDados que é público mostrando assim os valores dos atributos 
$objeto->verDados();


#Atributos e métodos


?>