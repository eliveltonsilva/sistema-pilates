<?php

namespace app\entities;

class Modality extends EntityBase {

    private $description;
    

    function getDescription() {
        return $this->description;
    }

    function setDescription($description): void {
        $this->description = $description;
    }

}
