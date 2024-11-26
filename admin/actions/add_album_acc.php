<?php

require_once "../../functions/autoload.php";

$postData = $_POST;
$fileData = $_FILES["portada"];

try{
    $portada = (new Imagen())->subirImagen(__DIR__ . "/../../img/portadas", $fileData);
    (new Album())->insert($postData["id_decada"], $portada, $postData["titulo"], $postData["artista"], $postData["lanzamiento"], $postData["duracion"], $postData["destacado"], $postData["precio"]);
    header("Location: ../index.php?sec=admin_albumes");
}catch(\Exception $e){
    die("No se pudo cargar el álbum: $e");
}

?>