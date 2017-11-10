<?php

class Pessoa{


//atributos
public $nome = "fulano";
protected $idade = 20;
private $senha = "546a73@*72";

    //método público verDados
    public function verDados(){

        echo $this->nome. "<br/>";
        echo $this->idade. "<br/>";
        echo $this->senha. "<br/>";
    }

}

//Herda tudo da classe pessoa menos o que for private 
//herança de objeto (extends)
class Programador extends Pessoa {


    //método público verDados dentro da classe programador
    public function verDados(){

                //função get_class ela espera um objeto.Serve para mostra a classe que foi feito a instancia do objeto.
                echo get_class($this). "<br/>";
        
                echo $this->nome. "<br/>"; // exibe pois e público
                echo $this->idade. "<br/>"; // exibe pois foi herdado
                echo $this->senha. "<br/>"; // acesso negado é private
            }

}


$objeto = new Programador();
//echo $objeto->nome."<br/>"; 

//chama o método verDados
// agora está sendo chamado da classe Programador e não da classe Pessoa
$objeto->verDados();

?>