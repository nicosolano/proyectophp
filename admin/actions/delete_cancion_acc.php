<?php

require_once "../../functions/autoload.php";

$pag = $_GET["pag"] ?? 1;
$id = $_GET["id"] ?? FALSE;
$cancion = (new Cancion())->cancion_x_id($id);

try{
    $cancion->delete();
    (new Alerta())->add_alerta("danger", "La canción se ha eliminado correctamente.");
    header("Location: ../index.php?sec=admin_canciones&pag=$pag");
}catch(\Exception $e){
    die("No se pudo eliminar la canción: $e");
}

?>