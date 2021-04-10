<?php

namespace app\controller;

require("../../vendor/autoload.php");

use app\entities\Teacher;
use app\model\TeacherModel;

class TeacherController {
    public function insert(Teacher $teacher) {
        $model = new TeacherModel();
        $model->insert($teacher);
    }

    public static function getByFilter(Teacher $teacher) {
        $model = new TeacherModel();
        return $model->getByFilter($teacher);
    }

    public static function getById(Teacher $teacher) {
        $model = new TeacherModel();
        return $model->getById($teacher);
    }

    public function update(Teacher $teacher) {
        $model = new TeacherModel();
        $model->update($teacher);
    }

    public function delete($id) {
        $model = new TeacherModel();
        $model->delete($id);
    }

}