<?php

class Alerta {
    // Método 1: registra alerta en el sistema guardándolo en la sesión
    // Esta alerta va a tener el tipo (color) y el mensaje (contenido)
    public function add_alerta(string $tipo, string $mensaje){
        $_SESSION["alertas"][] = [
            "tipo" => $tipo,
            "mensaje" => $mensaje
        ];
    }

    // Método 2: vaciar la lista de alertas
    public function clear_alertas(){
        $_SESSION["alertas"] = [];
    }

    // Método 3: mostrar alerta
    public function get_alertas(){
        if(!empty($_SESSION["alertas"])){
            $alertasActuales = "";
            foreach($_SESSION["alertas"] as $alerta){
                $alertasActuales = $this->print_alerta($alerta);
            }
            $this->clear_alertas();
            return $alertasActuales;
        }else{
            return NULL;
        }
    }

    // Método 4: crear alerta
    public function print_alerta($alerta){
        $html = "<div class='alert alert-{$alerta['tipo']} alert-dismissible fade show' role='alert'>";
        $html .= $alerta["mensaje"];
        $html .= "<button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>";
        $html .= "</div>";
        return $html;
    }
}

?>