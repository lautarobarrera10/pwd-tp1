<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar Nueva Persona</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center">Registrar Nueva Persona</h1>

        <form action="./accion/accionNuevaPersona.php" method="post" class="mt-4">
            <div class="mb-3">
                <label for="dni" class="form-label">Número de DNI:</label>
                <input type="text" class="form-control" id="dni" name="dni" required>
            </div>

            <div class="mb-3">
                <label for="apellido" class="form-label">Apellido:</label>
                <input type="text" class="form-control" id="apellido" name="apellido" required>
            </div>

            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre:</label>
                <input type="text" class="form-control" id="nombre" name="nombre" required>
            </div>

            <div class="mb-3">
                <label for="fechaNac" class="form-label">Fecha de Nacimiento:</label>
                <input type="date" class="form-control" id="fechaNac" name="fechaNac" required>
            </div>

            <div class="mb-3">
                <label for="telefono" class="form-label">Teléfono:</label>
                <input type="text" class="form-control" id="telefono" name="telefono" required>
            </div>

            <div class="mb-3">
                <label for="domicilio" class="form-label">Domicilio:</label>
                <input type="text" class="form-control" id="domicilio" name="domicilio" required>
            </div>

            <div class="text-center">
                <button type="submit" class="btn btn-primary">Registrar Persona</button>
            </div>
        </form>

        <div class="mt-3 text-center">
            <a href="VerAutos.php" class="btn btn-secondary">Volver a la lista de autos</a>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>