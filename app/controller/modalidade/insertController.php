<?php

//header('Content-Type: application/json');

require("../../../vendor/autoload.php");

$modalidade = new app\entities\Modalidade();
$modalidadeModel = new app\model\ModalidadeModel();

$descricao = filter_input(INPUT_POST, 'descricao', FILTER_SANITIZE_STRING);
$modalidade->setDescricao($descricao);
$modalidadeModel->insert($modalidade);