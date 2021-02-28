<?php

namespace app\entities;

class Modalidade extends EntityBase {

    private $descricao;

    function getDescricao() {
        return $this->descricao;
    }

    function setDescricao($descricao): void {
        $this->descricao = $descricao;
    }

}
