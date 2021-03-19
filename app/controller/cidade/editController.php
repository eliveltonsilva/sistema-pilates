<?php

require("../../../vendor/autoload.php");

$cidade = new app\entities\Cidade();
$cidadeModel = new \app\model\CidadeModel();

$descricao = filter_input(INPUT_POST, 'descricao', FILTER_SANITIZE_STRING);
$uf = filter_input(INPUT_POST, 'uf', FILTER_SANITIZE_STRING);
$id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);

$cidade->setDescricao('qt1');
$cidade->setUf('sp');
$cidade->setId(1);
$cidadeModel->edit($cidade);