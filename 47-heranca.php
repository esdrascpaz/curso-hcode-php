<?php

class Documento {
    private $numero;

    public function getNumero() {
        return $this->numero;
    }

    public function setNumero($n) {
        $this->numero = $n;
    }
}

// Classes extendidas HERDAM todos os dados da
// classe Pai, e contém atributos e métodos mais
// específicos

class CPF extends Documento {
    public function validar():bool {
        $numeroCPF = $this->getNumero();

        return true;
    }
}

$doc = new CPF();

// Método da classe Pai Documento
$doc->setNumero("111222333-44");

// Método da classe extendida
var_dump($doc->validar());

echo "<br/>";

echo $doc->getNumero();

?>