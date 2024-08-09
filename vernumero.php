<?php

$mensaje = "";

if (isset($_GET['number'])){
    switch($_GET['number']){
        case $_GET['number'] == 0:
            $mensaje = "El número ingresado es 0";
            break;
        case $_GET['number'] > 0:
            $mensaje = "El número ingresado es positivo";
            break;
        case $_GET['number'] < 0:
            $mensaje = "El número ingresado es negativo";
            break;
        default:
            $mensaje = "Ingrese un número.";
    }
} else {
    $mensaje = "No ha ingresado un número.";
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ver número</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <h1>Ver número ingresado</h1>
    <p><?php echo $mensaje; ?></p>
    <a href="./ej1.php">Volver atras</a>
</body>
</html>