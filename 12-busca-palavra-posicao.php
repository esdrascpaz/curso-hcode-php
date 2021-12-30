<?php

$frase = "A repetição é a mãe da retenção.";

$palavra = "mãe";

// Retorna posição da palavra
$q = strpos($frase, "mãe");

// Vai retornar de $frase o que está escrito da posição 0 até $palavra
$texto = substr($frase, 0, $q);

var_dump($texto);

// Retorna de $frase o que tem depois da palavra, até o fim de $frase
$texto2 = substr($frase, $q + strlen($palavra), strlen($frase));

echo "<br>";

var_dump($texto2);

?>