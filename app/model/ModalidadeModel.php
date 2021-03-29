<?php

namespace app\model;

class ModalidadeModel {

    public function insert(\app\entities\Modalidade $modalidade) {
        
        //status inicial
        $statusInicial = 'A';
        
        //data do cadastro
        $dataCadastro = new \DateTime();
        
        $conn = new \app\config\Sql();
        $sql = "insert into tb_modalidades (descricao, inserido, status) values (:modalidade, :data, :status)";
        $stmt = $conn->getConnect()->prepare($sql);
        $stmt->bindValue(":desc", $modalidade->getDescricao());
        $stmt->bindValue("data", $dataCadastro->format('Y-m-d'));
        $stmt->bindValue("status", $statusInicial);
        $stmt->execute();
    }

}
