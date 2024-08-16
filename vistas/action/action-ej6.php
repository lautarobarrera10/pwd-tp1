<?php

include_once "../../control/Mensaje.php";
include_once "../../utils/funciones.php";

$datos = darDatosSubmitted();

$obj = new Mensaje;
$obj->armarMensajeDePresentacion($datos);
$obj->concatenarMayoriaEdad($datos['edad']);
$obj->concatenarNivelEstudios($datos['estudios']);
$obj->concatenarSexo($datos['sexo']);
$obj->concatenarDeportes($datos);
$mensaje = $obj->getMensaje();

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
    <p><?php echo $mensaje; ?></p>
    <a href="../ej6.php">Volver atras</a>
</body>
</html>