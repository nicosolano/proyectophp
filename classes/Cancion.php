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

    // Devuelve las canciones de un álbum en particular
    public function canciones_x_album(int $id_album) : array {
        $canciones = [];
        $conexion = (new Conexion())->getConexion();
        $query = "SELECT * FROM canciones WHERE id_album = :id_album";
        $PDOStatement = $conexion->prepare($query);
        $PDOStatement->setFetchMode(PDO::FETCH_CLASS, self::class);
        $PDOStatement->execute(
            [
                "id_album" => $id_album
            ]
        );
        $canciones = $PDOStatement->fetchAll();
        return $canciones;
    }
    
    // Devuelve una canción en particular
    public function cancion_x_id(int $id_cancion) {
        $conexion = (new Conexion())->getConexion();
        $query = "SELECT * FROM canciones WHERE id = :id_cancion";
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

    // Método para insertar una nueva cancion
    public function insert($titulo, $id_album){
        $conexion = (new Conexion())->getConexion();
        $query = "INSERT INTO canciones VALUES (NULL, :titulo, :id_album)";
        $PDOStatement = $conexion->prepare($query);
        $PDOStatement->execute(
            [
                "titulo" => $titulo,
                "id_album" => $id_album
            ]
        );
    }

    // Método para insertar un nuevo álbum
    public function edit($titulo, $id_album, $id){
        $conexion = (new Conexion())->getConexion();
        $query = "UPDATE canciones SET titulo = :titulo, id_album = :id_album WHERE id = :id";
        $PDOStatement = $conexion->prepare($query);
        $PDOStatement->execute(
            [
                "id" => $id,
                "titulo" => $titulo,
                "id_album" => $id_album
            ]
        );
    }

    // Borrar Álbum
    public function delete(){
        $conexion = (new Conexion())->getConexion();
        $query = "DELETE FROM canciones WHERE id = ?";
        $PDOStatement = $conexion->prepare($query);
        $PDOStatement->execute([$this->id]);
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