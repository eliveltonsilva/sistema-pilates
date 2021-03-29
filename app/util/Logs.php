<?php

class Logs {

    public static function writelog($value, $logName) {
        error_log(json_encode($value) . PHP_EOL, 3, 'C:/projects/sistema-pilates/log/' . $logName . ".log");
    }

}
