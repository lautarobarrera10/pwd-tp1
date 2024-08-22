<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2</title>
    <link rel="stylesheet" href="./assets/css/style.css">
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
    <form action="./action/action-ej2.php" method="get">
        <h3>Programación Web Dinámica</h3>
        <label for="lunes">Ingrese la cantidad de horas de cursada del lunes</label>
        <input type="number" name="lunes" id="lunes" min="0" max="6" required>
        <label for="martes">Ingrese la cantidad de horas de cursada del martes</label>
        <input type="number" name="martes" id="martes" min="0" max="6" required>
        <label for="miercoles">Ingrese la cantidad de horas de cursada del miercoles</label>
        <input type="number" name="miercoles" id="miercoles" min="0" max="6" required>
        <label for="jueves">Ingrese la cantidad de horas de cursada del jueves</label>
        <input type="number" name="jueves" id="jueves" min="0" max="6" required>
        <label for="viernes">Ingrese la cantidad de horas de cursada del viernes</label>
        <input type="number" name="viernes" id="viernes" min="0" max="6" required>
        <button type="submit">Enviar</button>
    </form>
</body>
</html>