<?php

include_once "../../control/Texto.php";
include_once "../../utils/funciones.php";

$datos = darDatosSubmitted();

$obj = new Texto;
$mensajePresentacion = $obj->armarMensajeDePresentacion($datos);
$mensajeMayorEdad = $obj->armarMensajeDeMayorEdad($datos['edad']);

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Programación Web Dinámica - Mensaje de presentación</title>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
    <h1>Mensaje de presentación</h1>
    <p><?php echo $mensajePresentacion . " " . $mensajeMayorEdad; ?></p>
    <a href="../ej4.php">Volver atras</a>
</body>
</html>