<?php

class Pessoa
{
    public $nome; // Atributo

    public function falar() { // Método
        return "O meu nome é: " . $this -> nome;
    }
}

$esdras = new Pessoa (); // Objeto instanciando (representando) a classe

$esdras -> nome = "Esdras Costa Paz"; /* Atribuindo valor ao 
atributo $nome */

echo $esdras -> falar(); // Chamando método do Objeto $esdras