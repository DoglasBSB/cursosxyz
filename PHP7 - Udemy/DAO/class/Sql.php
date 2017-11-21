<?php

// herda da classe PDO
class Sql extends PDO {

    //conexão privada
    private $conexao;
    //método construtor que vai conectar ao BD
    public function __construct(){
        //string de conexão
        $this->conexao = new PDO("mysql:host=localhost;dbname=dbphp7", "root", "");

    }
    //método 
    private function setParams($statement, $parameters = array()){
        //percorre
        foreach ($parameters as $key => $value) {
            
            $this->setParam($statement, $key, $value);

        }

    }
    //métdo parareceber a chave e o valor com bindParam
    private function setParam($statement, $key, $value){

        $statement->bindParam($key, $value);

    } 

    public function query($rawQuery, $params = array()) {

        $stmt = $this->conexao->prepare($rawQuery);

        $this->setParams($stmt, $params);
        //executa
        $stmt->execute();
        //retorna
        return $stmt;

    }

    public function select($rawQuery, $params = array()):array
    {

        $stmt = $this->query($rawQuery, $params);
        
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    }
}

?>