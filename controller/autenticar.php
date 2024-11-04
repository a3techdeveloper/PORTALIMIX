<?php
session_start();

include_once '../model/Usuario.php';
include_once '../model/UsuarioDAO.php';

$u    = new Usuario();
$uDAO = new UsuarioDAO();

$user  = filter_input(INPUT_POST, "InputUser");
$pass  = filter_input(INPUT_POST, "InputPassword");

$u->setUser($user);
$u->setPass($pass);

if($uDAO->login($u)){
    header('Location:../principal.php');
}else{
    echo "<script>alert('Usuário e/ou Senha Incorretos! Tente novamente...');location='../index.php'</script>";
}