<?php

include_once "../../control/Numero.php";
include_once "../../utils/funciones.php";

$datos = darDatosSubmitted();

$obj = new Numero();
$mensaje = $obj->devolverSigno($datos);

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ver número</title>
    <link rel="stylesheet" href="../assets/css/stylesIndex.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <?php include_once("../../estructura/Navbar.php"); ?>
    <div class="container mt-4 p-xxl-5">
        <h1 class="mb-3">Número ingresado</h1>
        <p><?php echo "El número ingresado es " . $mensaje; ?></p>
        <a href="../ej1.php">Volver atras</a>
    </div>
    
    <?php include_once("../../estructura/Footer.php"); ?>
</body>
</html>