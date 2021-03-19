<?php

namespace app\model;

use app\entities\Cidade;

class CidadeModel {
    public function insert(Cidade $cidade)
    {
        $con = new \app\config\Sql();
        $sql = "INSERT INTO cidades (descricao, uf) VALUES (:desc, :uf)";
        $stmt = $con->conectar()->prepare($sql);
        $stmt->bindValue(":desc", $cidade->getDescricao());
        $stmt->bindValue(":uf", $cidade->getUf());
        $stmt->execute();
    }
    
     public function edit(Cidade $cidade)
    {
        $con = new \app\config\Sql();
        $sql = "UPDATE cidades SET descricao = :desc, uf = :uf WHERE id = :id";
        $stmt = $con->conectar()->prepare($sql);
        $stmt->bindValue(":desc", $cidade->getDescricao());
        $stmt->bindValue(":uf", $cidade->getUf());
        $stmt->bindValue(":id", $cidade->getId());
        $stmt->execute();
    }

    public static function get()
    {
        $con = new \app\config\Sql();
        $sql = "SELECT * FROM cidades";
        $stmt = $con->conectar()->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }
}
