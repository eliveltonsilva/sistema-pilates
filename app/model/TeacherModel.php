<?php

namespace app\model;

class TeacherModel{

    public function insert(\app\entities\Teacher $teacher) {
        $conn = new \app\config\Sql();

        $sql = "INSERT INTO `professores` 
                    (`nome`, `dt_nascimento`, `email`, `cpf`, `sexo`, `celular`, `telefone`, `inserido`, `status`) 
                VALUES 
                    (:name, :dt_bith, :mail, :cpf, :sex, :cell, :phone, :inserted, :status); ";
        $stmt = $conn->getConnect()->prepare($sql);
        $stmt->bindValue(":name", $teacher->getName());
        $stmt->bindValue(":dt_bith", $teacher->getDateBirth());
        $stmt->bindValue(":mail", $teacher->getMail());
        $stmt->bindValue(":cpf", $teacher->getCpf());
        $stmt->bindValue(":sex", $teacher->getSex());
        $stmt->bindValue(":cell", $teacher->getCell());
        $stmt->bindValue(":phone", $teacher->getPhone());
        $stmt->bindValue(":inserted", $teacher->getInserted());
        $stmt->bindValue(":status", $teacher->getStatus());
        $stmt->execute();
    }

    public static function getById(\app\entities\Teacher $teacher){
        $conn = new \app\config\Sql();
        
        $sql = "SELECT * FROM professores p where p.id = :id";
        $stmt = $conn->getConnect()->prepare($sql);
        $stmt->bindValue(":id", $teacher->getId());
        $stmt->execute();
        return $stmt->fetch();
    }

    public function update(\app\entities\Teacher $teacher){
        $conn = new \app\config\Sql();
        $sql = "UPDATE 
                    professores p 
                SET 
                    p.nome = :name , p.dt_nascimento =  :dt_bith , p.email = :mail, p.cpf = :cpf, 
                    p.sexo = :sex, p.celular = :cell, p.telefone = :phone, p.inserido = :inserted, p.status = :status
                WHERE 
                    p.id = :id";
        $stmt = $conn->getConnect()->prepare($sql);
        $stmt->bindValue(":name", $teacher->getName());
        $stmt->bindValue(":dt_bith", $teacher->getDateBirth());
        $stmt->bindValue(":mail", $teacher->getMail());
        $stmt->bindValue(":cpf", $teacher->getCpf());
        $stmt->bindValue(":sex", $teacher->getSex());
        $stmt->bindValue(":cell", $teacher->getCell());
        $stmt->bindValue(":phone", $teacher->getPhone());
        $stmt->bindValue(":inserted", $teacher->getInserted());
        $stmt->bindValue(":status", $teacher->getStatus());
        $stmt->bindValue(":id", $teacher->getId());
        $stmt->execute();
    }

    public function delete($id){
        $conn = new \app\config\Sql();
        $sql = "UPDATE professores p SET p.status = 'E' WHERE p.id = :id";
        $stmt = $conn->getConnect()->prepare($sql);
        $stmt->bindValue(":id", $id);
        $stmt->execute();
    }

}