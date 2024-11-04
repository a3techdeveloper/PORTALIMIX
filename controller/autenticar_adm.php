<?php
session_start();

include_once '../model/Administrador.php';
include_once '../model/AdministradorDAO.php';

$a    = new Administrador();
$aDAO = new AdministradorDAO();

$user  = filter_input(INPUT_POST, "InputUser");
$pass  = filter_input(INPUT_POST, "InputPassword");

$a->setUser($user);
$a->setPass($pass);

if($aDAO->login($a)){
    header('Location:../principal_adm.php');
}else{
    echo "<script>alert('Usuário e/ou Senha Incorretos! Tente novamente...');location='../login_adm.php'</script>";
}