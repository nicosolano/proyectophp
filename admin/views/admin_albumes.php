<?php

$albumes = (new Album())->todos_los_albumes();

?>

<div class="container">
    <div class="row my-5">
        <div class="col">
            <h1 class="text-center mb-5" style="color: #543310;">Administración de Álbumes</h1>
            <div>
                <?= (new Alerta())->get_alertas() ?>
            </div>
            <div class="row mb-5 d-flex align-items-center">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col" width="15%">Portada</th>
                            <th scope="col">ID</th>
                            <th scope="col">Década</th>
                            <th scope="col">Título</th>
                            <th scope="col">Artista</th>
                            <th scope="col">Lanzamiento</th>
                            <th scope="col">Duración</th>
                            <th scope="col">Destacado</th>
                            <th scope="col">Precio</th>
                            <th scope="col">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($albumes as $a){ ?>
                        <tr>
                            <td><img src="../img/portadas/<?= $a->getPortada() ?>" class="img-fluid rounded" alt='Portada del álbum "<?= $a->getTitulo() ?>"'></td>
                            <th scope="row" id="<?= $a->getId() ?>"><?= $a->getId() ?></th>
                            <td><?= $a->getDecada() ?></td>
                            <td><?= $a->getTitulo() ?></td>
                            <td><?= $a->getArtista() ?></td>
                            <td><?= $a->getLanzamiento() ?></td>
                            <td><?= $a->getDuracion() ?></td>
                            <?php if($a->getDestacado()){ ?>
                                <td>Sí</td>
                            <?php }else{ ?>
                                <td>No</td>
                            <?php } ?>
                            <td><?= $a->getPrecio() ?></td>
                            <td>
                                <a class="btn btn-warning" href="index.php?sec=edit_album&id=<?= $a->getId() ?>">Editar</a>
                                <a class="btn btn-danger mt-2" href="index.php?sec=delete_album&id=<?= $a->getId() ?>">Eliminar</a>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
                <a class="btn btn-primary mt-5" href="index.php?sec=add_album" id="add">Cargar Nuevo Álbum</a>
            </div>
        </div>
    </div>
</div>