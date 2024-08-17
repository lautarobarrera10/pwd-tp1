<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 8</title>
    <link rel="stylesheet" href="./assets/css/style.css">
</head>
<body>
    <h1>Ejercicio 8</h1>
    <h2>Consigna</h2>
    <p>La empresa de Cine Cinem@s tiene establecidas diferentes tarifas para las entradas, en
    función de la edad y de la condición de estudiante del cliente. Desea que sean los propios
    clientes los que puedan calcular el valor de sus entradas a través de una página web. Si
    es estudiante o menor de 12 años el precio es de $160, si es estudiante y mayor o igual
    de 12 años el precio es de $180, en cualquier otro caso el precio es de $300. Diseñar un
    formulario que solicite la edad y permita ingresar si se trata de un estudiante o no. Con
    un botón enviar los datos a un script encargado de realizar el cálculo y visualizarlo.
    Agregar un botón para limpiar el formulario y volver a consultar.
    </p>
    <h2>Solución</h2>
    <form action="./action/action-ej8.php" method="get">
        <h3>Cine Cinem@s - Calcular valor de entrada</h3>

        <label for="edad">Edad</label>
        <input type="number" name="edad" id="edad" required>

        <label for="estudiante">¿Es estudiante?</label>
        <select name="estudiante" id="estudiante">
            <option value="no">No</option>
            <option value="si">Sí</option>
        </select>

        <button type="submit">Calcular</button>
        <a href="./ej8.php" class="boton-alternativo">Limpiar datos</a>
    </form>
</body>
</html>