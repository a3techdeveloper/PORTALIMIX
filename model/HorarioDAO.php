<?php

include_once 'Conecta.php';

class HorarioDAO extends Conecta {
    
    private $table = 'horario';
    
    public function select(){
        $sql = "SELECT * FROM $this->table";
        $stmt = HorarioDAO::prepareSQL($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }    
}
