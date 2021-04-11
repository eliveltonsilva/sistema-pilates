<?php

require("../../vendor/autoload.php");

use app\entities\Teacher;
use app\controller\TeacherController;

$t = new Teacher();
$controller = new TeacherController();

switch ($_REQUEST['case']) {
    case "new":
        $name = filter_input(INPUT_POST, "name", FILTER_SANITIZE_STRING);
        $mail = filter_input(INPUT_POST, "mail", FILTER_SANITIZE_STRING);
        $birth = filter_input(INPUT_POST, "birth", FILTER_SANITIZE_STRING);
        $sex = filter_input(INPUT_POST, "sex", FILTER_SANITIZE_STRING);
        $cpf = filter_input(INPUT_POST, "cpf", FILTER_SANITIZE_STRING);
        $cep = filter_input(INPUT_POST, "cep", FILTER_SANITIZE_STRING);
        $cell = filter_input(INPUT_POST, "cell", FILTER_SANITIZE_STRING);
        $city = filter_input(INPUT_POST, "city", FILTER_SANITIZE_STRING);
        $uf = filter_input(INPUT_POST, "uf", FILTER_SANITIZE_STRING);
        $address = filter_input(INPUT_POST, "address", FILTER_SANITIZE_STRING);
        $number = filter_input(INPUT_POST, "number", FILTER_SANITIZE_NUMBER_INT);
        $district = filter_input(INPUT_POST, "district", FILTER_SANITIZE_STRING);
        $complement = filter_input(INPUT_POST, "complement", FILTER_SANITIZE_STRING);

        //date of register
        date_default_timezone_set('America/Sao_Paulo');
        $date = date("Y-m-d H:i:s");

        //satus default
        $status = "A";

        $t->setName($name);
        $t->setMail($mail);
        $t->setDateBirth($birth);
        $t->setSex($sex);
        $t->setCpf($cpf);
        $t->setCell($cell);
        $t->setInserted($date);
        $t->setStatus($status);
        $t->setCep($cep);
        $t->setCity($city);
        $t->setUf($uf);
        $t->setAddress($address);
        $t->setNumber($number);
        $t->setDistrict($district);
        $t->setComplement($complement);

        Logs::writelog($t->getCep(), "logcep");

        $controller->insert($t);
        break;
    case "getFilter":
        $name = filter_input(INPUT_POST, "teacher", FILTER_SANITIZE_STRING);
        $options = filter_input(INPUT_POST, "options", FILTER_SANITIZE_STRING);

        $t->setName($name);
        $t->setStatus($options);
        
        foreach (TeacherController::getByFilter($t) as $value) {
            if ($value['status'] === "A") {
                $value['status'] = "Ativo";
            } else if ($value['status'] === "E") {
                $value['status'] = "Excluído";
            }

            $tbody = "";
            $tbody .= "<tr>";
            $tbody .= "<td>";
            $tbody .= "<a href='update.php?id=" . $value['id'] . "' class='btn btn-outline-success btn-sm'>Editar</a>";
            $tbody .= "<a href='remove.php?id_remove=" . $value['id'] . "' class='btn btn-outline-danger btn-sm ml-1'>Excluir</button>";
            $tbody .= "</td>";
            $tbody .= "<td>" . $value['nome'] . "</td>";
            $tbody .= "<td>" . $value['dt_nascimento'] . "</td>";
            $tbody .= "<td>" . $value['email'] . "</td>";
            $tbody .= "<td>" . $value['cpf'] . "</td>";
            $tbody .= "<td>" . $value['sexo'] . "</td>";
            $tbody .= "<td>" . $value['celular'] . "</td>";
            $tbody .= "<td>" . $value['inserido'] . "</td>";
            $tbody .= "<td>" . $value['status'] . "</td>";
            $tbody .= "</tr>";

            echo $tbody;
        }
        break;
    case "getId":
        $t->setId(filter_input(INPUT_POST, "id", FILTER_SANITIZE_NUMBER_INT));
        echo json_encode(TeacherController::getById($t));
        break;
    case "update":
        $name = filter_input(INPUT_POST, "name", FILTER_SANITIZE_STRING);
        $mail = filter_input(INPUT_POST, "mail", FILTER_SANITIZE_STRING);
        $birth = filter_input(INPUT_POST, "birth", FILTER_SANITIZE_STRING);
        $sex = filter_input(INPUT_POST, "sex", FILTER_SANITIZE_STRING);
        $cpf = filter_input(INPUT_POST, "cpf", FILTER_SANITIZE_STRING);
        $cell = filter_input(INPUT_POST, "cell", FILTER_SANITIZE_STRING);
        $id = filter_input(INPUT_POST, "id", FILTER_SANITIZE_NUMBER_INT);
        $cep = filter_input(INPUT_POST, "cep", FILTER_SANITIZE_STRING);
        $city = filter_input(INPUT_POST, "city", FILTER_SANITIZE_STRING);
        $uf = filter_input(INPUT_POST, "uf", FILTER_SANITIZE_STRING);
        $address = filter_input(INPUT_POST, "address", FILTER_SANITIZE_STRING);
        $number = filter_input(INPUT_POST, "number", FILTER_SANITIZE_NUMBER_INT);
        $district = filter_input(INPUT_POST, "district", FILTER_SANITIZE_STRING);
        $complement = filter_input(INPUT_POST, "complement", FILTER_SANITIZE_STRING);

        $t->setName($name);
        $t->setMail($mail);
        $t->setDateBirth($birth);
        $t->setSex($sex);
        $t->setCpf($cpf);
        $t->setCell($cell);
        $t->setCep($cep);
        $t->setCity($city);
        $t->setUf($uf);
        $t->setAddress($address);
        $t->setNumber($number);
        $t->setDistrict($district);
        $t->setComplement($complement);
        $t->setId($id);

        $controller->update($t);
        break;
    case "delete":
        $controller->delete(filter_input(INPUT_POST, "id_remove", FILTER_SANITIZE_NUMBER_INT));
        break;
}