<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3</title>
    <link rel="stylesheet" href="./assets/css/style.css">
</head>
<body>
    <h1>Ejercicio 3</h1>
    <h2>Consigna</h2>
    <p>Crear una página php que contenga un formulario HTML como el que se indica en la
    imagen (darle formato con CSS), enviar estos datos por el método Post a otra página php
    que los reciba y muestre por pantalla un mensaje como el siguiente: “Hola, yo soy
    nombre , apellido tengo edad años y vivo en dirección”, usando la información recibida.
    Cambiar el método Post por Get y analizar las diferencias
    </p>
    <h2>Solución</h2>
    <form action="./action/action-ej3.php" method="post">
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