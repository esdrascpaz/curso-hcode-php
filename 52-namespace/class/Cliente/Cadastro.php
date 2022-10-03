<?php

// Cadastro DO CLIENTE

// Infomando que a classe Pai Cadastro 
// com o método getNome() está na pasta Cliente
namespace Cliente;

// "\" indicando para voltar para a raiz,
// onde está a classe Pai Cadastro
class Cadastro extends \Cadastro {
    public function registrarVenda(){
        echo "Foi registrada uma venda para o cliente ".$this->getNome();
    }
}

?>