<?php

namespace app\entities;

class Pessoa extends EntityBase {

    private $nome;
    private $dataNascimento;
    private $sexo;
    private $cpf;
    private $rg;
    private $email;
    private $celular;
    private $telefone;

    function getNome() {
        return $this->nome;
    }

    function getDataNascimento() {
        return $this->dataNascimento;
    }

    function getSexo() {
        return $this->sexo;
    }

    function getCpf() {
        return $this->cpf;
    }

    function getRg() {
        return $this->rg;
    }

    function getEmail() {
        return $this->email;
    }

    function getCelular() {
        return $this->celular;
    }

    function getTelefone() {
        return $this->telefone;
    }

    function setNome($nome): void {
        $this->nome = $nome;
    }

    function setDataNascimento($dataNascimento): void {
        $this->dataNascimento = $dataNascimento;
    }

    function setSexo($sexo): void {
        $this->sexo = $sexo;
    }

    function setCpf($cpf): void {
        $this->cpf = $cpf;
    }

    function setRg($rg): void {
        $this->rg = $rg;
    }

    function setEmail($email): void {
        $this->email = $email;
    }

    function setCelular($celular): void {
        $this->celular = $celular;
    }

    function setTelefone($telefone): void {
        $this->telefone = $telefone;
    }

}
