<?php

namespace app\model;

use app\config\Sql;

class Execute{
    //private methods
    public static function run($sql, $params = [], $case) {
        $conn = new Sql();
        switch ($case) {
            case "exe":
                $stmt = $conn->getConnect()->prepare($sql);
                $stmt->execute($params);
                break;
        }
    }
}