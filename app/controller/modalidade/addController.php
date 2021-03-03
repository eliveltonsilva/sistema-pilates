<?php

header('Content-Type: application/json');

require("../../../vendor/autoload.php");

$modalidade = new app\entities\Modalidade();
$modalidadeModel = new app\model\ModalidadeModel();

$descricao = filter_input(INPUT_POST, 'descricao', FILTER_SANITIZE_STRING);
$modalidade->setDescricao($descricao);

$res = $modalidadeModel->recuperaModalidade($modalidade);
if (count($res) > 0) {
    echo json_encode("Esta modalidade já foi cadastrada!");
} else {
    $modalidadeModel->adicionar($modalidade);
    echo json_encode("Salvo com sucesso!");
}