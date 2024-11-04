<?php

include_once 'Conecta.php';

class ModuloDAO extends Conecta {
    
    private $table = 'modulo';
    
    public function select(){
        $sql = "SELECT * FROM $this->table";
        $stmt = ModuloDAO::prepareSQL($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    } 
    
}
