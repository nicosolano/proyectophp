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

    // Método para insertar un nuevo álbum
    public function insert($id_decada, $portada, $titulo, $artista, $lanzamiento, $duracion, $destacado, $precio){
        $conexion = (new Conexion())->getConexion();
        $query = "INSERT INTO albumes VALUES (NULL, :id_decada, :portada, :titulo, :artista, :lanzamiento, :duracion, :destacado, :precio)";
        $PDOStatement = $conexion->prepare($query);
        $PDOStatement->execute(
            [
                "id_decada" => $id_decada,
                "portada" => $portada,
                "titulo" => $titulo,
                "artista" => $artista,
                "lanzamiento" => $lanzamiento,
                "duracion" => $duracion,
                "destacado" => $destacado,
                "precio" => $precio
            ]
        );
    }

    // Método para insertar un nuevo álbum
    public function edit($id_decada, $portada, $titulo, $artista, $lanzamiento, $duracion, $destacado, $precio, $id){
        $conexion = (new Conexion())->getConexion();
        $query = "UPDATE albumes SET id_decada = :id_decada, portada = :portada, titulo = :titulo, artista = :artista, lanzamiento = :lanzamiento, duracion = :duracion, destacado = :destacado, precio = :precio WHERE id = :id";
        $PDOStatement = $conexion->prepare($query);
        $PDOStatement->execute(
            [
                "id" => $id,
                "id_decada" => $id_decada,
                "portada" => $portada,
                "titulo" => $titulo,
                "artista" => $artista,
                "lanzamiento" => $lanzamiento,
                "duracion" => $duracion,
                "destacado" => $destacado,
                "precio" => $precio
            ]
        );
    }

    // Método para reemplazar portada
    public function reemplazar_portada($portada, $id){
        $conexion = (new Conexion())->getConexion();
        $query = "UPDATE albumes SET portada = :portada WHERE id = :id";
        $PDOStatement = $conexion->prepare($query);
        $PDOStatement->execute(
            [
                "id" => $id,
                "portada" => $portada
            ]
        );
    }

    // Borrar Álbum
    public function delete(){
        $conexion = (new Conexion())->getConexion();
        $query = "DELETE FROM albumes WHERE id = ?";
        $PDOStatement = $conexion->prepare($query);
        $PDOStatement->execute([$this->id]);
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