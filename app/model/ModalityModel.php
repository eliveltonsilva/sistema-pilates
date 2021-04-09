<?php

namespace app\model;

class ModalityModel {

    public function insert(\app\entities\Modality $modality) {
        $sql = "INSERT INTO modalidades (descricao, inserido, status) VALUES (:descricao, :inserido, :status)";
        $params = [":descricao" => $modality->getDescription(), ":inserido" => $modality->getInserted(), ":status" => $modality->getStatus()];
        $this->run($sql, $params, "exe");
    }

    public static function getByFilter(\app\entities\Modality $modality) {
        $conn = new \app\config\Sql();

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

    public static function getById(\app\entities\Modality $modality) {
        $conn = new \app\config\Sql();
        $sql = "SELECT * FROM modalidades m WHERE m.id = :id";
        $stmt = $conn->getConnect()->prepare($sql);
        $stmt->bindValue(":id", $modality->getId());
        $stmt->execute();
        return $stmt->fetch();
    }

    public function update(\app\entities\Modality $modality) {
        $sql = "UPDATE modalidades m SET m.descricao = :descricao WHERE m.id = :id";
        $params = [":descricao" => $modality->getDescription(), ":id" => $modality->getId()];
        self::run($sql, $params, "exe");
    }

    public function delete($id) {
        $sql = "UPDATE modalidades m SET m.status = 'E' WHERE m.id = :id";
        $params = [":id" => $id];
        self::run($sql, $params, "exe");
    }

    //private methods
    private static function run($sql, $params = [], $case) {
        $conn = new \app\config\Sql();
        switch ($case) {
            case "exe":
                $stmt = $conn->getConnect()->prepare($sql);
                $stmt->execute($params);
                break;
        }
    }

}
