<?php
require("../../../vendor/autoload.php");

use app\model\ModalidadeModel;

function get(){
    return ModalidadeModel::get();
}