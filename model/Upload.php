<?php

class Upload {
    
    private $id_upload;
    private $arquivo;
    private $id_user;
    
    function getId_upload() {
        return $this->id_upload;
    }

    function getArquivo() {
        return $this->arquivo;
    }

    function getId_user() {
        return $this->id_user;
    }

    function setId_upload($id_upload) {
        $this->id_upload = $id_upload;
    }

    function setArquivo($arquivo) {
        $this->arquivo = $arquivo;
    }

    function setId_user($id_user) {
        $this->id_user = $id_user;
    }    
}
