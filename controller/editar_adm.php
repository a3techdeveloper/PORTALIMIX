<?php

include_once '../model/Usuario.php';
include_once '../model/UsuarioDAO.php';

$u = new Usuario();
$uDAO = new UsuarioDAO();

$name = filter_input(INPUT_POST, "InputName");
$user = filter_input(INPUT_POST, "InputUser");
$tel  = filter_input(INPUT_POST, "InputTel");
$pass = filter_input(INPUT_POST, "InputPassword");
$curso     = filter_input(INPUT_POST, "InputCurso");
$id_modulo = filter_input(INPUT_POST, "InputModulo"); 
$id_class  = filter_input(INPUT_POST, "InputClass");
$id_user   = filter_input(INPUT_POST, "id_user");

$pag = filter_input(INPUT_POST, "pag");

$u->setName($name);
$u->setUser($user);
$u->setTel($tel);
$u->setPass($pass);
$u->setCurso($curso);
$u->setId_modulo($id_modulo);
$u->setId_class($id_class);
$u->setId_user($id_user);

if ($uDAO->update($u)) {
    echo "<script>alert('Registro editado com sucesso');location='../principal_adm.php?link=1&pag=$pag'</script>";
}