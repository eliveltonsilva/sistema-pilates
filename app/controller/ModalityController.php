<?php

namespace app\controller;

require("../../vendor/autoload.php");

use app\entities\Modality;
use app\model\ModalityModel;

class ModalityController {

    public function insert(Modality $modality) {
        $model = new ModalityModel();
        $model->insert($modality);
    }

    public static function getByFilter(Modality $modality) {
        $model = new ModalityModel();
        return $model->getByFilter($modality);
    }

    public static function getById(Modality $modality) {
        $model = new ModalityModel();
        return $model->getById($modality);
    }

    public function update(Modality $modality) {
        $model = new ModalityModel();
        $model->update($modality);
    }

    public function delete($id) {
        $model = new ModalityModel();
        $model->delete($id);
    }

}
