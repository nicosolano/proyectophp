<?php

$decadas = (new Decada())->todas_las_decadas();

?>

<div class="container">
    <div class="row my-5">
        <div class="col">
            <h1 class="text-center mb-5">Agregar Nuevo Álbum</h1>
            <div class="row mb-5 d-flex align-items-center">
                <form class="row g-3" action="actions/add_album_acc.php" method="POST" enctype="multipart/form-data">
                    <div class="col-6 mb-3">
                        <label class="form-label" for="titulo">Título:</label>
                        <input class="form-control" type="text" name="titulo" id="titulo" required>
                    </div>
                    <div class="col-6 mb-3">
                        <label class="form-label" for="artista">Artista:</label>
                        <input class="form-control" type="text" name="artista" id="artista" required>
                    </div>
                    <div class="col-6 mb-3">
                        <label class="form-label" for="id_decada">Década:</label>
                        <select class="form-select" name="id_decada" id="id_decada" required>
                            <option value="" selected disabled>Elija una opción</option>
                            <?php foreach($decadas as $d){ ?>
                                <option value="<?= $d->getId() ?>"><?= $d->getYear() ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="col-6 mb-3">
                        <label class="form-label" for="lanzamiento">Lanzamiento:</label>
                        <input class="form-control" type="date" name="lanzamiento" id="lanzamiento" required>
                    </div>
                    <div class="col-6 mb-3">
                        <label class="form-label" for="duracion">Duración:</label>
                        <input class="form-control" type="time" name="duracion" id="duracion" step="1" required>
                    </div>
                    <div class="col-6 mb-3">
                        <label class="form-label" for="precio">Precio:</label>
                        <input class="form-control" type="number" name="precio" id="precio" required>
                    </div>
                    <div class="col-6 mb-3">
                        <label class="form-label" for="portada">Portada:</label>
                        <input class="form-control" type="file" name="portada" id="portada">
                    </div>
                    <div class="col-6 mb-3">
                        <label class="form-label" for="destacado">Destacado:</label>
                        <select class="form-select" name="destacado" id="destacado" required>
                            <option value="" selected disabled>Elija una opción</option>
                            <option value="1">Sí</option>
                            <option value="0">No</option>
                        </select>
                    </div>
                    <button class="btn btn-primary" type="submit">Cargar Álbum</button>
                </form>
            </div>
        </div>
    </div>
</div>