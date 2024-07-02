<?php

    require_once "libraries/albumes.php";

    $decada = $_GET["dec"] ?? FALSE;
    $discos = discos_x_decada($decada);

?>

<div class="row" style="background-color: #74512D;">
    <div class="col-12 d-flex flex-column justify-content-center align-items-center p-3" style="color: #F8F4E1;">
        <h1 class="text-center fw-bold fs-2 mt-3">¡Visitá los años <?= $decada ?>´!</h1>
        <p class="text-center fw-bold fs-3">Rememorá y enamorate de los éxitos de la década.</p>
    </div>
</div>

<div class="row mt-4 d-flex justify-content-center align-items-center ms-5">
    <?php if (count($discos)) { ?>
        <?php foreach ($discos as $disco) { ?>
            <div class="col-4">
                <div class="card mb-3" style="max-width: 22rem; background-color: #F8F4E1; color: #543310; border: #74512D 3px solid;">
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