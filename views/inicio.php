<?php

$destacados = (new Album())->destacados();
$albumes = (new Album())->todos_los_albumes();

?>

<div class="row" style="background-color: #F8F4E1;">
    <div class="d-flex flex-column justify-content-center align-items-center p-3" style="background-color: #74512D; color: #F8F4E1">
        <h1 class="text-center fw-bold fs-3 mt-3">¡Bienvenidos a Vinillum!</h1>
        <p class="text-center fw-bold fs-4">El lugar para encontrar los mejores discos del rock nacional en formato retro.</p>
    </div>
</div>

<div class="row p-5 w-auto" style="background-color: #AF8F6F;">
    <div class="col-5 p-3">
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <?php if (count($destacados)) { ?>
                    <div class="carousel-item active">
                        <img src="img/portadas/<?= $destacados[0]->getPortada() ?>" class="d-block w-100" alt='Portada del álbum "<?= $destacados[0]->getTitulo() ?>"'>
                        <div class="carousel-caption d-none d-md-block">
                            <h5><?= $destacados[0]->getTitulo() ?></h5>
                            <p><?= $destacados[0]->getArtista() ?> - <?= $destacados[0]->getLanzamiento() ?></p>
                        </div>
                    </div>
                    <?php for ($i = 1; $i < 4; $i++) { ?>
                        <div class="carousel-item">
                            <img src="img/portadas/<?= $destacados[$i]->getPortada() ?>" class="d-block w-100" alt='Portada del álbum "<?= $destacados[$i]->getTitulo() ?>"'>
                            <div class="carousel-caption d-none d-md-block">
                                <h5 style="color: #FFB600;"><?= $destacados[$i]->getTitulo() ?></h5>
                                <p style="color: #FFB600;"><?= $destacados[$i]->getArtista() ?> - <?= $destacados[$i]->getLanzamiento() ?></p>
                            </div>
                        </div>
                    <?php } ?>
                <?php } else { ?>
                    <p class="text-center text-danger fs-4">Ha ocurrido un error...</p>
                <?php } ?>
            </div>
        </div>
    </div>

    <div class="col-7 p-3 d-flex flex-column justify-content-center align-items-center">
        <h2 class="text-center fw-bold fs-4">Puedes buscar tus discos favoritos mirando todo nuestro catálogo o filtrando tu búsqueda por década.</h2>
        <p class="text-center fs-5">También te dejamos una selección de los discos más vendidos del sitio.</p>
    </div>

</div>

<div class="row">
    <div class="col-12 p-5">
        <h1 class="text-center fw-bold fs-3 p-3 rounded" style="background-color: #543310;">Todos nuestros discos:</h1>
    </div>
</div>

<div class="container">
    <div class="row d-flex justify-content-start align-items-center">
        <?php if (count($albumes)) { ?>
            <?php foreach ($albumes as $a) { ?>
                <div class="col-3">
                    <div class="card m-2 w-100">
                        <img src="img/portadas/<?= $a->getPortada() ?>" class="card-img-top" alt='Portada del álbum "<?= $a->getTitulo() ?>"'>
                        <div class="card-body">
                            <h5 class="card-title fw-bold text-center"><?= $a->getTitulo() ?></h5>
                            <p class="card-text"><span class="fw-bold fs-6">Artista:</span> <?= $a->getArtista() ?></p>
                            <a href="index.php?sec=detalle_disco&id=<?= $a->getId() ?>" class="btn text-center d-flex justify-content-center" style="background-color: #543310; color: #F8F4E1;">Ver más</a>
                        </div>
                    </div>
                </div>
            <?php } ?>
        <?php } else { ?>
            <div class="col-12">
                <p class="text-center text-danger fs-3">No se ha encontrado el disco...</p>
            </div>
        <?php } ?>
    </div>
</div>