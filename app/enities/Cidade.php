<?php

namespace app\entities;

class Cidade extends EntityBase {

    private $descricao;
    private $uf;

    function getDescricao() {
        return $this->descricao;
    }

    function getUf() {
        return $this->uf;
    }

    function setDescricao($descricao): void {
        $this->descricao = $descricao;
    }

    function setUf($uf): void {
        $this->uf = $uf;
    }

}
