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

    public function getModalidade(\app\entities\Modalidade $modalidade)
    {
        $con = new Sql();
        $sql = "SELECT * FROM modalidades m WHERE m.descricao = ':desc'";
        $stmt = $con->conectar()->prepare($sql);
        $stmt->bindValue(":desc", $modalidade->getDescricao());
        $stmt->execute();
        return $stmt->fetch();

    public static function get()
    {
        $con = new Sql();
        $sql = "SELECT * FROM modalidades m";
        $stmt = $con->conectar()->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }
}
