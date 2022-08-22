<?php

// Encapsulamento: proteger, controlar o acesso

// Acesso de atributos e métodos:
// * Classes
// * Classes estendidas
// * objetos instanciando Classes

// Métodos públicos podem enchergar atributos
// públic, private e protected, dentro da sua
// mesma Classe

// protecteds são enchergados na Classe e na Extendida
// privates só são enchergados dentro da própria Classe

class Pessoa {

    public $nome = "Rasmus";
    protected $idade = 48;
    private $senha = "12345";

    public function verDados(){

        echo $this->nome . "<br/>";
        echo $this->idade . "<br/>";
        echo $this->senha . "<br/>";

    }

}

// A classe extends puxa tudo da outra classe,
// menos os atributos privados

class Programador extends Pessoa {

    public function verDados(){

        echo get_class($this) . "<br/>";

        echo $this->nome . "<br/>";
        echo $this->idade . "<br/>";
        echo $this->senha . "<br/>";

    }

}

$objeto = new Programador();

//echo $objeto->nome . "<br/>";

$objeto->verDados();