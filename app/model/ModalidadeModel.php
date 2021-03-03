<?php

namespace app\model;

class ModalidadeModel {

    private $sql;
    
    public function __construct() {
        $this->sql = new \app\config\Sql();
    }
    
    public function adicionar(\app\entities\Modalidade $modalidade) {
        $this->sql->exeSelect("insert into tb_modalidade (descricao) values (:descricao)",
            array(
                ":descricao" => $modalidade->getDescricao()
            ));
    }
    
    public function recuperaModalidade(\app\entities\Modalidade $modalidade){
        return $this->sql->exeSelect("select * from tb_modalidade where descricao = :descricao", 
            array(
                ":descricao" => $modalidade->getDescricao()
            ));
    }
    
    public static function listar(){
         $sql = new \app\config\Sql();
         return $sql->exeQuery("select * from tb_modalidade");
    }

}
