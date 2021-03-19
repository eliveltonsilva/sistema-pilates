<?php

require("../../../vendor/autoload.php");

$cidade = new app\entities\Cidade();
$cidadeModel = new \app\model\CidadeModel();

$descricao = filter_input(INPUT_POST, 'descricao', FILTER_SANITIZE_STRING);
$uf = filter_input(INPUT_POST, 'uf', FILTER_SANITIZE_STRING);
$cidade->setDescricao('qt');
$cidade->setUf('pr');
$cidadeModel->insert($cidade);
