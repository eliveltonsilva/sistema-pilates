<?php

require("../../../vendor/autoload.php");

use app\entities\Teacher;
use app\controller\TeacherController;

$m = new Teacher();
$controller = new TeacherController();

switch($_REQUEST['case']){
    case "new":
        echo json_encode("new");
        break;
    case "getFilter":
        break;
    case "getId":
        break;
    case "update":
        break;
    case "delete":
        break;
}