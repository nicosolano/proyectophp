<?php

$id = $_GET["id"];
$album = (new Album())->album_x_id($id);
$decadas = (new Decada())->todas_las_decadas();

?>

<div class="container">
    <div class="row my-5">
        <div class="col">
            <h1 class="text-center mb-5">Editar Álbum</h1>
            <div class="row mb-5 d-flex align-items-center">
                <form class="row g-3" action="actions/edit_album_acc.php?id=<?= $album->getId() ?>" method="POST" enctype="multipart/form-data">
                    <div class="col-6 mb-3">
                        <label class="form-label" for="titulo">Título:</label>
                        <input class="form-control" type="text" name="titulo" id="titulo" value="<?= $album->getTitulo() ?>" required>
                    </div>
                    <div class="col-6 mb-3">
                        <label class="form-label" for="artista">Artista:</label>
                        <input class="form-control" type="text" name="artista" id="artista" value="<?= $album->getArtista() ?>" required>
                    </div>
                    <div class="col-6 mb-3">
                        <label class="form-label" for="id_decada">Década:</label>
                        <select class="form-select" name="id_decada" id="id_decada" required>
                            <option value="" disabled>Elija una opción</option>
                            <?php foreach($decadas as $d){ ?>
                                <option value="<?= $d->getId() ?> <?= $d->getId() == $album->getId_decada() ? "selected" : "" ?>"><?= $d->getYear() ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="col-6 mb-3">
                        <label class="form-label" for="lanzamiento">Lanzamiento:</label>
                        <input class="form-control" type="date" name="lanzamiento" id="lanzamiento" value="<?= $album->getLanzamiento() ?>" required>
                    </div>
                    <div class="col-6 mb-3">
                        <label class="form-label" for="duracion">Duración:</label>
                        <input class="form-control" type="time" name="duracion" id="duracion" step="1" value="<?= $album->getDuracion() ?>" required>
                    </div>
                    <div class="col-6 mb-3">
                        <label class="form-label" for="precio">Precio:</label>
                        <input class="form-control" type="number" name="precio" id="precio" value="<?= $album->getPrecio() ?>" required>
                    </div>
                    <div class="col-2 mb-3">
                        <label class="form-label" for="portada_og">Portada Actual:</label>
                        <img class="img-fluid" width="150px" src="../img/portadas/<?= $album->getPortada() ?>" alt='Portada del álbum "<?= $album->getTitulo() ?>"'>
                        <input class="form-control" type="hidden" name="portada_og" id="portada_og" value="<?= $album->getPortada() ?>">
                    </div>
                    <div class="col-4 mb-3">
                        <label class="form-label" for="portada">Reemplazar Portada:</label>
                        <input class="form-control" type="file" name="portada" id="portada">
                    </div>
                    <div class="col-6 mb-3">
                        <label class="form-label" for="destacado">Destacado:</label>
                        <select class="form-select" name="destacado" id="destacado" required>
                            <option value="" disabled>Elija una opción</option>
                            <option value="1" <?= $album->getDestacado() == 1 ? "selected" : "" ?>>Sí</option>
                            <option value="0" <?= $album->getDestacado() == 0 ? "selected" : "" ?>>No</option>
                        </select>
                    </div>
                    <button class="btn btn-primary" type="submit">Editar Álbum</button>
                </form>
            </div>
        </div>
    </div>
</div>