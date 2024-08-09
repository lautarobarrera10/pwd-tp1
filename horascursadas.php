<?php

$horasCursada = [];

if (isset($_GET['lunes']) &&
    isset($_GET['martes']) &&
    isset($_GET['miercoles']) &&
    isset($_GET['jueves']) &&
    isset($_GET['viernes'])){
    $horasCursada = [
        "lunes" => $_GET['lunes'],
        "martes" => $_GET['martes'],
        "miercoles" => $_GET['miercoles'],
        "jueves" => $_GET['jueves'],
        "viernes" => $_GET['viernes'],
    ];
}

$totalHorasCursadas = 0;

foreach ($horasCursada as $horas) {
    $totalHorasCursadas += $horas;
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Programación Web Dinámica - Horas cursadas</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Programación Web Dinámica - Horas cursadas</h1>
    <p>En total en la materia se cursan <?php echo $totalHorasCursadas; ?> horas semanales</p>
    <a href="./ej2.php">Volver atras</a>
</body>
</html>