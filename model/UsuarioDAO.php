<?php

include_once 'Conecta.php';

class UsuarioDAO extends Conecta {

    private $table = 'usuario';

    public function insert(Usuario $user) {
        $sql = "INSERT INTO $this->table(name, user, tel, pass, curso, id_class, id_modulo)VALUES(?, ?, ?, ?, ?, ?, ?)";
        $stmt = UsuarioDAO::prepareSQL($sql);
        $stmt->bindValue(1, $user->getName());
        $stmt->bindValue(2, $user->getUser());
        $stmt->bindValue(3, $user->getTel());
        $stmt->bindValue(4, $user->getPass());
        $stmt->bindValue(5, $user->getCurso());
        $stmt->bindValue(6, $user->getId_class());
        $stmt->bindValue(7, $user->getId_modulo());
        return $stmt->execute();
    }

    public function update(Usuario $user) {
        $sql = "UPDATE $this->table SET name = ?, user = ?, tel = ?, pass = ?, curso = ?, id_class = ?, id_modulo = ? WHERE id_user = ?";
        $stmt = UsuarioDAO::prepareSQL($sql);
        $stmt->bindValue(1, $user->getName());
        $stmt->bindValue(2, $user->getUser());
        $stmt->bindValue(3, $user->getTel());
        $stmt->bindValue(4, $user->getPass());
        $stmt->bindValue(5, $user->getCurso());
        $stmt->bindValue(6, $user->getId_class());
        $stmt->bindValue(7, $user->getId_modulo());
        $stmt->bindValue(8, $user->getId_user());
        return $stmt->execute();
    }

    public function delete(Usuario $user) {
        $sql = "DELETE FROM $this->table WHERE id_user = ?";
        $stmt = UsuarioDAO::prepareSQL($sql);
        $stmt->bindValue(1, $user->getId_user());
        return $stmt->execute();
    }

    public function select() {
        $sql = "SELECT * FROM $this->table LEFT JOIN horario ON usuario.id_class = horario.id_class LEFT JOIN modulo ON usuario.id_modulo = modulo.id_modulo ORDER BY id_user DESC";
        $stmt = UsuarioDAO::prepareSQL($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }
    
    public function pagination($ini, $reg){
        $sql = "SELECT * FROM $this->table LEFT JOIN horario ON usuario.id_class = horario.id_class LEFT JOIN modulo ON usuario.id_modulo = modulo.id_modulo ORDER BY id_user DESC LIMIT $ini, $reg";
        $stmt = UsuarioDAO::prepareSQL($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function count() {
        $sql = "SELECT * FROM $this->table ORDER BY id_user DESC";
        $stmt = UsuarioDAO::prepareSQL($sql);
        $stmt->execute();
        return $stmt->rowCount();
    }

    public function selectId(Usuario $user) {
        $sql = "SELECT * FROM $this->table LEFT JOIN horario ON usuario.id_class = horario.id_class LEFT JOIN modulo ON usuario.id_modulo = modulo.id_modulo WHERE id_user = ?";
        $stmt = UsuarioDAO::prepareSQL($sql);
        $stmt->bindValue(1, $user->getId_user());
        $stmt->execute();
        return $stmt->fetch();
    }

    public function search($valor) {
        $sql = "SELECT * FROM $this->table LEFT JOIN horario ON usuario.id_class = horario.id_class LEFT JOIN modulo ON usuario.id_modulo = modulo.id_modulo WHERE name LIKE ? OR user LIKE ? OR class LIKE ?  OR curso LIKE ? OR modulo LIKE ? ORDER BY id_user DESC";
        $stmt = UsuarioDAO::prepareSQL($sql);
        $stmt->bindValue(1, $valor);
        $stmt->bindValue(2, $valor);
        $stmt->bindValue(3, $valor);
        $stmt->bindValue(4, $valor);
        $stmt->bindValue(5, $valor);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function login(Usuario $user) {
        $sql = "SELECT * FROM $this->table WHERE user = ? AND pass = ?";
        $stmt = UsuarioDAO::prepareSQL($sql);
        $stmt->bindValue(1, $user->getUser());
        $stmt->bindValue(2, $user->getPass());
        $stmt->execute();
        if ($stmt->rowCount()) {
            $dados = $stmt->fetch();
            $_SESSION['usuario'] = $dados->name;
            $_SESSION['curso'] = $dados->curso;
            $_SESSION['id_user'] = $dados->id_user;
            $_SESSION['autenticado'] = true;
            return true;
        } else {
            return false;
        }
    }

    public static function logout() {
        if ($_SESSION['autenticado']) {
            session_unset();
            session_destroy();
            header('Location:index.php');
        }
    }

}
