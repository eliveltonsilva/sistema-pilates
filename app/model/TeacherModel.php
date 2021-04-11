<?php

namespace app\model;

use app\entities\Teacher;
use app\config\Sql;

class TeacherModel{

    public function insert(Teacher $teacher) {
        $conn = new Sql();

        $sql = "INSERT INTO `professores` 
                    (`nome`, `dt_nascimento`, `email`, `cpf`, `sexo`, `celular`, `inserido`, `status`, 
                    `cep`, `cidade`, `estado`, `endereco`, `numero`, `bairro`, `complemento`) 
                VALUES 
                    (:name, :dt_bith, :mail, :cpf, :sex, :cell, :inserted, :status, :cep, :cidade, :estado,
                    :endereco, :numero, :bairro, :complemento);";

        $params = [":name" => $teacher->getName(),
            ":dt_bith" => $teacher->getDateBirth(),
            ":mail" => $teacher->getMail(),
            ":cpf" => $teacher->getCpf(),
            ":sex" => $teacher->getSex(),
            ":cell" => $teacher->getCell(),
            ":inserted" => $teacher->getInserted(),
            ":status" => $teacher->getStatus(),
            ":cep" => $teacher->getCep(),
            ":cidade" => $teacher->getCity(),
            ":estado" => $teacher->getUf(),
            ":endereco" => $teacher->getAddress(),
            ":numero" => $teacher->getNumber(),
            ":bairro" => $teacher->getDistrict(),
            ":complemento" => $teacher->getComplement()];

        Execute::run($sql, $params, "exe");
    }

    public static function getByFilter(Teacher $teacher) {
        $conn = new Sql();

        if ($teacher->getStatus() === "T") {
            $sql = "SELECT * FROM professores p ORDER BY p.nome ASC";
            $stmt = $conn->getConnect()->prepare($sql);
        } else {
            $sql = "SELECT * FROM professores p WHERE p.nome LIKE ?  AND p.status = ? ORDER BY p.nome ASC";
            $stmt = $conn->getConnect()->prepare($sql);
            $stmt->bindValue(1, "%{$teacher->getName()}%");
            $stmt->bindValue(2, $teacher->getStatus());
        }
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public static function getById(Teacher $teacher){
        $conn = new Sql();
        
        $sql = "SELECT * FROM professores p where p.id = :id";
        $stmt = $conn->getConnect()->prepare($sql);
        $stmt->bindValue(":id", $teacher->getId());
        $stmt->execute();
        return $stmt->fetch();
    }

    public function update(Teacher $teacher){
        $conn = new Sql();
        $sql = "UPDATE 
                    professores p 
                SET 
                    p.nome = :name , p.dt_nascimento =  :dt_bith , p.email = :mail, p.cpf = :cpf, 
                    p.sexo = :sex, p.celular = :cell, p.inserido = :inserted
                WHERE 
                    p.id = :id";

        $params = [
            ":name" => $teacher->getName(),
            ":dt_bith" => $teacher->getDateBirth(),
            ":mail" => $teacher->getMail(),
            ":cpf" => $teacher->getCpf(),
            ":sex" => $teacher->getSex(),
            ":cell" => $teacher->getCell(),
            ":inserted" => $teacher->getInserted(),
            ":cep" => $teacher->getCep(),
            ":cidade" => $teacher->getCity(),
            ":estado" => $teacher->getUf(),
            ":endereco" => $teacher->getAddress(),
            ":numero" => $teacher->getNumber(),
            ":bairro" => $teacher->getDistrict(),
            ":complemento" => $teacher->getComplement(),
            ":id" => $teacher->getId()];

        Execute::run($sql, $params, "exe");
    }

    public function delete($id){
        $conn = new Sql();
        $sql = "UPDATE professores p SET p.status = 'E' WHERE p.id = :id";
        $params = [":id" => $id];
        Execute::run($sql, $params, "exe");
    }

}