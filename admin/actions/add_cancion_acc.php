<?php

require_once "../../functions/autoload.php";

$postData = $_POST;

try{
    (new Cancion())->insert($postData["titulo"], $postData["id_album"]);
    header("Location: ../index.php?sec=add_cancion");
}catch(\Exception $e){
    die("No se pudo cargar la canción: $e");
}

?>