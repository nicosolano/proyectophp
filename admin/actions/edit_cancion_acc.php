<?php

require_once "../../functions/autoload.php";

$postData = $_POST;
$pag = $_GET["pag"] ?? 1;
$id = $_GET["id"] ?? FALSE;

try{
    (new Cancion())->edit($postData["titulo"], $postData["id_album"], $id);
    (new Alerta())->add_alerta("warning", "La canción se ha editado correctamente.");
    header("Location: ../index.php?sec=admin_canciones&pag=$pag#$id");
}catch(\Exception $e){
    die("No se pudo editar la canción: $e");
}

?>