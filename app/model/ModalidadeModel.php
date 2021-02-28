<?php

namespace app\model;

class ModalidadeModel {

    public function adicionar(\app\entities\Modalidade $modalidade) {
        $this->sql()->exeSelect("insert into tb_modalidade (descricao) values (:descricao)",
            array(
                ":descricao" => $modalidade->getDescricao()
            ));
    }

    //private methods
    private function sql() {
        $sql = new \app\config\Sql();
        return $sql;
    }

}
