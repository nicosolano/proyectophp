<?php

require_once "../../functions/autoload.php";

$postData = $_POST;
$id = $_GET["id"] ?? FALSE;
$fileData = $_FILES["portada"] ?? FALSE;

try{
    $album = new Album();
    if(!empty($fileData["tmp_name"])){
        if(!empty($postData["portada_og"])){
            (new Imagen())->borrarImagen(__DIR__ . "/../../img/portadas/" . $postData["portada_og"]);
        }
        $portada = (new Imagen())->subirImagen(__DIR__ . "/../../img/portadas", $fileData);
        $album->reemplazar_portada($portada, $id);
    }
    $album->edit($postData["id_decada"], $postData["titulo"], $postData["artista"], $postData["lanzamiento"], $postData["duracion"], $postData["destacado"], $postData["precio"], $id);
    (new Alerta())->add_alerta("warning", "El álbum se ha editado correctamente.");
    header("Location: ../index.php?sec=admin_albumes#$id");
}catch(\Exception $e){
    die("No se pudo editar el álbum: $e");
}

?>