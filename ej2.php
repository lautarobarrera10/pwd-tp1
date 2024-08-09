<?php
// Ejercicio 1
// Confeccionar un formulario que solicite un número. Al pulsar el botón de enviar debe
// llamar a un script –vernumero.php- y visualizar un mensaje que indique si el número
// enviado fue: positivo, cero o negativo. Añadir un link, a la página que visualiza la
// respuesta, que permita volver a la página anterior.
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <h1>Ejercicio 2</h1>
    <h2>Consigna</h2>
    <p>Crear una página php que contenga un formulario HTML que permita ingresar las horas
    de cursada, de la materia Programación Web Dinámica, por cada día de la semana.
    Enviar los datos del formulario por el método Get a otra página php que los reciba y
    complete un array unidimensional. Visualizar por pantalla la cantidad total de horas que
    se cursan por semana.
    </p>
    <h2>Solución</h2>
    <form action="./horascursadas.php" method="get">
        <h3>Programación Web Dinámica</h3>
        <label for="number">Ingrese la cantidad de horas de cursada del lunes</label>
        <input type="number" name="lunes" id="lunes" min="0" max="6" required>
        <label for="number">Ingrese la cantidad de horas de cursada del martes</label>
        <input type="number" name="martes" id="martes" min="0" max="6" required>
        <label for="number">Ingrese la cantidad de horas de cursada del miercoles</label>
        <input type="number" name="miercoles" id="miercoles" min="0" max="6" required>
        <label for="number">Ingrese la cantidad de horas de cursada del jueves</label>
        <input type="number" name="jueves" id="jueves" min="0" max="6" required>
        <label for="number">Ingrese la cantidad de horas de cursada del viernes</label>
        <input type="number" name="viernes" id="viernes" min="0" max="6" required>
        <button type="submit">Enviar</button>
    </form>
</body>
</html>