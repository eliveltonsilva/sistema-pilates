<?php

namespace app\model;

class ModalidadeModel extends \app\config\Sql {

    public function insert(\app\entities\Modalidade $modalidade) {
        $sql = "INSERT INTO modalidades (descricao) VALUES (:desc)";
        $stmt = $this->conectar()->prepare($sql);
        $stmt->bindValue(":desc", $modalidade->getDescricao());
        $stmt->execute();
    }

    public function getModalidade(\app\entities\Modalidade $modalidade) {
        $sql = "SELECT * FROM modalidades m WHERE m.descricao = ':desc'";
        $stmt = $this->conectar()->prepare($sql);
        $stmt->bindValue(":desc", $modalidade->getDescricao());
        $stmt->execute();
        return $stmt->fetch();
    }

    public static function get() {
        $sql = "SELECT * FROM modalidades m";
        $stmt = $this->conectar()->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }

}
