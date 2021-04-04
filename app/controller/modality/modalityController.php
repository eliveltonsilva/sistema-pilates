<?php

require("../../../vendor/autoload.php");

$m = new app\entities\Modality();
$model = new app\model\ModalityModel();

switch ($_REQUEST['case']) {
    case "new":
        $modality = filter_input(INPUT_POST, "modality", FILTER_SANITIZE_STRING);

        //date of register
        $date = new DateTime();
        $date_format = $date->format("Y-m-d H:i:s");

        //satus default
        $status = "A";

        $m->setDescription($modality);
        $m->setInserted($date_format);
        $m->setStatus("A");


        $model->insert($m);
        break;
    case "get":
        $m->setDescription(filter_input(INPUT_POST, "modality", FILTER_SANITIZE_STRING));
        $m->setStatus(filter_input(INPUT_POST, "options", FILTER_SANITIZE_STRING));

        foreach (\app\model\ModalityModel::getByFilter($m) as $value) {
            $tbody = "";
            $tbody .= "<tr>";
            $tbody .= "<td>excluir</td>";
            $tbody .= "<td>" . $value['id'] . "</td>";
            $tbody .= "<td>" . $value['descricao'] . "</td>";
            $tbody .= "<td>" . $value['inserido'] . "</td>";
            $tbody .= "<td>" . $value['status'] . "</td>";
            $tbody .= "</tr>";

            echo $tbody;
        }

        break;
}

