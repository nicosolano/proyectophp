<?php

require_once "../../functions/autoload.php";

$id = $_GET["id"] ?? FALSE;
$album = (new Album())->album_x_id($id);

try{
    if(!empty($album->getPortada())){
        (new Imagen())->borrarImagen(__DIR__ . "/../../img/portadas/" . $album->getPortada());
    }
    $album->delete();
    (new Alerta())->add_alerta("danger", "El álbum se ha eliminado correctamente.");
    header("Location: ../index.php?sec=admin_albumes");
}catch(\Exception $e){
    die("No se pudo eliminar el album: $e");
}

?>