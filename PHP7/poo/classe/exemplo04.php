<?php

class Endereco{

    private $logradouro;
    private $numero;
    private $cidade;

    public function __construct($a, $b, $c){

            $this->logradouro = $a;
            $this->numero = $b;
            $this->cidade = $c;
    }
    // é chamado quando o objeto e destruido 
    //1º quando a página chega no fim da execução 
    //2º se quiser tirar da memoria (com a função unset --> remove os indices da variavel limpando.
   
    //Método destruct e utilizado quando o objeto e removido da mémoria
    public function __destruct(){
        
        //var_dump mostra atributos (informações)
        //var_dump("DESTRUIR");
    }

    //pega o objeto e transforma em string ou converte-lo
    public function __toString(){
    return $this->logradouro. ", ".$this->numero. " - ".$this->cidade;
   }

}

$meuEndereco = new Endereco ("Rua Gilmar Mendes Souza", "232", "Santos");
//var_dump($meuEndereco);

//Função unset destroi o objeto limpando-o da mémoria
//unset($meuEndereco);

echo $meuEndereco;

?>