<?php

namespace app\entities;

class Modality extends EntityBase {

    private $description;
    //data em que foi cadastrado
    private $inserted;
    //A -> Active, E -> deleted, T -> All
    private $status;

    function getDescription() {
        return $this->description;
    }

    function getInserted() {
        return $this->inserted;
    }

    function getStatus() {
        return $this->status;
    }

    function setDescription($description): void {
        $this->description = $description;
    }

    function setInserted($inserted): void {
        $this->inserted = $inserted;
    }

    function setStatus($status): void {
        $this->status = $status;
    }

}
