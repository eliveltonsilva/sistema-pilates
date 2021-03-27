<?php
require("../../../vendor/autoload.php");


use app\model\ModalidadeModel;

$descricao = filter_input(INPUT_POST, 'descricao', FILTER_SANITIZE_STRING);
$result = ModalidadeModel::get($descricao);

//$array = array('nome'=> 'elivelton');

echo json_encode($result);