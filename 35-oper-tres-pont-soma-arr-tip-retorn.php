<?php

// Recebe vários parâmetros inteiros ( != do operador Spread no JS !)
// Converte o retorno em String
function soma(int ...$valores):string {
    return array_sum($valores);
}

echo var_dump( soma(2,2) );
echo "<br>";

echo soma(25,25);
echo "<br>";

/* Como esta função deve receber valores inteiros,
as casas decimais aqui serão ignoradas */
echo soma(1.5,3.2);
echo "<br>";