<?php

header('Content-Type: application/json');

require("../../../vendor/autoload.php");

$descricao = filter_input(INPUT_POST, 'descricao', FILTER_SANITIZE_STRING);

$modalidade = new \app\entities\Modalidade();
$mModel = new app\model\ModalidadeModel();

$modalidade->setDescricao($descricao);
$mModel->insert($modalidade);
echo json_encode($modalidade->getDescricao());