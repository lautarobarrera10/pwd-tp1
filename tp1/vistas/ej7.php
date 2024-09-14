<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 7</title>
    <link rel="stylesheet" href="./assets/css/stylesIndex.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>
<body>
    <?php include_once("./estructura/Navbar.php"); ?>

    <div class="container mt-4 pb-xl-5">
        <h1 class="mb-4">Ejercicio 7</h1>
        <h2 class="mb-3">Consigna</h2>
        <p class="text-justify">Crear una página con un formulario que contenga dos inputs de tipo text y un select. En
        los inputs se ingresarán números y el select debe dar la opción de una operación
        matemática que podrá resolverse usando los números ingresados. En la página que
        procesa la información se debe mostrar por pantalla la operación seleccionada, cada
        uno de los operandos y el resultado obtenido de resolver la operación.
        </p>
        <h2 class="mb-3">Solución</h2>
        <form action="./action/action-ej7.php" method="get">
            <h3 class="mb-4">Calculadora</h3>
            <div class="mb-3">
                <label for="operando1" class="form-label">Operando 1</label>
                <input type="number" name="operando1" id="operando1" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="operando2" class="form-label">Operando 2</label>
                <input type="number" name="operando2" id="operando2" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="operacion" class="form-label">Operación</label>
                <select name="operacion" id="operacion" class="form-select" required>
                    <option value="sumar">Sumar</option>
                    <option value="restar">Restar</option>
                    <option value="multiplicar">Multiplicar</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
    </div>

    <?php include_once("./estructura/Footer.php"); ?>

    <!-- Bootstrap JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-cH8R13JcIqR8ZQ8B9aF7tbO5VTxp9ar6aF1X+10M6Q4m6zD8gUew+5U6RB4O2E6r" crossorigin="anonymous"></script>
</body>
</html>
