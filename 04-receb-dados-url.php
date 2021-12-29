<?php

// http://localhost/exemplo.php ?valorVindoDaUrl=valor
// O valor sempre é uma String
$nome = (int)$_GET["valorVindoDaUrl"]; // "int" força o valor para inteiro
$nome = (int)$_GET["outroValorVindoDaUrl"]; // ?valorVindoDaUrl=valor&outroValorVindoDaUrl -> Cada parâmetro é separado pelo &
?>