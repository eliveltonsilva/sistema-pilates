<?php

namespace app\entities;

class Aluno extends Pessoa {

    private $nome;

    function getNome() {
        return $this->nome;
    }

    function setNome($nome): void {
        $this->nome = $nome;
    }

}
