<?php

class Horario {
    
    private $id_class;
    private $class;
    
    function getId_class() {
        return $this->id_class;
    }

    function getClass() {
        return $this->class;
    }

    function setId_class($id_class) {
        $this->id_class = $id_class;
    }

    function setClass($class) {
        $this->class = $class;
    }    
}
