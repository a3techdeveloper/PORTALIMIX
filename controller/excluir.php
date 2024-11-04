<?php

include_once '../model/Usuario.php';
include_once '../model/UsuarioDAO.php';

$u = new Usuario();
$uDAO = new UsuarioDAO();

$id  = filter_input(INPUT_GET, 'id');
$pag = filter_input(INPUT_GET, 'pag');

$u->setId_user($id);

if ($uDAO->delete($u)) {
    echo "<script>alert('Registro excluido com sucesso');location='../principal_adm.php?link=1&pag=$pag'</script>";
}