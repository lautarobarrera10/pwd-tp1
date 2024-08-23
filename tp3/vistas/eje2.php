<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>

    <div class="container mt-5">
        <h1 class="mb-4">Consigna</h1>
        <p>Crear un formulario que permita subir un archivo. En el servidor se deberá controlar
        que el tipo esperado sea txt (texto plano), si es correcto deberá abrir el archivo y mostrar su
        contenido en un textarea.</p>

        <h1 class="mb-4">Solución</h1>
        <p>Subir archivo</p>
        <form action="./action/action-ej-2.php" method="post" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="archivo" class="form-label">Seleccionar archivo</label>
                <input type="file" class="form-control" name="archivo" id="archivo" accept=".txt" required>
            </div>
            <button type="submit" class="btn btn-primary">Subir archivo</button>
        </form>
    </div>

    <!-- Incluir Bootstrap JS y Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
    <script src="./assets/js/ej-1.js"></script>
</body>
</html>