<?php

$nome = "esdras costa";

////////////////////////////////////////////////////

$nome = strtoupper($nome);

echo $nome;

$nome = strtolower($nome);

echo "<br>";

echo $nome;

////////////////////////////////////////////////////

// Primeira letra da primeira palavra em maiúsculo
$nome = ucfirst($nome);

echo "<br>";

echo $nome;

////////////////////////////////////////////////////

// Primeira letra de cada palavra em maiúsculo
$nome = ucwords($nome);

echo "<br>";

echo $nome;

?>