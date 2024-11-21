<?php

class Autenticacion {
    // Verifica las credenciales del usuario y de ser correcto guarda los datos en una sesión
    public function log_in(string $usuario, string $password){
        // Instanciar la clase usuario
        $datosUsuario = (new Usuario())->usuario_x_username($usuario);

        //Comprobaciones si el usuario existe, comprobar si la contraseña es correcta
        if($datosUsuario){
            if(password_verify($password, $datosUsuario->getPassword())){
                $datosLogin["username"] = $datosUsuario->getNombre_usuario();
                $datosLogin["id"] = $datosUsuario->getId();
                $_SESSION["loggedIn"] = $datosLogin;
                return TRUE;
            }else{
                return FALSE;
            }
        }else{
            return FALSE;
        }
    }

    // Método Logout
    public function log_out(){
        if(isset($_SESSION["loggedIn"])){
            unset($_SESSION["loggedIn"]);
        }
    }

    // Verificar si el usuario está logeado
    public function verify(){
        if(isset($_SESSION["loggedIn"])){
            return TRUE;
        }else{
            header("Location: index.php?sec=login");
        }
    }
}

?>