<?php
require_once '../Control/AbmPersona.php'; // Capa de control para personas

$personaControl = new AbmPersona();
$personas = $personaControl->obtenerTodasLasPersonas();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar Nuevo Auto</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center mb-4">Registrar Nuevo Auto</h1>

        <form action="accionNuevoAuto.php" method="post">
            <div class="mb-3">
                <label for="patente" class="form-label">Patente:</label>
                <input type="text" class="form-control" id="patente" name="patente" required>
            </div>

            <div class="mb-3">
                <label for="marca" class="form-label">Marca:</label>
                <input type="text" class="form-control" id="marca" name="marca" required>
            </div>

            <div class="mb-3">
                <label for="modelo" class="form-label">Modelo:</label>
                <input type="number" class="form-control" id="modelo" name="modelo" required>
            </div>

            <div class="mb-3">
                <label for="duenio" class="form-label">DNI del Dueño:</label>
                <select class="form-select" id="duenio" name="duenio" required>
                    <option value="">Seleccionar Dueño</option>
                    <?php foreach ($personas as $persona) : ?>
                        <option value="<?php echo $persona->getNroDni(); ?>">
                            <?php echo $persona->getNroDni() . " - " . $persona->getNombre() . " " . $persona->getApellido(); ?>
                        </option>
                    <?php endforeach; ?>
                </select>
            </div>

            <div class="text-center">
                <button type="submit" class="btn btn-primary">Registrar Auto</button>
            </div>
        </form>

        <div class="mt-3 text-center">
            <a href="NuevaPersona.php" class="btn btn-secondary">Registrar Nueva Persona</a>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>