<?php
class Conexion {
    public static function Conectar() {
        $host = 'localhost';
        $dbname = 'articulosdb';
        $username = 'mario';
        $password = '123';
        
        try {
            $conexion = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
            $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conexion;
        } catch(PDOException $e) {
            die("El error de Conexión es: ". $e->getMessage());
        }
    }
}
?>
