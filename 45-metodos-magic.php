<?php

// Métodos mágicos são métodos que são chamados
// sem que vc perceba, quando se instancia uma 
// classe em um objeto, desde que eles tenham
// sido declarados para isso

// Métodos mágicos começam com __ (dois underlines)

class Endereco {

    private $logradouro;
    private $numero;
    private $cidade;

    // O construct é o método que é executado automaticamente
    // quando a classe é instanciada

    // O construct está sendo usado no lugar de criar getters
    // e setters para atribuir valor a cada uma das variáveis,
    // ganhando tempo. esses valore valores serão atribuidos
    // automaticamente, assim que o método for instanciado

    // Os getters e setters podem e devem ser usados, quando
    // for necessário fazer algo mais específico para aquela
    // atribuição de valor

    public function __construct($a, $b, $c) {
        $this->logradouro = $a;
        $this->numero = $b;
        $this->cidade = $c;
    }

    // O método mágico __destruct é usado para destruir o objeto da 
    // memória, quando a execução for concluída

    public function __destruct(){}

    // __toString converte os valores em strings, tão logo
    // a classe é instanciada

    public function __toString(){
        return $this->logradouro.", ".$this->numero." - ".$this->cidade;
    }

}

// Os parentêses () somente são estritamente necessários após chamar a classe,
// quando se está usando o método construtor

$meuEndereco = new Endereco("Rua Nossa Senhora de Guadalupe", "260", "São Bernardo");

// O echo não executa objetos, e somente está executando o endereço
// por conta do __toString

echo $meuEndereco;