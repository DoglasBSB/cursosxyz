<?php

// Classe abstrata PAI
abstract class Animal {

    public function falar(){

        return "Som";
    }

    public function mover(){

        return "Anda";
    }

} 

// classe filha
class Cachorro extends Animal {

    //polimorfismo
    public function falar(){

        return "Late";
    }

}

class Gato extends Animal{

    public function falar(){

        return "Mia";
    }

    public function mover(){

        return "Corre";
    }

}

class Passaro extends Animal{

    public function falar(){
        return "Canta ";
    }

    public function mover(){
        return "Voa e ". parent::mover();// polimorfismo e já esta chamando o metodo moverda classe animal
    }
}



$pluto = new Cachorro();

echo "O Cachorro ". $pluto->falar(). " e "; //polimorfismo
echo $pluto->mover(). "<br/>"; //herdando da classe PAI

echo "---------------------";
echo "<br/>";

$garfiled = new Gato();

echo "O Gato ". $garfiled->falar(). " e "; //polimorfismo
echo $garfiled->mover(). "<br/>"; //polimorfismo

echo "---------------------";
echo "<br/>";

$ave = new Passaro();

echo "O Passaro ". $ave->falar(). $ave->mover(). "<br/>"; //polimorfismo




?>