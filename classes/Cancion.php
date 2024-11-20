<?php

class Cancion {
    // Atributos
    protected $id;
    protected $titulo;
    protected $id_album;

    // Métodos
    // Devuelve todas las canciones
    public function todas_las_canciones() : array {
        $canciones = [];
        $conexion = (new Conexion())->getConexion();
        $query = "SELECT * FROM canciones";
        $PDOStatement = $conexion->prepare($query);
        $PDOStatement->setFetchMode(PDO::FETCH_CLASS, self::class);
        $PDOStatement->execute();
        $canciones = $PDOStatement->fetchAll();
        return $canciones;
    }
    
    // Devuelve una canción en particular
    public function cancion_x_id(int $id_cancion) {
        $conexion = (new Conexion())->getConexion();
        $query = "SELECT * FROM decadas WHERE id = :id_cancion";
        $PDOStatement = $conexion->prepare($query);
        $PDOStatement->setFetchMode(PDO::FETCH_CLASS, self::class);
        $PDOStatement->execute(
            [
                "id_cancion" => $id_cancion
            ]
        );
        $cancion = $PDOStatement->fetch();
        if(!$cancion){
            return NULL;
        }
        return $cancion;
    }

    // Getters
    public function getId(){
        return $this->id;
    }
    public function getTitulo(){
        return $this->titulo;
    }
    public function getId_album(){
        return $this->id_album;
    }

    // Trae el título del álbum sin usar JOIN
    public function getAlbum(){
        $album = (new Album())->album_x_id($this->id_album);
        $titulo = $album->getTitulo();
        return $titulo;
    }    
}

?>