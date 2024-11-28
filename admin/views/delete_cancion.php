<?php

$id = $_GET["id"] ?? FALSE;
$cancion = (new Cancion())->cancion_x_id($id);

?>

<div class="container">
    <div class="row my-5 g-3">
        <h1 class="text-center mb-5" style="color: #543310;">¿Está seguro que desea eliminar la canción: <?= $cancion->getTitulo() ?>?</h1>
        <a href="actions/delete_cancion_acc.php?id=<?= $cancion->getId() ?>" class="btn btn-danger d-block">Eliminar</a>
    </div>
</div>