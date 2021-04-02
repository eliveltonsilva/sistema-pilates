<?php

namespace app\config;

use PDO;
use PDOException;

require("bd.php");

class Sql {

    public function getConnect() {
        try {
            $conn = new PDO("mysql:host=" . base64_decode(DB_HOST). ";dbname=" . base64_decode(DB_NAME), base64_decode(DB_USER), base64_decode(DB_PASS));
            return $conn;
        } catch (PDOException $ex) {
            throw new \Exception("->Erro connection database<-");
        }
    }

}
