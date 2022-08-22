<?php

// namespace é um caminho e nome de arquivo em um espaço
// diderente do arquivo atual para organizar o projeto

// O primeiro arquivo a ser criado deve ser o
// config.php, para definir as configurações iniciais
// do projeto

require_once("config.php");

// Usando a classe extendida Cadastro no namespace Cliente
use Cliente\Cadastro;

$cad = new Cadastro();

$cad->setNome("Djalma Sindeaux");
$cad->setEmail("djalma@hcode.com.br");
$cad->setSenha("123456");

// Métdodo que está dentro da classe extendida
// Cadastro no namespace Cliente
$cad->registrarVenda();

?>