<?php

namespace app\model;

use app\config\Sql;
use app\entities\Modalidade;

class ModalidadeModel
{

    public function insert(Modalidade $modalidade)
    {
        $con = new Sql();
        $sql = "INSERT INTO modalidades (descricao) VALUES (:desc)";
        $stmt = $con->conectar()->prepare($sql);
        $stmt->bindValue(":desc", $modalidade->getDescricao());
        $stmt->execute();
    }

    public function edit(Modalidade $modalidade)
    {
        $con = new Sql();
        $sql = "UPDATE modalidades SET descricao = :desc WHERE id = :id";
        $stmt = $con->conectar()->prepare($sql);
        $stmt->bindValue(":desc", $modalidade->getDescricao());
        $stmt->bindValue(":id", $modalidade->getId());
        $stmt->execute();
    }

    public function getModalidade(Modalidade $modalidade)
    {
        $con = new Sql();
        $sql = "SELECT * FROM modalidades m WHERE m.descricao = ':desc'";
        $stmt = $con->conectar()->prepare($sql);
        $stmt->bindValue(":desc", $modalidade->getDescricao());
        $stmt->execute();
        return $stmt->fetch();
    }

    public static function get($descricao)
    {
        $con = new Sql();
        $sql = "SELECT * FROM modalidades m WHERE m.descricao LIKE ?";
        $stmt = $con->conectar()->prepare($sql);
        $stmt->bindValue(1, "%{$descricao}%");
        $stmt->execute();
        return $stmt->fetchAll();
    }
}
