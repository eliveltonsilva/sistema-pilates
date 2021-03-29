<?php

//header('Content-Type: application/json');

require("../../../vendor/autoload.php");

$modalidade = new app\entities\Modalidade();
$modalidadeModel = new app\model\ModalidadeModel();

$descricao = filter_input(INPUT_POST, 'modalidade', FILTER_SANITIZE_STRING);
echo json_encode($descricao);