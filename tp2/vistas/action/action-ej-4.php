<?php

include_once "../../utils/funciones.php";
include_once "../../control/PeliculaController.php";

$datos = darDatosSubmitted();

$obj = new PeliculaController($datos);


?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 4</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="d-flex flex-column align-items-center justify-content-center vh-100 bg-dark">
        <p class="mt-3"><a href="../ej-4.php" class="link-light link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">Volver atrás</a></p>

        <div class="bg-light p-5 rounded">
            <h1 class="h2 text-primary" style="width: fit-content;">La pelicula introducida es</h1>
            <?php echo $obj; ?>
        </div>
    </div>
</body>
</html>