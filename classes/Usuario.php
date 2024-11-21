<?php

class Usuario {
    // Atributos
    protected $id;
    protected $nombre_usuario;
    protected $nombre_completo;
    protected $email;
    protected $password;

    // Métodos
    // Encuentra a un usuario por su username
    public function usuario_x_username(string $username){
        $conexion = (new Conexion())->getConexion();
        $query = "SELECT * FROM usuarios WHERE nombre_usuario = ?";
        $PDOStatement = $conexion->prepare($query);
        $PDOStatement->setFetchMode(PDO::FETCH_CLASS, self::class);
        $PDOStatement->execute(
            [$username]
        );
        $usuario = $PDOStatement->fetch();
        if(!$usuario){
            return NULL;
        }
        return $usuario;
    }
    
    // Getters
    public function getId(){
        return $this->id;
    }
    public function getNombre_usuario(){
        return $this->nombre_usuario;
    }
    public function getNombre_completo(){
        return $this->nombre_completo;
    }
    public function getEmail(){
        return $this->email;
    }
    public function getPassword(){
        return $this->password;
    }
}

?>