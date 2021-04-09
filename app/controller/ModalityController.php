<?php

namespace app\controller;

require("../../vendor/autoload.php");

class ModalityController {

    public function insert(\app\entities\Modality $modality) {
        $model = new \app\model\ModalityModel();
        $model->insert($modality);
    }

    public static function getByFilter(\app\entities\Modality $modality) {
        $model = new \app\model\ModalityModel();
        return $model->getByFilter($modality);
    }

    public static function getById(\app\entities\Modality $modality) {
        $model = new \app\model\ModalityModel();
        return $model->getById($modality);
    }

    public function update(\app\entities\Modality $modality) {
        $model = new \app\model\ModalityModel();
        $model->update($modality);
    }

    public function delete($id) {
        $model = new \app\model\ModalityModel();
        $model->delete($id);
    }

}
