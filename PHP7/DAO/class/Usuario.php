<?php

class Usuario {
    
    /*
     * Atributos da classe
     */
    private $idusuario;
    private $deslogin;
    private $dessenha;
    private $dtcadastro;

    /*
     * Métodos get e sets das classes
     */
    public function getIdusuario(){
        return $this->idusuario;
    }
    public function setIdusuario($value){
         $this->idusuario = $value;
    }

    public function getDeslogin(){
        return $this->deslogin;
    }
    public function setDeslogin($value){
         $this->deslogin = $value;
    }

    public function getDessenha(){
        return $this->dessenha;
    }
    public function setDessenha($value){
         $this->dessenha = $value;
    }

    public function getDtcadastro(){
        return $this->dtcadastro;
    }
    public function setDtcadastro($value){
         $this->dtcadastro = $value;
    }
    /*
     * Método que carrega pelo id, traz somente 1 usuário
     */
    public function loadById($id){

        $sql = new Sql();

        $results = $sql->select("SELECT * FROM tb_usuarios WHERE idusuario = :ID", array(
            ":ID"=>$id
        ));

        if (count($results) > 0){

           $this->setData($results[0]);
        }

    }
    /*
     *Traz uma lista de usuários
     *método static (não necessita de ser estânciado).
     */
    public static function getList(){

        $sql = new Sql();

        return $sql->select("SELECT * FROM tb_usuarios ORDER BY deslogin;");
    }

     /*
      *Método de busca de usuários pelo login
      */
    public static function search($login){

        $sql =new Sql();

        return $sql->select("SELECT * FROM tb_usuarios WHERE deslogin LIKE :SEARCH ORDER BY deslogin", array(
            ":SEARCH"=>"%".$login."%" // %% aqui neste método evita SQL Injection
        
        ));
    }
    /*
     *Método de busca de usuários pelo login e senha
     */
    public function login($login, $password){

             $sql = new Sql();
            
            $results = $sql->select("SELECT * FROM tb_usuarios WHERE deslogin = :LOGIN AND dessenha = :PASSWORD", array(
                        ":LOGIN"=>$login,
                        ":PASSWORD"=>$password
            ));
            
            if (count($results) > 0 ){
                        
                $this->setData($results[0]);
                                 
            } else {

                throw new Exception("Login e/ou senha inválidos."); 
            }
    }
    /*
     *
     */
    public function setData($data){

        $this->setIdusuario($data['idusuario']);
        $this->setDeslogin($data['deslogin']);
        $this->setDessenha($data['dessenha']);
        $this->setDtcadastro(new DateTime($data['dtcadastro']));
        
    }
    /**
     * Método para inserir 
     */
    public function insert(){

        //instância da classe Slq
        $sql = new Sql();

        $results = $sql->select("CALL sp_usuarios_insert(:LOGIN, :PASSWORD)", array(
            ':LOGIN'=>$this->getDeslogin(),
            ':PASSWORD'=>$this->getDessenha()
        ));

        if (count($results) > 0) {
            $this->setData($results[0]);
        }
    }
    /*
     * Método para alterar 
     */
     public function update($login, $password){

        $this->setDeslogin($login);
        $this->setDessenha($password);

        $sql = new Sql();

        $sql->query("UPDATE tb_usuarios SET deslogin = :LOGIN, dessenha = :PASSWORD WHERE idusuario = :ID", array(
            ':LOGIN'=>$this->getDeslogin(),
            ':PASSWORD'=>$this->getDessenha(),
            ':ID'=>$this->getIdusuario()
        ));

     }
     /*
     * Método para deletar 
     */
     public function delete(){

        $sql = new Sql();

        $sql->query("DELETE FROM tb_usuarios WHERE idusuario = :ID", array(
            ':ID'=>$this->getIdusuario()
        ));

        $this->setIdusuario(0);
        $this->setDeslogin("");
        $this->setDessenha("");
        $this->setDtcadastro(new DateTime());
     }

    public function __construct($login = "", $password = ""){

        $this->setDeslogin($login);
        $this->setDessenha($password);
    }
    /*
     *Método mágico __toString
     */
    public function __toString(){

        return json_encode(array(
            "idusuario"=>$this->getIdusuario(),
            "deslogin"=>$this->getDeslogin(),
            "dessenha"=>$this->getDessenha(),
            "dtcadastro"=>$this->getDtcadastro()->format("d/m/Y H:i:s")

        ));
    }

}

?>