<?php

namespace app\entities;

class EntityBase {

    private $id;

    function getId() {
        return $this->id;
    }

    function setId($id): void {
        $this->id = $id;
    }

}
