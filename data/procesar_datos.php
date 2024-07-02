<?php

    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    $correo = $_POST["correo"];
    $consulta = $_POST["consulta"];
    $mensaje = $_POST["mensaje"];

?>

<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Vinillum - Consulta enviada</title>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- PALETA DE COLORES:
        #F8F4E1
        #AF8F6F
        #74512D
        #543310
    -->

    <!-- FUENTES -->
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap');

        body {
            font-family: "Playfair Display", serif;
        }
    </style>

    <!-- Íconos -->
    <link rel="icon" type="image/png" sizes="32x32" href="img/iconos/favicon-32x32.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body style="background-color: #F8F4E1;">

    <main class="mb-0 p-4" style="background-color: #F8F4E1;">
        <div class="container">
            <h1 class="text-center fw-bold fs-2 p-3 mt-3">¡Tu consulta fue enviada con éxito!</h1>
            <h2 class="text-center fw-bold fs-3 mb-3">Detalles de la consulta</h2>

            <p class="text-center mb-3"><span class="fw-bold">Nombre:</span> <?= $nombre ?></p>
            <p class="text-center mb-3"><span class="fw-bold">Apellido:</span> <?= $apellido ?></p>
            <p class="text-center mb-3"><span class="fw-bold">Correo electrónico:</span> <?= $correo ?></p>
            <p class="text-center mb-3"><span class="fw-bold">Tipo de consulta:</span> <?php
                foreach ($consulta as $valor) {
                    echo "$valor";
                }
            ?></p>
            <p class="text-center mb-3"><span class="fw-bold">Mensaje:</span> <?= $mensaje ?></p>
        </div>

        <div class="col-12 text-center">
            <a class="btn" href="../index.php" role="button" style="background-color: #543310; color: #F8F4E1;">Volver a inicio</a>
        </div>

    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>