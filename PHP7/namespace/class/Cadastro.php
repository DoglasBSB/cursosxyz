<?php

class Cadastro {

    private $nome;
    private $email;
    private $senha;

    //get e set
    public function getNome():string
    {
        return $this->nome;
    }
    public function getEmail():string
    {
        return $this->email;
    } public function getSenha():string
    {
        return $this->senha;
    }
    public function setNome($nome)
    {
        $this->nome = $nome;
    }
    public function setEmail($email)
    {
        $this->email = $email;
    }
    public function setSenha($senha)
    {
        $this->senha = $senha;
    }

    //método __toString ->  representação textual de uma instância de um objeto.
    public function __toString(){
        //json_encode é um array serializado (Retorna a representação JSON de um valor).
        return json_encode(array(
            "nome"=>$this->getNome(),
            "email"=>$this->getEmail(),
            "senha"=>$this->getSenha()

        ));
    }




}

?>