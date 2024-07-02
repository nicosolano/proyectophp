<?php

require_once "libraries/albumes.php";

$destacados = discos_destacados();
$discos = todos_los_discos();

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
                        <img src="img/portadas/<?= $destacados[0]["portada"] ?>" class="d-block w-100" alt='Portada del álbum "<?= $destacados[0]["titulo"] ?>"'>
                        <div class="carousel-caption d-none d-md-block">
                            <h5><?= $destacados[0]["titulo"] ?></h5>
                            <p><?= $destacados[0]["artista"] ?> - <?= $destacados[0]["lanzamiento"] ?></p>
                        </div>
                    </div>
                    <?php for ($i = 1; $i < 4; $i++) { ?>
                        <div class="carousel-item">
                            <img src="img/portadas/<?= $destacados[$i]["portada"] ?>" class="d-block w-100" alt='Portada del álbum "<?= $destacados[$i]["titulo"] ?>"'>
                            <div class="carousel-caption d-none d-md-block">
                                <h5 style="color: #FFB600;"><?= $destacados[$i]["titulo"] ?></h5>
                                <p style="color: #FFB600;"><?= $destacados[$i]["artista"] ?> - <?= $destacados[$i]["lanzamiento"] ?></p>
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
        <h1 class="text-center fw-bold fs-3 p-3 rounded" style="background-color: #543310; color: #F8F4E1">Todos nuestros discos:</h1>
    </div>
</div>

<div class="row">
    <?php if (count($discos)) { ?>
        <?php foreach ($discos as $disco) { ?>
            <div class="col-3">
                <div class="card mb-3" style="max-width: 18rem; background-color: #F8F4E1; color: #543310; border: #74512D 3px solid;">
                    <img src="img/portadas/<?= $disco["portada"] ?>" class="card-img-top" alt='Portada del álbum "<?= $disco["portada"] ?>"'>
                    <div class="card-body">
                        <h5 class="card-title fw-bold text-center"><?= $disco["titulo"] ?></h5>
                        <p class="card-text"><span class="fw-bold fs-6">Artista:</span> <?= $disco["artista"] ?></p>
                        <a href="index.php?sec=detalle_disco&id=<?= $disco["id"] ?>" class="btn text-center d-flex justify-content-center" style="background-color: #543310; color: #F8F4E1;">Ver más</a>
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