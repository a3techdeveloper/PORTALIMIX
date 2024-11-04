<?php

class Administrador {
    
    private $id_admin;
    private $user;
    private $pass;
    
    function getId_admin() {
        return $this->id_admin;
    }

    function getUser() {
        return $this->user;
    }

    function getPass() {
        return $this->pass;
    }

    function setId_admin($id_admin) {
        $this->id_admin = $id_admin;
    }

    function setUser($user) {
        $this->user = $user;
    }

    function setPass($pass) {
        $this->pass = $pass;
    }    
}
