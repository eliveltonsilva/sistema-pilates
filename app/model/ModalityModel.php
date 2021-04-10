<?php

namespace app\model;

use app\entities\Modality;
use app\model\Execute;
use app\config\Sql;

class ModalityModel {

    public function insert(Modality $modality) {
        $sql = "INSERT INTO modalidades (descricao, inserido, status) VALUES (:descricao, :inserido, :status)";
        $params = [":descricao" => $modality->getDescription(), ":inserido" => $modality->getInserted(), ":status" => $modality->getStatus()];
        Execute::run($sql, $params, "exe");
    }

    public static function getByFilter(Modality $modality) {
        $conn = new Sql();

        if ($modality->getStatus() === "T") {
            $sql = "SELECT * FROM modalidades m ORDER BY m.descricao ASC";
            $stmt = $conn->getConnect()->prepare($sql);
        } else {
            $sql = "SELECT * FROM modalidades m WHERE m.descricao LIKE ?  AND m.status = ? ORDER BY m.descricao ASC";
            $stmt = $conn->getConnect()->prepare($sql);
            $stmt->bindValue(1, "%{$modality->getDescription()}%");
            $stmt->bindValue(2, $modality->getStatus());
        }
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public static function getById(Modality $modality) {
        $conn = new Sql();
        $sql = "SELECT * FROM modalidades m WHERE m.id = :id";
        $stmt = $conn->getConnect()->prepare($sql);
        $stmt->bindValue(":id", $modality->getId());
        $stmt->execute();
        return $stmt->fetch();
    }

    public function update(Modality $modality) {
        $sql = "UPDATE modalidades m SET m.descricao = :descricao WHERE m.id = :id";
        $params = [":descricao" => $modality->getDescription(), ":id" => $modality->getId()];
        Execute::run($sql, $params, "exe");
    }

    public function delete($id) {
        $sql = "UPDATE modalidades m SET m.status = 'E' WHERE m.id = :id";
        $params = [":id" => $id];
        Execute::run($sql, $params, "exe");
    }

}
