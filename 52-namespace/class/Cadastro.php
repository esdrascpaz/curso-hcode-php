<?php

// Nome da classe igual o nome do arquivo

// Classe Pai com propriedades para qualquer tipo de cadastro
// que pode ser extendida para classes com propriedades específicas
class Cadastro
{
    private $nome;
    private $email;
    private $senha;

    public function getNome(): string
    {
        return $this->nome;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function getSenha(): string
    {
        return $this->senha;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function setSenha($senha)
    {
        $this->senha = $senha;
    }

    public function __toString()
    {
        // Transformando em Json
        // Extensão do Chrome JSON Viewer
        return json_encode(array(
            "nome" => $this->getNome(),
            "email" => $this->getEmail(),
            "senha" => $this->getSenha()
        ));
    }
}
