<link rel="stylesheet" href="style.css">

<?php

$nome = "Esdras";
$sobrenome = "Costa Paz";
// Concatenação
$nomeCompleto = $nome . " " . $sobrenome;

echo $nomeCompleto;
echo "<br/>";

// limpar variável
unset($nomeCompleto);

// Se existe
if (isset($nomeCompleto)) {
    echo $nomeCompleto;
}

?>