<?php

namespace app\config;

require("bd.php");

use PDO;
use PDOException;

class Sql extends PDO {

    protected function conectar() {
        try {
            $conn = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME, DB_USER, DB_PASS);
            return $conn;
        } catch (PDOException $exc) {
            throw new \Exception("->Erro connection database<-");
        }
    }

}
