<?php

namespace app\model;

use Logs;

class ModalityModel {

    public function insert(\app\entities\Modality $modality) {
        $conn = new \app\config\Sql();
        $sql = "INSERT INTO modalidades (descricao, inserido, status) VALUES (:descricao, :inserido, :status)";
        $stmt = $conn->getConnect()->prepare($sql);
        $stmt->bindValue(":descricao", $modality->getDescription());
        $stmt->bindValue(":inserido", $modality->getInserted());
        $stmt->bindValue(":status", $modality->getStatus());
        $stmt->execute();
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
    
    public static function getById(\app\entities\Modality $modality){
        $conn = new \app\config\Sql();
        
        $sql = "SELECT * FROM modalidades m WHERE m.id = :id";
        $stmt = $conn->getConnect()->prepare($sql);
        $stmt->bindValue(":id", $modality->getId());
        $stmt->execute();
        return $stmt->fetch();
    }
    
    public function update(\app\entities\Modality $modality){
        $conn = new \app\config\Sql();
        $sql = "UPDATE modalidades m SET m.descricao = :descricao WHERE m.id = :id";
        $stmt = $conn->getConnect()->prepare($sql);
        $stmt->bindValue(":descricao", $modality->getDescription());
        $stmt->bindValue(":id", $modality->getId());
        $stmt->execute();
    }
    
    public function delete($id){
        $conn = new \app\config\Sql();
        $sql = "UPDATE modalidades m SET m.status = 'E' WHERE m.id = :id";
        $stmt = $conn->getConnect()->prepare($sql);
        $stmt->bindValue(":id", $id);
        $stmt->execute();
    }

}
