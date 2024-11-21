<?php

class Album {
    // Atributos
    protected $id;
    protected $id_decada;
    protected $portada;
    protected $titulo;
    protected $artista;
    protected $lanzamiento;
    protected $duracion;
    protected $destacado;
    protected $precio;

    // Métodos
    // Devuelve todos los álbumes
    public function todos_los_albumes() : array {
        $albumes = [];
        $conexion = (new Conexion())->getConexion();
        $query = "SELECT * FROM albumes";
        $PDOStatement = $conexion->prepare($query);
        $PDOStatement->setFetchMode(PDO::FETCH_CLASS, self::class);
        $PDOStatement->execute();
        $albumes = $PDOStatement->fetchAll();
        return $albumes;
    }

    // Devuelve los álbumes destacados
    public function destacados() : array {
        $destacados = [];
        $conexion = (new Conexion())->getConexion();
        $query = "SELECT * FROM albumes WHERE destacado = 1";
        $PDOStatement = $conexion->prepare($query);
        $PDOStatement->setFetchMode(PDO::FETCH_CLASS, self::class);
        $PDOStatement->execute();
        $destacados = $PDOStatement->fetchAll();
        return $destacados;
    }

    // Devuelve los álbumes de una década en particular
    public function albumes_x_decada(int $id_decada) : array {
        $albumes = [];
        $conexion = (new Conexion())->getConexion();
        $query = "SELECT * FROM albumes WHERE id_decada = :id_decada";
        $PDOStatement = $conexion->prepare($query);
        $PDOStatement->setFetchMode(PDO::FETCH_CLASS, self::class);
        $PDOStatement->execute(
            [
                "id_decada" => $id_decada
            ]
        );
        $albumes = $PDOStatement->fetchAll();
        return $albumes;
    }

    // Devuelve un álbum en particular
    public function album_x_id(int $id_album){
        $conexion = (new Conexion())->getConexion();
        $query = "SELECT * FROM albumes WHERE id = :id_album";
        $PDOStatement = $conexion->prepare($query);
        $PDOStatement->setFetchMode(PDO::FETCH_CLASS, self::class);
        $PDOStatement->execute(
            [
                "id_album" => $id_album
            ]
        );
        $album = $PDOStatement->fetch();
        if(!$album){
            return NULL;
        }
        return $album;
    }

    // Getters
    public function getId(){
        return $this->id;
    }
    public function getId_decada(){
        return $this->id_decada;
    }
    public function getPortada(){
        return $this->portada;
    }
    public function getTitulo(){
        return $this->titulo;
    }
    public function getArtista(){
        return $this->artista;
    }
    public function getLanzamiento(){
        return $this->lanzamiento;
    }
    public function getDuracion(){
        return $this->duracion;
    }
    public function getDestacado(){
        return $this->destacado;
    }
    public function getPrecio(){
        return $this->precio;
    }

    // Trae la década sin usar JOIN
    public function getDecada(){
        $decada = (new Decada())->decada_x_id($this->id_decada);
        $year = $decada->getYear();
        return $year;
    }
}

?>