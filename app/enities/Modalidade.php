<?php

namespace app\entities;

class Modalidade extends EntityBase {

    private $descricao;
    //data em que foi cadastrado
    private $data;
    //A -> Ativo, E -> Excluído, T -> Todos
    private $status;

    function getDescricao() {
        return $this->descricao;
    }

    function getData() {
        return $this->data;
    }

    function getStatus() {
        return $this->status;
    }

    function setDescricao($descricao): void {
        $this->descricao = $descricao;
    }

    function setData($data): void {
        $this->data = $data;
    }

    function setStatus($status): void {
        $this->status = $status;
    }

}
