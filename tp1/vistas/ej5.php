<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 5</title>
    <link rel="stylesheet" href="./assets/css/stylesIndex.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>
<body>
    <?php include_once("./estructura/Navbar.php"); ?>

    <div class="container mt-4 pb-xl-5">
        <h1 class="mb-4">Ejercicio 5</h1>
        <h2 class="mb-3">Consigna</h2>
        <p class="text-justify">Modificar el formulario del ejercicio anterior solicitando, tal que usando componentes
        “radios buttons” se ingrese el nivel de estudio de la persona: 1-no tiene estudios, 2-
        estudios primarios, 3-estudios secundarios. Agregar el componente que crea más
        apropiado para solicitar el sexo. En la página que procesa el formulario mostrar además
        un mensaje que indique el tipo de estudios que posee y su sexo.
        </p>
        <h2 class="mb-3">Solución</h2>
        <form action="./action/action-ej5.php" method="post">
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

            <fieldset class="mb-4">
                <legend class="form-label">Seleccione su nivel de estudios:</legend>
                <div class="form-check">
                    <input type="radio" id="ninguno" name="estudios" value="ninguno" class="form-check-input">
                    <label for="ninguno" class="form-check-label">No tiene estudios</label>
                </div>
                <div class="form-check">
                    <input type="radio" id="primario" name="estudios" value="primario" class="form-check-input">
                    <label for="primario" class="form-check-label">Estudios primarios</label>
                </div>
                <div class="form-check">
                    <input type="radio" id="secundario" name="estudios" value="secundario" class="form-check-input">
                    <label for="secundario" class="form-check-label">Estudios secundarios</label>
                </div>
            </fieldset>

            <fieldset class="mb-4">
                <legend class="form-label">Seleccione su sexo:</legend>
                <div class="form-check">
                    <input type="radio" id="masculino" name="sexo" value="masculino" class="form-check-input">
                    <label for="masculino" class="form-check-label">Masculino</label>
                </div>
                <div class="form-check">
                    <input type="radio" id="femenino" name="sexo" value="femenino" class="form-check-input">
                    <label for="femenino" class="form-check-label">Femenino</label>
                </div>
                <div class="form-check">
                    <input type="radio" id="otro" name="sexo" value="otro" class="form-check-input">
                    <label for="otro" class="form-check-label">Prefiero no decirlo</label>
                </div>
            </fieldset>

            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
    </div>

    <?php include_once("./estructura/Footer.php"); ?>

    <!-- Bootstrap JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-cH8R13JcIqR8ZQ8B9aF7tbO5VTxp9ar6aF1X+10M6Q4m6zD8gUew+5U6RB4O2E6r" crossorigin="anonymous"></script>
</body>
</html>
