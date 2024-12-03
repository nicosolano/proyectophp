<?php

$canciones = (new Cancion())->todas_las_canciones();
$pag = $_GET["pag"] ?? 1;
$limite = 25;
$paginas = intdiv(count($canciones), $limite) + 1;
$inicio = ($pag - 1) * $limite;
$fin = $inicio + $limite;

?>

<div class="container">
    <div class="row my-5">
        <div class="col">
            <h1 class="text-center mb-5" style="color: #543310;">Administración de Canciones</h1>
            <div>
                <?= (new Alerta())->get_alertas() ?>
            </div>
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
                                    <th scope="row" id="<?= $canciones[$inicio]->getId() ?>"><?= $canciones[$inicio]->getId() ?></th>
                                    <td><?= $canciones[$inicio]->getTitulo() ?></td>
                                    <td><?= $canciones[$inicio]->getAlbum() ?></td>
                                    <td>
                                        <a class="btn btn-warning" href="index.php?sec=edit_cancion&pag=<?= $pag ?>&id=<?= $canciones[$inicio]->getId() ?>">Editar</a>
                                        <a class="btn btn-danger" href="index.php?sec=delete_cancion&pag=<?= $pag ?>&id=<?= $canciones[$inicio]->getId() ?>">Eliminar</a>
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
                <a class="btn btn-primary mt-5" href="index.php?sec=add_cancion&pag=<?= $paginas ?>" id="add">Cargar Nueva Canción</a>
            </div>
        </div>
    </div>
</div>