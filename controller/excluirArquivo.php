<?php

include_once '../model/Upload.php';
include_once '../model/UploadDAO.php';

$u = new Upload();
$uDAO = new UploadDAO();

$arquivo = filter_input(INPUT_GET, 'arquivo');
$id_upload = filter_input(INPUT_GET, 'id');

$u->setId_upload($id_upload);

if ($uDAO->excluirArquivo($u)) {
    if (unlink('../uploads/' . $arquivo)) {
        echo "<script>alert('Arquivo excluido com sucesso');location='../principal.php?link=1'</script>";
    }
}