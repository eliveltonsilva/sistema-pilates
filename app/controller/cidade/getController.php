<?php

require("../../../vendor/autoload.php");

function get(){
    return \app\model\CidadeModel::get();
}