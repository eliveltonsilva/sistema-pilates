<?php

namespace app\config;

require("bd.php");

use PDO;

class Sql extends PDO
{

    private $conn;

    public function __construct()
    {

        $this->conn = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME, DB_USER, DB_PASS);
    }

    private function setParams($statement, $parameters = array())
    {

        foreach ($parameters as $key => $value) {

            $this->setParam($statement, $key, $value);
        }
    }

    private function setParam($statement, $key, $value)
    {

        $statement->bindParam($key, $value);
    }

    public function exeQuery($rawQuery, $params = array())
    {

        $stmt = $this->conn->prepare($rawQuery);

        $this->setParams($stmt, $params);

        $stmt->execute();

        return $stmt;
    }

    public function exeSelect($rawQuery, $params = array()): array
    {

        $stmt = $this->exeQuery($rawQuery, $params);

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
