<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1</title>
    <link rel="stylesheet" href="./assets/css/stylesIndex.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <?php include_once("../estructura/Navbar.php"); ?>
    <div class="container mt-4 p-xxl-5">
        <h1 class="mb-4">Ejercicio 1</h1>
        <h2 class="mb-3">Consigna</h2>
        <p class="text-justify">Confeccionar un formulario que solicite un número. Al pulsar el botón de enviar debe
        llamar a un script "vernumero.php" y visualizar un mensaje que indique si el número
        enviado fue: positivo, cero o negativo. Añadir un link, a la página que visualiza la
        respuesta, que permita volver a la página anterior.
        </p>
        <h2 class="mb-3">Solución</h2>
        <form action="./action/action-ej1.php" method="post">
            <div class="mb-3">
                <label for="number" class="form-label">Ingrese un número</label>
                <input type="number" name="number" id="number" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
    </div>
    <?php include_once("../estructura/Footer.php"); ?>
</body>
</html>