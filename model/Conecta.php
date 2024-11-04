<?php

class Conecta {
    
    private static $conn;
    
    private static function getConn(){
        try{
            $dsn = "mysql:host=localhost;dbname=db_imix";
            self::$conn = new PDO($dsn, "root", "");
            self::$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            self::$conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
        } catch (PDOException $e) {
            echo "Erro: ".$e->getMessage();
        }
        return self::$conn;
    }
    
    protected static function prepareSQL($sql){
        return self::getConn()->prepare($sql);
    }    
}
