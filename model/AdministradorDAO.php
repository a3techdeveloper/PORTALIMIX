<?php

include_once 'Conecta.php';

class AdministradorDAO extends Conecta {
    
    private $table = 'administrador';
    
    public function login(Administrador $adm){
        $sql = "SELECT * FROM $this->table WHERE user = ? AND pass = ?";
        $stmt = AdministradorDAO::prepareSQL($sql);
        $stmt->bindValue(1, $adm->getUser());
        $stmt->bindValue(2, $adm->getPass());
        $stmt->execute();
        if($stmt->rowCount()){
            $dados = $stmt->fetch();
            $_SESSION['administrador'] = $dados->user;
            $_SESSION['autenticado'] = true;
            return true;
        }else{
            return false;
        }
    }
    
    public static function logout(){
        if($_SESSION['autenticado']){
            session_unset();
            session_destroy();
            header('Location:login_adm.php');
        }
    }    
}
