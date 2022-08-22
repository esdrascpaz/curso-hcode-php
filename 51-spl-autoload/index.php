<?php

// O autoload carrega as Classes automaticamente
// O nome das dos arquivos com as classes devem ter o mesmo
// nome dessa classe

// Buscando o nome da classe na mesma pasta
function incluirClasses($nomeClasse){
    // Verifica se o arquivo existe
	if (file_exists($nomeClasse.".php") === true) {
		require_once($nomeClasse.".php");
	}
}

// spl = Standard PHP Library

// Forma 1: chamando o nome da função entre aspas
spl_autoload_register("incluirClasses");
// Forma 2: função direta
spl_autoload_register(function($nomeClasse){
    // Verificando se a pasta "abstrata" existe
    // DIRECTORY_SEPARATOR: barra correta para cada SO
	if (file_exists("abstrata" . DIRECTORY_SEPARATOR . $nomeClasse.".php") === true) {
		require_once("abstrata" . DIRECTORY_SEPARATOR . $nomeClasse.".php");
	}
});

$carro = new DelRey();
$carro->acelerar(80);

?>