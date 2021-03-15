<?php

require("../../../vendor/autoload.php");

$modalidade = new app\entities\Modalidade();
$modalidadeModel = new app\model\ModalidadeModel();

$id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);
$descricao = filter_input(INPUT_POST, 'descricao', FILTER_SANITIZE_STRING);
$modalidade->setId($id);
$modalidade->setDescricao($descricao);
$modalidadeModel->edit($modalidade);