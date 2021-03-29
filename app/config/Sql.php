<?php

namespace app\config;

use PDO;

require("bd.php");

class Sql {

    public function getConnect() {
       $conn = new PDO("pgsql:host=".DB_HOST.";port=".DB_PORT.";dbname=".DB_NAME.";user=".DB_USER.";password=". DB_PASS);
       return $conn;
    }

}
