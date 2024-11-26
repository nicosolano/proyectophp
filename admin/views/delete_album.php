<?php

$id = $_GET["id"] ?? FALSE;
$album = (new Album())->album_x_id($id);

?>

<div class="container">
    <div class="row my-5 g-3">
        <h1 class="text-center mb-5" style="color: #543310;">¿Está seguro que desea eliminar el álbum: <?= $album->getTitulo() ?>?</h1>
        <a href="actions/delete_album_acc.php?id=<?= $album->getId() ?>" class="btn btn-danger d-block">Eliminar</a>
    </div>
</div>