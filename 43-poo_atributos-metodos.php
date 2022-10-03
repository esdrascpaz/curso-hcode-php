<?php

class Carro 
{
    /* atributos privados somente são alterados 
    e acessados via métodos Getters e Setters */
    private $modelo;
    private $motor;
    private $ano;

    // convenção: getNomeMetodo
    public function getModelo () {
        return $this -> modelo;
    }

    public function setModelo ($modelo) {
        // atributo modelo = parâmetro $modelo
        $this -> modelo = $modelo;
    }

    public function getMotor() : float { // retorno será float
        return $this -> motor;
    }

    public function setMotor($motor) {
        $this -> motor = $motor;
    }

    public function getAno() : int { // retorno será initeiro
        return $this -> ano;
    }

    public function setAno($ano) {
        $this -> ano = $ano;
    }

    public function exibir() {
        return array(
            "modelo" => $this -> getModelo(),
            "motor" => $this -> getMotor(),
            "ano" => $this -> getAno()
        );
    }
}

$city = new Carro ();
$city -> setModelo("City Automático");
$city -> setMotor("1.5");
$city -> setAno("2011");

var_dump($city -> exibir());