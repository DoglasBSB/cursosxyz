<?php

    interface Veiculo {
     
        //métodos  da interface
        public function acelerar ($velocidade);
        public function frear ($velocidade);
        public function trocarMarcha ($marcha);
   
    }
        abstract class Automovel implements Veiculo {

            public function acelerar ($velocidade)
            {
                echo "O Veículo acelerou até " .$velocidade. " km/h";
            }

            public function frear ($velocidade)
            {
                echo "O Veículo freou até" .$velocidade. " km/h";
            }

            public function trocarMarcha ($marcha)
            {
                echo "O Veículo engatou a marcha " .$marcha;
            }
    }

    //classe criada para poder usar a classe abstrata
    class Delrey extends Automovel {

        public function empurrar (){

        }

    }

$carro = new Delrey();
$carro->acelerar(200);

?>


