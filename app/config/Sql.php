<?php

namespace app\config;

require("bd.php");

use PDO;

class Sql {

    public function conectar() {
        $conn = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME, DB_USER, DB_PASS);
        return $conn;
    }

}
