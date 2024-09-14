<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2</title>
    <link rel="stylesheet" href="./assets/css/stylesIndex.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>
<body>
    <?php include_once("./estructura/Navbar.php"); ?>

    <div class="container mt-4  pb-xl-5">
        <h1 class="mb-4">Ejercicio 2</h1>
        <h2 class="mb-3">Consigna</h2>
        <p class="text-justify">Crear una página PHP que contenga un formulario HTML que permita ingresar las horas
        de cursada, de la materia Programación Web Dinámica, por cada día de la semana.
        Enviar los datos del formulario por el método GET a otra página PHP que los reciba y
        complete un array unidimensional. Visualizar por pantalla la cantidad total de horas que
        se cursan por semana.
        </p>
        <h2 class="mb-3">Solución</h2>
        <form action="./action/action-ej2.php" method="get">
            <h3>Programación Web Dinámica</h3>
            <div class="mb-3">
                <label for="lunes" class="form-label">Ingrese la cantidad de horas de cursada del lunes</label>
                <input type="number" name="lunes" id="lunes" class="form-control" min="0" max="6" required>
            </div>
            <div class="mb-3">
                <label for="martes" class="form-label">Ingrese la cantidad de horas de cursada del martes</label>
                <input type="number" name="martes" id="martes" class="form-control" min="0" max="6" required>
            </div>
            <div class="mb-3">
                <label for="miercoles" class="form-label">Ingrese la cantidad de horas de cursada del miércoles</label>
                <input type="number" name="miercoles" id="miercoles" class="form-control" min="0" max="6" required>
            </div>
            <div class="mb-3">
                <label for="jueves" class="form-label">Ingrese la cantidad de horas de cursada del jueves</label>
                <input type="number" name="jueves" id="jueves" class="form-control" min="0" max="6" required>
            </div>
            <div class="mb-3">
                <label for="viernes" class="form-label">Ingrese la cantidad de horas de cursada del viernes</label>
                <input type="number" name="viernes" id="viernes" class="form-control" min="0" max="6" required>
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
    </div>

    <?php include_once("./estructura/Footer.php"); ?>

    <!-- Bootstrap JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-cH8R13JcIqR8ZQ8B9aF7tbO5VTxp9ar6aF1X+10M6Q4m6zD8gUew+5U6RB4O2E6r" crossorigin="anonymous"></script>
</body>
</html>