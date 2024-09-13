<?php
require_once '../../Control/AbmPersona.php'; // Capa de control para personas
require_once '../../Modelo/Persona.php';
// Obtener los datos del formulario
$dni = $_POST['dni'];
$apellido = $_POST['apellido'];
$nombre = $_POST['nombre'];
$fechaNac = $_POST['fechaNac'];
$telefono = $_POST['telefono'];
$domicilio = $_POST['domicilio'];

// Crear una instancia de PersonaControl
$personaControl = new AbmPersona();

// Registrar la nueva persona
$resultado = $personaControl->agregarNuevaPersona($dni, $apellido, $nombre, $fechaNac, $telefono, $domicilio);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado del Registro</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center">Resultado del Registro</h1>

        <div class="alert <?php echo $resultado ? 'alert-success' : 'alert-danger'; ?>" role="alert">
            <?php
            if ($resultado) {
                echo "Persona registrada exitosamente.";
            } else {
                echo "Error al registrar la persona. Verifica los datos e intenta nuevamente.";
            }
            ?>
        </div>

        <div class="text-center">
            <a href="../RegistroPersona.php" class="btn btn-primary">Registrar otra persona</a>
            <a href="VerAutos.php" class="btn btn-secondary">Volver a la lista de autos</a>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>