<?php
// CONEXION A LA BSD
class Conexion{
    public static function start(){
        try {
            return new PDO('mysql:host=localhost;dbname=portafolio','root','12345678');
        } catch (PDOException $error) {
            die($error->getMessage());
        }
    }
}

