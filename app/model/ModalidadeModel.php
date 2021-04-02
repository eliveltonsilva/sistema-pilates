<?php

namespace app\model;

class ModalidadeModel {

    public function insert(\app\entities\Modalidade $modalidade) {
        $conn = new \app\config\Sql();
        $sql = "INSERT INTO modalidadess (descricao, status, inserido) VALUES (:modalidade, :status, :inserido)";
        $stmt = $conn->getConnect()->prepare($sql);
        $stmt->bindValue(":modalidade", $modalidade->getDescricao());
        $stmt->bindValue(":status", $modalidade->getStatus());
        $stmt->bindValue(":inserido", $modalidade->getInserido());
        $stmt->execute();
    }
}
