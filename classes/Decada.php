<?php

class Decada {
    // Atributos
    protected $id;
    protected $year;

    // Métodos
    // Devuelve todas las décadas
    public function todas_las_decadas() : array {
        $decadas = [];
        $conexion = (new Conexion())->getConexion();
        $query = "SELECT * FROM decadas";
        $PDOStatement = $conexion->prepare($query);
        $PDOStatement->setFetchMode(PDO::FETCH_CLASS, self::class);
        $PDOStatement->execute();
        $decadas = $PDOStatement->fetchAll();
        return $decadas;
    }
    
    // Devuelve una década en particular
    public function decada_x_id(int $id_decada) {
        $conexion = (new Conexion())->getConexion();
        $query = "SELECT * FROM decadas WHERE id = :id_decada";
        $PDOStatement = $conexion->prepare($query);
        $PDOStatement->setFetchMode(PDO::FETCH_CLASS, self::class);
        $PDOStatement->execute(
            [
                "id_decada" => $id_decada
            ]
        );
        $decada = $PDOStatement->fetch();
        if(!$decada){
            return NULL;
        }
        return $decada;
    }

    // Getters
    public function getId(){
        return $this->id;
    }
    public function getYear(){
        return $this->year;
    }
}

?>