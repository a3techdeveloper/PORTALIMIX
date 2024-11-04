<?php

include_once 'Conecta.php';

class UploadDAO extends Conecta {

    private $table = 'uploads';
    private $Arquivo;

    function pegarArquivo() {
        if (is_file($_FILES['arquivo']['tmp_name'])) {
            $this->Arquivo = $_FILES['arquivo']['name'];
            $this->Arquivo = str_replace(" ", "_", $this->Arquivo);
            $this->Arquivo = str_replace("á", "a", $this->Arquivo);
            $this->Arquivo = str_replace("à", "a", $this->Arquivo);
            $this->Arquivo = str_replace("ã", "a", $this->Arquivo);
            $this->Arquivo = str_replace("â", "a", $this->Arquivo);
            $this->Arquivo = str_replace("é", "e", $this->Arquivo);
            $this->Arquivo = str_replace("ê", "e", $this->Arquivo);
            $this->Arquivo = str_replace("í", "i", $this->Arquivo);
            $this->Arquivo = str_replace("ó", "o", $this->Arquivo);
            $this->Arquivo = str_replace("õ", "o", $this->Arquivo);
            $this->Arquivo = str_replace("ô", "o", $this->Arquivo);
            $this->Arquivo = str_replace("ü", "u", $this->Arquivo);
            $this->Arquivo = str_replace("ç", "c", $this->Arquivo);

            $this->Arquivo = strtolower($this->Arquivo);
        }
        return $this->Arquivo;
    }

    function Upload() {
        if ($this->pegarArquivo()) {
            $cont = 1;
            while (file_exists('../uploads/' . '[' . $cont . ']' . $this->pegarArquivo())) {
                $cont++;
            }
            $this->Arquivo = '[' . $cont . ']' . $this->pegarArquivo();
            move_uploaded_file($_FILES['arquivo']['tmp_name'], '../uploads/' . $this->Arquivo);
            return true;
        }else{
            return false;
        }
    }
    
    function getArquivo(){
        return $this->Arquivo;
    }

    function inserir(Upload $u) {
        $sql = "INSERT INTO $this->table(arquivo, id_user)VALUES(?,?)";
        $stmt = UploadDAO::prepareSQL($sql);
        $stmt->bindValue(1, $this->getArquivo());
        $stmt->bindValue(2, $u->getId_user());
        return $stmt->execute();
    }
    
    function listarArquivos(){
        $sql = "SELECT * FROM $this->table INNER JOIN usuario WHERE uploads.id_user = usuario.id_user";
        $stmt = UploadDAO::prepareSQL($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }
    
    function excluirArquivo(Upload $u){
        $sql = "DELETE FROM $this->table WHERE id_upload = ?";
        $stmt = UploadDAO::prepareSQL($sql);
        $stmt->bindValue(1, $u->getId_upload());
        return $stmt->execute();
    }
}
