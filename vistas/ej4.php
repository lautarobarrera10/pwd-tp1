<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 4</title>
    <link rel="stylesheet" href="./assets/css/style.css">
</head>
<body>
    <h1>Ejercicio 4</h1>
    <h2>Consigna</h2>
    <p>Modificar el formulario del ejercicio anterior para que usando la edad solicitada, enviar
    esos datos a otra página en donde se muestren mensajes distintos dependiendo si la
    persona es mayor de edad o no; (si la edad es mayor o igual a 18).
    Enviar los datos usando el método GET y luego probar de modificar los datos
    directamente en la url para ver los dos posibles mensajes.
    </p>
    <h2>Solución</h2>
    <form action="./action/action-ej4.php" method="get">
        <h3>Programación Web Dinámica</h3>
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre" id="nombre" required>
        <label for="apellido">Apellido</label>
        <input type="text" name="apellido" id="apellido" required>
        <label for="edad">Edad</label>
        <input type="number" name="edad" id="edad" required>
        <label for="direccion">Dirección</label>
        <input type="text" name="direccion" id="direccion" required>
        <button type="submit">Enviar</button>
    </form>
</body>
</html>