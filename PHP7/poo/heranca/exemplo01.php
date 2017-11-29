<?php

class Documento {

private $numero;

    public function getNumero()
    {
         return $this->numero;
    }

    public function setNumero($n)
    {
        $this->numero = $n;
    }
}

class CPF extends Documento {

    public function validar():bool
    {

        $numeroCPF  = $this->getNumero();

        //Validação do CPF
        
         
        return true;
    }

}

$doc = new CPF();

$doc->setNumero("111222333-56");

//mostra o retorno do validar "true"
var_dump($doc->validar());

echo "<br/>";
//mostra o numero do CPF que foi definido
echo $doc->getNumero();

?>