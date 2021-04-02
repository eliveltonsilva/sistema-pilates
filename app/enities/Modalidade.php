<?php

namespace app\entities;

class Modalidade extends EntityBase {

    private $descricao;
    //data em que foi cadastrado
    private $inserido;
    //A -> Ativo, E -> Excluído, T -> Todos
    private $status;

    function getDescricao() {
        return $this->descricao;
    }

    function getInserido() {
        return $this->inserido;
    }

    function getStatus() {
        return $this->status;
    }

    function setDescricao($descricao): void {
        $this->descricao = $descricao;
    }

    function setInserido($inserido): void {
        $this->inserido = $inserido;
    }

    function setStatus($status): void {
        $this->status = $status;
    }

}
