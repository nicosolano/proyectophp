<?php

$opciones = [
    "compra" => "Compra",
    "devolucion" => "Devolución",
    "reclamo" => "Reclamo"
];

?>

<div class="col-12 w-100 mx-auto p-3 d-flex flex-column justify-content-center align-items-center" style="background-color: #74512D; color: #F8F4E1">
    <h1 class="text-center fw-bold fs-3">¡Si tenés una consulta escribinos!</h1>
    <p class="text-center fw-bold fs-4">Preguntanos acerca de una compra, si quieres devolver un producto o si desea hacer un reclamo.</p>
</div>

<div class="col-6 mx-auto">
    <form action="data/procesar_datos.php" method="POST">
        <div class="my-3">
            <label for="nombre" class="form-label fw-bold fs-5">Nombre:</label>
            <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Ingrese su nombre" required>
        </div>
        <div class="mb-3">
            <label for="apellido" class="form-label fw-bold fs-5">Apellido:</label>
            <input type="text" class="form-control" name="apellido" id="apellido" placeholder="Ingrese su apellido" required>
        </div>
        <div class="mb-3">
            <label for="correo" class="form-label fw-bold fs-5">Correo electrónico:</label>
            <input type="email" name="correo" id="correo" class="form-control" placeholder="Ingrese su correo" required>
        </div>
        <p class="fw-bold fs-5">¿Cuál es su consulta?</p>
        <?php foreach ($opciones as $indice => $valor) { ?>
            <div class="mb-3">
                <input type="radio" name="consulta[]" id="<?= $indice ?>" value="<?= $valor ?>" required>
                <label for="<?= $indice ?>" class="form-label"><?= $valor ?></label>
            </div>
        <?php } ?>
        <div class="mb-4">
            <label for="mensaje" class="form-label fw-bold fs-5">Mensaje:</label>
            <textarea name="mensaje" id="mensaje" class="form-control" placeholder="Escriba un mensaje" required></textarea>
        </div>

        <div class="text-center pb-4">
            <button type="submit" class="btn fw-bold" style="
                --bs-btn-bg: #74512D;
                --bs-btn-color: #F8F4E1;
                --bs-btn-hover-bg: #543310;
                --bs-btn-hover-color: #F8F4E1;
            ">Enviar</button>
        </div>
    </form>
</div>