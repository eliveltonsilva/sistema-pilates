<?php

namespace app\model;

class ModalidadeModel extends \app\config\Sql{

    public function insert(\app\entities\Modalidade $modalidade) {
        
        try {
            $sql = "INSERT INTO modalidades (descricao) VALUES (:desc)";
            $stmt = $this->conectar()->prepare($sql);
            $stmt->bindValue(":desc", $modalidade->getDescricao());
            $stmt->execute();
        } catch (\PDOException $exc) {
            throw new \Exception($exc->getTraceAsString());
        }
    }

    public function getModalidade(\app\entities\Modalidade $modalidade) {
        try {
            $sql = "SELECT * FROM modalidades m WHERE m.descricao = ':desc'";
            $stmt = $this->conectar()->prepare($sql);
            $stmt->bindValue(":desc", $modalidade->getDescricao());
            $stmt->execute();
            return $stmt->fetch();
        } catch (\PDOException $exc) {
            throw new \Exception($exc->getTraceAsString());
        }
    }

    public static function get() {
        try {
            $sql = "SELECT * FROM modalidades m";
            $stmt = $this->conectar()->prepare($sql);
            $stmt->execute();
            return $stmt->fetchAll();
        } catch (\PDOException $exc) {
            throw new \Exception($exc->getTraceAsString());
        }
    }

}
