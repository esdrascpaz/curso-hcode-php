<?php

// Polimorfismo (do grego: muitas formas) é quando um método 
// em uma classe Extendida tem o mesmo nome na classe Pai,
// porém realiza uma ação diferente

abstract class Animal
{
    public function falar(){
        return "Som";
    }
    public function mover(){
        return "Anda";
    }
}

class Cachorro extends Animal
{
    public function falar(){
        return "Late";
    }
}

class Gato extends Animal
{
    public function falar(){
        return "Mia";
    }
}

class Passaro extends Animal
{
    public function falar(){
        return "Canta";
    }
    public function mover(){
        // Acessando o método original da classe Pai como estático
        // com "::" e o "parent" (Parente mais próximo)
        return "Voa e " . parent::mover();
    }
}


$pluto = new Cachorro();

echo $pluto->falar() . "<br/>";
echo $pluto->mover() . "<br/>";

echo "-------------------------<br/>";

$garfield = new Gato();

echo $garfield->falar() . "<br/>";
echo $garfield->mover() . "<br/>";

echo "-------------------------<br/>";

$ave = new Passaro();

echo $ave->falar() . "<br/>";
echo $ave->mover() . "<br/>";
