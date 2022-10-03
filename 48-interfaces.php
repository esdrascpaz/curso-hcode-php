<?php

// Uma interface é uma forma de exigir que algumas regras
// sejam obrigatorias na hora de criar uma classe (?).

interface Veiculo {
    public function acelerar($velocidade);
    public function freiar($velocidade);
    public function trocarMarcha($marcha);    
}

// A classe Civic só vai funcionar, caso tenha os atributos
// e métodos exigidos na interface Veiculo

class Civic implements Veiculo {
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

$carro = new Civic();

$carro->trocarMarcha(1);

?>