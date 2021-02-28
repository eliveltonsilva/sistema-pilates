<?php

namespace app\model;

class AlunoModel
{


    //private methods
    private function sql()
    {
        $sql = new \app\config\Sql();
        return $sql;
    }
}
