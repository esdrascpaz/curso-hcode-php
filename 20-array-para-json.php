<?php

// Json viewer para ver formatado no navegador

$pessoas = array();

array_push($pessoas, array(
    'nome' => 'Joao',
    'Idade' => 20
));

array_push($pessoas, array(
    'nome' => 'Esdras',
    'Idade' => 28
));

// Transforma a array em Json
echo json_encode($pessoas);

?>