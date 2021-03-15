<?php

namespace app\config;

use PDO;

require("bd.php");

class Sql {

    public function conectar() {
        $conn = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME, DB_USER, DB_PASS);
        return $conn;
    }

}
