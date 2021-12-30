<?php

// tenta executar o código mesmo que o arquivo não exista ou esteja com erro
// Permite a execução de arquivos da internet
// ONCE faz com que o inlcude não seja chamado mais de uma vez caso ele esteja sendo chamado novamente no mesmo código ou em outro arquivo
include_once "13-exemplo-funcao.php";
include_once "13-exemplo-funcao.php";

$resultado = somar(10, 15);

echo $resultado;

?>