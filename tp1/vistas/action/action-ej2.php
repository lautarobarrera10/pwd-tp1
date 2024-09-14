<?php

include_once "../../control/Numero.php";
include_once "../../utils/funciones.php";

$datos = darDatosSubmitted();

$obj = new Numero();
$horasSemanales = $obj->sumarHorasSemanales($datos);

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Programación Web Dinámica - Horas cursadas</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../assets/css/stylesIndex.css">
</head>
<body>
    <?php include_once("../estructura/NavbarAction.php"); ?>
    <div class="container mt-4 p-xxl-5">
        <h1 class="mb-3">Programación Web Dinámica - Horas cursadas</h1>
        <p>En total en la materia se cursan <?php echo $horasSemanales; ?> horas semanales</p>
        <a href="../ej2.php" class="btn btn-primary">Volver atrás</a>
    </div>
    
    <?php include_once("../estructura/Footer.php"); ?>
</body>
</html>