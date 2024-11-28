<?php

require_once "../../functions/autoload.php";

$id = $_GET["id"] ?? FALSE;
$cancion = (new Cancion())->cancion_x_id($id);

try{
    $cancion->delete();
    header("Location: ../index.php?sec=admin_canciones");
}catch(\Exception $e){
    die("No se pudo eliminar la canción: $e");
}

?>