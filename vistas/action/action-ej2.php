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
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
    <h1>Programación Web Dinámica - Horas cursadas</h1>
    <p>En total en la materia se cursan <?php echo $horasSemanales; ?> horas semanales</p>
    <a href="../ej2.php">Volver atras</a>
</body>
</html>