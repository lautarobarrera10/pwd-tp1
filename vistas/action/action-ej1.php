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
    <link rel="stylesheet" href="../../style.css">
</head>
<body>
    <h1>Ver número ingresado</h1>
    <p><?php echo "El número ingresado es " . $mensaje; ?></p>
    <a href="./ej1.php">Volver atras</a>
</body>
</html>