<?php

require_once "../../functions/autoload.php";

$pag = $_GET["pag"] ?? 1;
$postData = $_POST;
$id_album = $postData["id_album"];

try{
    (new Cancion())->insert($postData["titulo"], $id_album);
    (new Alerta())->add_alerta("success", "La canción se ha agregado correctamente.");
    header("Location: ../index.php?sec=add_cancion&pag=$pag&id_album=$id_album");
}catch(\Exception $e){
    die("No se pudo cargar la canción: $e");
}

?>