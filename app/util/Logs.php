<?php

class Logs {

    public static function writelog($value, $logName) {
        error_log($value . PHP_EOL, 3, 'C:/xampp/htdocs/sistema-pilates/log/' . $logName . ".log");
    }

}
