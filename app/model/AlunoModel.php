<?php 

namespace app\models;

//require("../../vendor/autoload.php");

class AlunoModel{

    public static function getList(){
        $sql = new \app\config\Sql();
        
      return $sql->exeSelect("select * from tb_aluno");
    }
}