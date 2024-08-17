<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 7</title>
    <link rel="stylesheet" href="./assets/css/style.css">
</head>
<body>
    <h1>Ejercicio 7</h1>
    <h2>Consigna</h2>
    <p>Crear una página con un formulario que contenga dos input de tipo text y un select. En
    los inputs se ingresarán números y el select debe dar la opción de una operación
    matemática que podrá resolverse usando los números ingresados. En la página que
    procesa la información se debe mostrar por pantalla la operación seleccionada, cada
    uno de los operandos y el resultado obtenido de resolver la operación.
    </p>
    <h2>Solución</h2>
    <form action="./action/action-ej7.php" method="get">
        <h3>Calculadora</h3>
        <label for="operando1">Operando 1</label>
        <input type="number" name="operando1" id="operando1" required>
        <label for="operando2">Operando 2</label>
        <input type="number" name="operando2" id="operando2" required>

        <label for="operacion">Operación</label>
        <select name="operacion" id="operacion">
            <option value="sumar">Sumar</option>
            <option value="restar">Restar</option>
            <option value="multiplicar">Multiplicar</option>
        </select>

        <button type="submit">Enviar</button>
    </form>
</body>
</html>