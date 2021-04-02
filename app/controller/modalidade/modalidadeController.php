<?php

require("../../../vendor/autoload.php");

switch ($_REQUEST['case']) {
    case "new":
        $modalidadeModel = new \app\model\ModalidadeModel();
        $modalidade = filter_input(INPUT_POST, "modalidade", FILTER_SANITIZE_STRING);
        $data = new DateTime();
        $date_format = 
        Logs::writelog($modalidade, 'log');
        echo json_encode($modalidade);
        break;
}

