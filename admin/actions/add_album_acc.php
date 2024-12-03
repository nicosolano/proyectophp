<?php

require_once "../../functions/autoload.php";

$postData = $_POST;
$fileData = $_FILES["portada"];

try{
    $portada = (new Imagen())->subirImagen(__DIR__ . "/../../img/portadas", $fileData);
    (new Album())->insert($postData["id_decada"], $portada, $postData["titulo"], $postData["artista"], $postData["lanzamiento"], $postData["duracion"], $postData["destacado"], $postData["precio"]);
    (new Alerta())->add_alerta("success", "El álbum se ha agregado correctamente.");
    header("Location: ../index.php?sec=admin_albumes#add");
}catch(\Exception $e){
    die("No se pudo cargar el álbum: $e");
}

?>