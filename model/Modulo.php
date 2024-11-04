<?php

class Modulo {
    
    private $id_modulo;
    private $modulo;
    
    function getId_modulo() {
        return $this->id_modulo;
    }

    function getModulo() {
        return $this->modulo;
    }

    function setId_modulo($id_modulo) {
        $this->id_modulo = $id_modulo;
    }

    function setModulo($modulo) {
        $this->modulo = $modulo;
    }
    
}
