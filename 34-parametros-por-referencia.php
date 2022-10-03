<?php

$pessoa = array(
    'nome' => 'Esdras',
    'idade' => 28
);

// Sem o "&", o valor de $value só é alterado no foreach
foreach ($pessoa as &$value) {
    if(gettype($value) === 'integer') {
        // Com o "&", o valor é alterado dentro do array pessoa
        $value += 10;

        echo $value . '<br>';
    }
}

print_r($pessoa);