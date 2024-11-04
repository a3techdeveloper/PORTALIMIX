<?php

include_once '../model/Upload.php';
include_once '../model/UploadDAO.php';

$u    = new Upload();
$uDAO = new UploadDAO();

$id_user = filter_input(INPUT_POST, 'id_user');
$u->setId_user($id_user);

$uDAO->Upload();

if($uDAO->inserir($u)){
    echo "<script>alert('Arquivo enviado com sucesso!');location='../principal.php?link=35'</script>";
}