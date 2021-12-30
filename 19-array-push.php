<?php

$pessoas = array();

// Adicionando uma nova array dentro da array $pessoas
array_push($pessoas, array(
    'nome' => 'Jõao',
    'Idade' => 20
));

array_push($pessoas, array(
    'nome' => 'Esdras',
    'Idade' => 28
));

print_r($pessoas[0]);
echo "<br>";

print_r($pessoas[0]['nome']);

?>