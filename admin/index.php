<?php

    require_once "../functions/autoload.php";

    $secciones_validas = [
        "login" => [
            "titulo" => "Login de Usuario",
            "restringido" => FALSE
        ],
        "dashboard" => [
            "titulo" => "Panel de Control",
            "restringido" => TRUE
        ],
        "admin_album" => [
            "titulo" => "Administrador de Álbumes",
            "restringido" => TRUE
        ],
        "add_album" => [
            "titulo" => "Agregar Álbum",
            "restringido" => TRUE
        ],
        "edit_album" => [
            "titulo" => "Editar Álbum",
            "restringido" => TRUE
        ],
        "delete_album" => [
            "titulo" => "Eliminar Álbum",
            "restringido" => TRUE
        ]
    ];

    $seccion = $_GET["sec"] ?? "dashboard";

    if (array_key_exists($seccion,$secciones_validas)) {
        $vista = $seccion;
        if($secciones_validas[$seccion]["restringido"]){
            (new Autenticacion())->verify();
        }
        $titulo = $secciones_validas[$seccion]["titulo"];
    } else {
        $vista = "404";
        $titulo = "Página no Encontrada";
    }

    $userData = $_SESSION["loggedIn"] ?? FALSE;

?>

<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Vinillum - <?= $titulo ?></title>
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

    <header style="background-color: #543310;">
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
                <a class="navbar-brand ms-3" href="index.php" style="color: #F8F4E1">
                    <i class="fa-solid fa-compact-disc fs-3"></i><span class="fst-italic fs-3 fw-bold ms-1">Vinillum</span>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link fw-bold me-1 <?= $userData ? "" : "d-none" ?>" href="index.php?sec=dashboard" style="color: #F8F4E1">Dashboard</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fw-bold me-1 <?= $userData ? "" : "d-none" ?>" href="index.php?sec=admin_album" style="color: #F8F4E1">Admin de Álbumes</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fw-bold me-1 <?= $userData ? "d-none" : "" ?>" href="index.php?sec=login" style="color: #F8F4E1">Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fw-bold me-3 <?= $userData ? "" : "d-none" ?>" href="actions/auth_logout.php" style="color: #F8F4E1">Logout</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <main class="container-fluid">
        <?php
            require "views/$vista.php" ?? "views/404.php";
        ?>
    </main>

    <footer style="background-color: #543310;">
        <p class="text-light text-center p-4 mb-0" style="color: #F8F4E1">Todos los derechos reservados - 2024 - CFP20</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>