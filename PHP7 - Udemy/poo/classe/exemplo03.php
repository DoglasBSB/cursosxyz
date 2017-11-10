<?php

class Documento{

    private $numero;

    //métodos
    //Inicio: get e set
    public function getNumero(){
        return $this->numero;
    }

    public function setNumero($numero){
        //acessando método estático
        $resultado = Documento::validarCPF($numero);

        if ($resultado === false){
            throw new Exception("CPF informado não é válido!", 1);
        }
        $this->numero = $numero;
    }
    //Término: get e set

    //Início:método estático
    public static function validarCPF($cpf){

        //verifica seum número foi informado
        if(empty($cpf)) {
            return false;
        }
        //elimina possíveis mascaras
        $cpf = preg_match('/[0-9]/', $cpf)?$cpf:0;
        $cpf = str_pad($cpf, 11, '0', STR_PAD_LEFT);
         
        //Verifica se o número de digitos informados é igual a 11
        if (strlen($cpf) != 11) {
            echo "length";
            return false;
        }
        
        //Verifica se nenhuma das sequencias inválidas abaixo foi digitada.
        //caso afirmativo, retorna falso.
        else if ($cpf == '00000000000' || 
            $cpf == '11111111111' || 
            $cpf == '22222222222' || 
            $cpf == '33333333333' || 
            $cpf == '44444444444' || 
            $cpf == '55555555555' || 
            $cpf == '66666666666' || 
            $cpf == '77777777777' || 
            $cpf == '88888888888' || 
            $cpf == '99999999999') {
            return false;
    
            //Calcula os digitos verificadores para verificar se o CPF é válido.
         } else {   
             
            for ($t = 9; $t < 11; $t++) {
                 
                for ($d = 0, $c = 0; $c < $t; $c++) {
                    $d += $cpf{$c} * (($t + 1) - $c);
                }
                $d = ((10 * $d) % 11) % 10;
                if ($cpf{$c} != $d) {
                    return false;
                    //return " inválido!";
                }
            }
            
            return true;
            //return " valido!";
        }


    }
    //Término: método estático

}
/*  instanciando a classe e validando o cpf 
$cpf = new Documento(); 
$cpf->setNumero("06161580845");

// Retorna o tipo,tamanho e valor 
var_dump($cpf->getNumero());
echo "<br/>";
*/

/*
echo "Este CPF é:";
echo Documento::validarCPF("06161580841");
*/

//validar cpf sem instanciar a classe (método estático)
//RETORNA True ou False
var_dump(Documento::validarCPF("06161580845"));




?>