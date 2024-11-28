<?php

$id = $_GET["id"];
$cancion = (new Cancion())->cancion_x_id($id);
$albumes = (new Album())->todos_los_albumes();

?>

<div class="container">
    <div class="row my-5">
        <div class="col">
            <h1 class="text-center mb-5" style="color: #543310;">Editar Canción</h1>
            <div class="row mb-5 d-flex align-items-center">
            <form class="row g-3" action="actions/edit_cancion_acc.php?id=<?= $cancion->getId() ?>" method="POST">
                    <div class="col-6 mb-3">
                        <label class="form-label" for="titulo">Título:</label>
                        <input class="form-control" type="text" name="titulo" id="titulo" value="<?= $cancion->getTitulo() ?>" required>
                    </div>
                    <div class="col-6 mb-3">
                        <label class="form-label" for="id_album">Álbum:</label>
                        <select class="form-select" name="id_album" id="id_album" required>
                            <option value="" disabled>Elija una opción</option>
                            <?php foreach($albumes as $a){ ?>
                                <option value="<?= $a->getId() ?>" <?= $a->getId() == $cancion->getId_album() ? "selected" : "" ?>><?= $a->getTitulo() ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <button class="btn btn-primary" type="submit">Editar Canción</button>
                </form>
            </div>
        </div>
    </div>
</div>