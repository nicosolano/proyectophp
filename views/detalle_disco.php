<?php

$id = $_GET["id"] ?? FALSE;
$album = (new Album())->album_x_id($id);
$canciones = (new Cancion())->canciones_x_album($album->getId());

?>

<div class="row">
    <div class="col-12 p-3" style="background-color: #74512D">
        <h1 class="text-center fw-bold fs-3" style="color: #F8F4E1;">Detalles del álbum:</h1>
    </div>
</div>

<div class="row m-3 mt-4">
    <?php if (isset($album)) { ?>
        <div class="card mb-3 mx-auto" style="max-width: 1200px; background-color: #F8F4E1; color: #543310; border: #74512D 3px solid;">
            <div class="row g-0">
                <div class="col-md-4 d-flex justify-content-center align-items-center">
                    <img src="img/portadas/<?= $album->getPortada() ?>" class="img-fluid rounded-start" alt='Portada del álbum "<?= $album->getTitulo() ?>"'>
                </div>
                <div class="col-md-8 ps-5">
                    <div class="card-body">
                        <h5 class="card-title text-center fw-bold fs-3"><?= $album->getTitulo() ?></h5>
                        <p class="card-text"><span class="fs-5 fw-bold">Artista:</span> <?= $album->getArtista() ?></p>
                        <p class="card-text"><span class="fs-5 fw-bold">Lanzamiento:</span> <?= $album->getLanzamiento() ?></p>
                        <p class="card-text"><span class="fs-5 fw-bold">Duración:</span> <?= $album->getDuracion() ?></p>
                        <p class="card-text fs-5 fw-bold">Canciones:</p>
                        <ul>
                            <?php foreach ($canciones as $c) { ?>
                                <li class="card-text"><?= $c->getTitulo() ?></li>
                            <?php } ?>
                        </ul>
                        <div class="card-body">
                            <p class="fs-3 mb-3 fw-bold text-danger text-center">$<?= $album->getPrecio() ?></p>
                            <a class="btn btn-danger w-100 fw-bold">COMPRAR</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php } else { ?>
        <div class="col-12">
            <p class="text-center text-danger fw-bold fs-2">No se ha encontrado el disco...</p>
        </div>
    <?php } ?>
</div>