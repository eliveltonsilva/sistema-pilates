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
    case "getFilter":
        $m->setDescription(filter_input(INPUT_POST, "modality", FILTER_SANITIZE_STRING));
        $m->setStatus(filter_input(INPUT_POST, "options", FILTER_SANITIZE_STRING));

        foreach (\app\model\ModalityModel::getByFilter($m) as $value) {
            $tbody = "";
            $tbody .= "<tr id='mod_" . $value['id'] . "'>";
            $tbody .= "<td>";
            $tbody .= "<a href='update.php?id=" . $value['id'] . "' class='btn btn-outline-success btn-sm'>Editar</a>";
            $tbody .= "<a href='remove.php?id_remove=" . $value['id'] . "' class='btn btn-outline-danger btn-sm ml-1'>Excluir</button>";
            $tbody .= "</td>";
            $tbody .= "<td>" . $value['id'] . "</td>";
            $tbody .= "<td>" . $value['descricao'] . "</td>";
            $tbody .= "<td>" . $value['inserido'] . "</td>";
            $tbody .= "<td>" . $value['status'] . "</td>";
            $tbody .= "</tr>";

            echo $tbody;
        }
        break;

    case "getId":
        $m->setId(filter_input(INPUT_POST, "id", FILTER_SANITIZE_NUMBER_INT));
        echo json_encode(app\model\ModalityModel::getById($m));
        break;
    case "update":
        $m->setId(filter_input(INPUT_POST, "id", FILTER_SANITIZE_NUMBER_INT));
        $m->setDescription(filter_input(INPUT_POST, "modality", FILTER_SANITIZE_STRING));
        $model->update($m);
        break;
    case "delete":
        $id = filter_input(INPUT_POST, "id_remove", FILTER_SANITIZE_NUMBER_INT);
        Logs::writelog($id, 'log');
        $model->delete($id);
        break;
}

