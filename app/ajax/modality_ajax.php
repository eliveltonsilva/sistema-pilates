<?php

require("../../vendor/autoload.php");

use app\entities\Modality;
use app\controller\ModalityController;

$m = new Modality();
$controller = new ModalityController();

switch ($_REQUEST['case']) {
    case "new":
        $modality = filter_input(INPUT_POST, "modality", FILTER_SANITIZE_STRING);

        $m->setDescription($modality);
        //date of register
        date_default_timezone_set('America/Sao_Paulo');
        $date_format = date("Y-m-d H:i:s");

        //satus default
        $status = "A";

        $m->setDescription($modality);
        $m->setInserted($date_format);
        $m->setStatus("A");
        $controller->insert($m);
        break;
    case "getFilter":
        $m->setDescription(filter_input(INPUT_POST, "modality", FILTER_SANITIZE_STRING));
        $m->setStatus(filter_input(INPUT_POST, "options", FILTER_SANITIZE_STRING));

        foreach (ModalityController::getByFilter($m) as $value) {

            if ($value['status'] === "A") {
                $value['status'] = "Ativo";
            } else if ($value['status'] === "E") {
                $value['status'] = "Excluído";
            }

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
        echo json_encode(app\controller\ModalityController::getById($m));
        break;
    case "update":
        $m->setId(filter_input(INPUT_POST, "id", FILTER_SANITIZE_NUMBER_INT));
        $m->setDescription(filter_input(INPUT_POST, "modality", FILTER_SANITIZE_STRING));
        echo json_encode(filter_input(INPUT_POST, "modality", FILTER_SANITIZE_STRING));
        $controller->update($m);
        break;
    case "delete":
        $id = filter_input(INPUT_POST, "id_remove", FILTER_SANITIZE_NUMBER_INT);
        $controller->delete($id);
        break;
}

