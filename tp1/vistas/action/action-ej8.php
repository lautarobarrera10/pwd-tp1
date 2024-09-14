<?php

include_once "../../control/Entrada.php";
include_once "../../utils/funciones.php";

$datos = darDatosSubmitted();
// extract($datos);

$entrada = new Entrada($datos);
$precio = $entrada->getPrecio();
$estudiante = $entrada->getEstudiante() ? "Sí" : "No";

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Programación Web Dinámica - Calcular valor de entrada</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../assets/css/stylesIndex.css">
</head>
<body>
    <?php include_once("../estructura/NavbarAction.php"); ?>
    <div class="container mt-4 p-xxl-5">
        <h1 class="mb-3">resultado</h1>
        <p class="precio">Precio: $<?php echo htmlspecialchars($precio); ?></p>
        <a href="../ej8.php" class="btn btn-primary">Volver atrás</a>
    </div>
    <?php include_once("../estructura/Footer.php"); ?>
</body>
</html>