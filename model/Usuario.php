<?php

class Usuario {

    private $id_user;
    private $name;
    private $tel;
    private $user;
    private $pass;
    private $curso;
    private $id_class;
    private $id_modulo;

    function getId_user() {
        return $this->id_user;
    }

    function getName() {
        return $this->name;
    }
    
    function getTel() {
        return $this->tel;
    }

    function getUser() {
        return $this->user;
    }

    function getPass() {
        return $this->pass;
    }

    function getCurso() {
        return $this->curso;
    }

    function getId_class() {
        return $this->id_class;
    }
    
    function getId_modulo() {
        return $this->id_modulo;
    }

    function setId_user($id_user) {
        $this->id_user = $id_user;
    }

    function setName($name) {
        $this->name = $name;
    }
    
    function setTel($tel) {
        $this->tel = $tel;
    }

    function setUser($user) {
        $this->user = $user;
    }

    function setPass($pass) {
        $this->pass = $pass;
    }

    function setCurso($curso) {
        $this->curso = $curso;
    }

    function setId_class($id_class) {
        $this->id_class = $id_class;
    }
    
    function setId_modulo($id_modulo) {
        $this->id_modulo = $id_modulo;
    }

}
