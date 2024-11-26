<?php

class Conexion {
    // Atributos
    public const DB_SERVER = "localhost";
    // public const DB_SERVER = "127.0.0.1:3308";
    public const DB_USER = "root";
    public const DB_PASS = "";
    public const DB_NAME = "vinillum";

    const DB_DSN = "mysql:host=" . self::DB_SERVER . ";dbname=" . self::DB_NAME . ";charset=utf8mb4";

    // Atributo con tipo PDO
    protected PDO $db;

    // Método constructor
    public function __construct(){
        try{
            $this->db = new PDO(self::DB_DSN, self::DB_USER, self::DB_PASS);
        }catch(Exception $e){
            die("Error al conectar a la base de datos: $e");
        }
    }

    // Método para llamar la conexión en cada archivo
    public function getConexion() : PDO {
        return $this->db;
    }
}

?>