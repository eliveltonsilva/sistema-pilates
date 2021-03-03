<?php

require("../../../vendor/autoload.php");

function listar() {
    return \app\model\ModalidadeModel::listar();
}
