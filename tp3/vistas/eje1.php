<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/css/stylesIndex.css">
    <title>TPS PWD 2024 grupo 10 </title>
</head>

<body>
    <?php include_once("./estructura/Navbar.php"); ?>
    <div class="container mt-5">
        <h1 class="mb-4">Consigna</h1>
        <p>Ejercicio 1 – Crear un formulario HTML que permita subir un archivo. En el servidor se deberá controlar, antes de guardar el archivo, que los tipos válidos son .doc o .pdf y además el tamaño máximo permitido es de 2MB. En caso que se cumplan las condiciones, mostrar un link al archivo cargado; en caso contrario, mostrar un mensaje indicando el problema.</p>

        <h1 class="mb-4">Solución</h1>
        <p>Subir archivo</p>
        <form action="./action/action-ej-1.php" method="post" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="archivo" class="form-label">Seleccionar archivo</label>
                <input type="file" class="form-control" name="archivo" id="archivo" accept=".doc,.pdf" required>
            </div>
            <button type="submit" class="btn btn-primary">Subir archivo</button>
        </form>
    </div>
    <?php include_once("./estructura/Footer.php"); ?>

    <!-- Incluir Bootstrap JS y Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
    <script src="./assets/js/ej-1.js"></script>
</body>
</html>