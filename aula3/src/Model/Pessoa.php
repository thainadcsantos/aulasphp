<?php

namespace App\Model;

class Pessoa{
    // Atributos da classe
    // O ?int permite que o ID seja um número inteiro ou NULL
    // O ID é gerado automaticamente pelo banco de dados
    private ?int $id;

    // Nome é obrigatório no banco, por isso não usamos ?
    private string $nome;

    // Telefone pode ser NULL no banco, por isso usamos ?string
    private ?string $telefone;

    // CPF é obrigatório no banco, por isso não usamos ?
    private string $cpf;

    // Endereço pode ser NULL no banco
    private ?string $endereco;


    // ===============================
    // GETTERS E SETTERS DOS ATRIBUTOS
    // ===============================

    // Getter: retorna o valor do ID
    public function getId(): ?int
    {
        return $this->id;
    }

    // Setter: recebe e define o valor do ID
    public function setId(?int $id): void
    {
        $this->id = $id;
    }


    // Getter: retorna o nome da pessoa
    public function getNome(): string
    {
        return $this->nome;
    }

    // Setter: recebe e define o nome da pessoa
    public function setNome(string $nome): void
    {
        $this->nome = $nome;
    }


    // Getter: retorna o telefone
    public function getTelefone(): ?string
    {
        return $this->telefone;
    }

    // Setter: recebe e define o telefone
    public function setTelefone(?string $telefone): void
    {
        $this->telefone = $telefone;
    }


    // Getter: retorna o CPF
    public function getCpf(): string
    {
        return $this->cpf;
    }

    // Setter: recebe e define o CPF
    public function setCpf(string $cpf): void
    {
        $this->cpf = $cpf;
    }


    // Getter: retorna o endereço
    public function getEndereco(): ?string
    {
        return $this->endereco;
    }

    // Setter: recebe e define o endereço
    public function setEndereco(?string $endereco): void
    {
        $this->endereco = $endereco;
    }
}

?>