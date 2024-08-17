<?php

include_once "../../control/Calculadora.php";
include_once "../../utils/funciones.php";

$datos = darDatosSubmitted();
extract($datos);

$calculadora = new Calculadora($operando1, $operando2);
$calculadora->setOperacion($operacion);
$resultado = $calculadora->calcular();

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Programación Web Dinámica - Calculadora</title>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
    <h1>Calculadora</h1>
    <p><?php echo "El resultado de $operacion $operando1 y $operando2 es $resultado"; ?></p>
    <a href="../ej7.php">Volver atras</a>
</body>
</html>