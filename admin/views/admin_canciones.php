<?php

$canciones = (new Cancion())->todas_las_canciones();
$pag = $_GET["pag"] ?? 1;
$paginas = intdiv(count($canciones), 25) + 1;
$inicio = ($pag - 1) * 25;
$fin = $inicio + 25;

?>

<div class="container">
    <div class="row my-5">
        <div class="col">
            <h1 class="text-center mb-5" style="color: #543310;">Administración de Canciones</h1>
            <div class="row mb-5 d-flex justify-content-center align-items-center">
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
                        <?php for ($inicio; $inicio < $fin; $inicio++) { ?>
                            <?php if(isset($canciones[$inicio])){ ?>
                                <tr>
                                    <th scope="row"><?= $canciones[$inicio]->getId() ?></th>
                                    <td><?= $canciones[$inicio]->getTitulo() ?></td>
                                    <td><?= $canciones[$inicio]->getAlbum() ?></td>
                                    <td>
                                        <a class="btn btn-warning" href="index.php?sec=edit_cancion&id=<?= $canciones[$inicio]->getId() ?>">Editar</a>
                                        <a class="btn btn-danger" href="index.php?sec=delete_cancion&id=<?= $canciones[$inicio]->getId() ?>">Eliminar</a>
                                    </td>
                                </tr>
                            <?php } ?>
                        <?php } ?>
                    </tbody>
                </table>
                <ul class="list-group list-group-horizontal d-flex justify-content-center">
                    <?php for($pag=1; $pag <= $paginas; $pag++){ ?>
                        <a href="index.php?sec=admin_canciones&pag=<?= $pag ?>">
                            <li class="list-group-item"><?= $pag ?></li>
                        </a>
                    <?php } ?>
                </ul>
                <a class="btn btn-primary mt-5" href="index.php?sec=add_cancion">Cargar Nueva Canción</a>
            </div>
        </div>
    </div>
</div>