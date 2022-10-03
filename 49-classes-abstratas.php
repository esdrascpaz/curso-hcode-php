<?php

// As classes abstratas não só definem os atributos e
// métodos como as interfaces, como os definem e implementam,
// e não podem ser instanciados por objetos, mas devem ser
// estendidos por outras classes

// Uma classe pode estender apenas uma classe abstrata, porém pode
// ter mais de uma interface implementada

// A interface somente define que vc deve criar aqueles métodos, já
// na classe abstrata, os métodos já estão definidos e escritos, e já
// estarão estendidos

interface Veiculo {

    public function acelerar($velocidade);
    public function freiar($velocidade);
    public function trocarMarcha($marcha);
    
}

// Automóvel não pode ser instanciado
abstract class Automovel implements Veiculo {

    public function acelerar($velocidade){

        echo "O veículo acelerou até " . $velocidade . "km/h";

    }

    public function freiar($velocidade){

        echo "O veículo freiou até " . $velocidade . "km/h";

    }

    public function trocarMarcha($marcha){

        echo "O veículo engatou a marcha " . $marcha;

    }

}

class DelRey extends Automovel {

    public function empurrar(){



    }

}

$carro = new DelRey();

$carro->acelerar(200);

?>