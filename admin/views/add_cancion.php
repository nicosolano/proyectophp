<?php

$pag = $_GET["pag"] ?? 1;
$id_album = $_GET["id_album"] ?? FALSE;
$albumes = (new Album())->todos_los_albumes();

?>

<div class="container">
    <div class="row my-5">
        <div class="col">
            <h1 class="text-center mb-5" style="color: #543310;">Agregar Nueva Canción</h1>
            <div>
                <?= (new Alerta())->get_alertas() ?>
            </div>
            <div class="row mb-5 d-flex align-items-center">
                <form class="row g-3" action="actions/add_cancion_acc.php?pag=<?= $pag ?>" method="POST">
                    <div class="col-6 mb-3">
                        <label class="form-label" for="titulo">Título:</label>
                        <input class="form-control" type="text" name="titulo" id="titulo" required>
                    </div>
                    <div class="col-6 mb-3">
                        <label class="form-label" for="id_album">Álbum:</label>
                        <select class="form-select" name="id_album" id="id_album" required>
                            <option value="" selected disabled>Elija una opción</option>
                            <?php foreach($albumes as $a){ ?>
                                <option value="<?= $a->getId() ?>" <?= $a->getId() == $id_album ? "selected" : "" ?>><?= $a->getTitulo() ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <button class="btn btn-primary" type="submit">Cargar Canción</button>
                    <a class="btn btn-danger" href="index.php?sec=admin_canciones&pag=<?= $pag ?>#add">Volver</a>
                </form>
            </div>
        </div>
    </div>
</div>