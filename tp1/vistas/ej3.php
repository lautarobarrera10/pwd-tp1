<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3</title>
    <link rel="stylesheet" href="./assets/css/stylesIndex.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>
<body>
    <?php include_once("./estructura/Navbar.php"); ?>

    <div class="container mt-4 pb-xl-5">
        <h1 class="mb-4">Ejercicio 3</h1>
        <h2 class="mb-3">Consigna</h2>
        <p class="text-justify">Crear una página PHP que contenga un formulario HTML como el que se indica en la
        imagen (darle formato con CSS), enviar estos datos por el método POST a otra página PHP
        que los reciba y muestre por pantalla un mensaje como el siguiente: “Hola, yo soy
        nombre, apellido, tengo edad años y vivo en dirección”, usando la información recibida.
        Cambiar el método POST por GET y analizar las diferencias.
        </p>
        <h2 class="mb-3">Solución</h2>
        <form action="./action/action-ej3.php" method="post">
            <h3 class="mb-4">Formulario de Información Personal</h3>
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre</label>
                <input type="text" name="nombre" id="nombre" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="apellido" class="form-label">Apellido</label>
                <input type="text" name="apellido" id="apellido" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="edad" class="form-label">Edad</label>
                <input type="number" name="edad" id="edad" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="direccion" class="form-label">Dirección</label>
                <input type="text" name="direccion" id="direccion" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
    </div>

    <?php include_once("./estructura/Footer.php"); ?>

    <!-- Bootstrap JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-cH8R13JcIqR8ZQ8B9aF7tbO5VTxp9ar6aF1X+10M6Q4m6zD8gUew+5U6RB4O2E6r" crossorigin="anonymous"></script>
</body>
</html>
