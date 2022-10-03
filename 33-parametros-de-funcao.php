<?php

function ola($texto, $periodo = "Bom dia"){
    return "Olá $texto! $periodo <br>";
}

/* Os parâmetros sem valor padrão definido, 
que obrigatoriamente devem ter seus valores 
passados na chamada, devem ficar em primeiro: */
echo ola("Mundo", "Bom dia");
echo ola("","Boa noite");
echo ola("Esdras", "Boa tarde");
echo ola("Ednalva", "");