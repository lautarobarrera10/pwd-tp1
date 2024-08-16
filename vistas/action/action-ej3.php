<?php

include_once "../../control/Texto.php";
include_once "../../utils/funciones.php";

$datos = darDatosSubmitted();

$obj = new Texto;
$mensaje = $obj->armarMensajeDePresentacion($datos);

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Programación Web Dinámica - Mensaje de presentación</title>
    <link rel="stylesheet" href="../../style.css">
</head>
<body>
    <h1>Mensaje de presentación</h1>
    <p><?php echo $mensaje; ?></p>
    <a href="../ej3.php">Volver atras</a>
</body>
</html>