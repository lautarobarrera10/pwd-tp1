<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <h1>Ejercicio 1</h1>
    <h2>Consigna</h2>
    <p>Confeccionar un formulario que solicite un número. Al pulsar el botón de enviar debe
    llamar a un script "vernumero.php" y visualizar un mensaje que indique si el número
    enviado fue: positivo, cero o negativo. Añadir un link, a la página que visualiza la
    respuesta, que permita volver a la página anterior.
    </p>
    <h2>Solución</h2>
    <form action="./action/action-ej1.php" method="post">
        <label for="number">Ingrese un número</label>
        <input type="number" name="number" id="number" required>
        <button type="submit">Enviar</button>
    </form>
</body>
</html>