<?php

$canciones = (new Cancion())->todas_las_canciones();

?>

<div class="container">
    <div class="row my-5">
        <div class="col">
            <h1 class="text-center mb-5" style="color: #543310;">Administración de Canciones</h1>
            <div class="row mb-5 d-flex align-items-center">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Título</th>
                            <th scope="col">Álbum</th>
                            <th scope="col">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($canciones as $c){ ?>
                        <tr>
                            <th scope="row"><?= $c->getId() ?></th>
                            <td><?= $c->getTitulo() ?></td>
                            <td><?= $c->getAlbum() ?></td>
                            <td>
                                <a class="btn btn-warning" href="index.php?sec=edit_cancion&id=<?= $c->getId() ?>">Editar</a>
                                <a class="btn btn-danger" href="index.php?sec=delete_cancion&id=<?= $c->getId() ?>">Eliminar</a>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
                <a class="btn btn-primary mt-5" href="index.php?sec=add_cancion">Cargar Nueva Canción</a>
            </div>
        </div>
    </div>
</div>