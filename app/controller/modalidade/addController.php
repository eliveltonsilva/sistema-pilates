<?php

require("../../../vendor/autoload.php");

$modalidade = new app\entities\Modalidade();
$modalidadeModel = new app\model\ModalidadeModel();

$descricao = filter_input(INPUT_POST, 'descricao', FILTER_SANITIZE_STRING);
$modalidade->setDescricao($descricao);
$modalidadeModel->adicionar($modalidade);

if ($modalidadeModel->adicionar($modalidade)) {
    echo json_encode("ok");
} else {
    echo json_encode("erro");
}