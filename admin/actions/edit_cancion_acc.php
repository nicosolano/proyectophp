<?php

require_once "../../functions/autoload.php";

$postData = $_POST;
$id = $_GET["id"] ?? FALSE;

try{
    (new Cancion())->edit($postData["titulo"], $postData["id_album"], $id);
    header("Location: ../index.php?sec=admin_canciones");
}catch(\Exception $e){
    die("No se pudo editar la canción: $e");
}

?>