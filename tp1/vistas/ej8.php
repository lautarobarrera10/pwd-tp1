<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 8</title>
    <link rel="stylesheet" href="./assets/css/stylesIndex.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>
<body>
    <?php include_once("./estructura/Navbar.php"); ?>

    <div class="container mt-4 pb-xl-5">
        <h1 class="mb-4">Ejercicio 8</h1>
        <h2 class="mb-3">Consigna</h2>
        <p class="text-justify">La empresa de Cine Cinem@s tiene establecidas diferentes tarifas para las entradas, en
        función de la edad y de la condición de estudiante del cliente. Desea que sean los propios
        clientes los que puedan calcular el valor de sus entradas a través de una página web. Si
        es estudiante o menor de 12 años el precio es de $160, si es estudiante y mayor o igual
        de 12 años el precio es de $180, en cualquier otro caso el precio es de $300. Diseñar un
        formulario que solicite la edad y permita ingresar si se trata de un estudiante o no. Con
        un botón enviar los datos a un script encargado de realizar el cálculo y visualizarlo.
        Agregar un botón para limpiar el formulario y volver a consultar.
        </p>
        <h2 class="mb-3">Solución</h2>
        <form action="./action/action-ej8.php" method="get">
            <h3 class="mb-4">Cine Cinem@s - Calcular valor de entrada</h3>
            
            <div class="mb-3">
                <label for="edad" class="form-label">Edad</label>
                <input type="number" name="edad" id="edad" class="form-control" required>
            </div>
            
            <div class="mb-3">
                <label for="estudiante" class="form-label">¿Es estudiante?</label>
                <select name="estudiante" id="estudiante" class="form-select">
                    <option value="no">No</option>
                    <option value="si">Sí</option>
                </select>
            </div>
            
            <button type="submit" class="btn btn-primary">Calcular</button>
            <a href="./ej8.php" class="btn btn-secondary ms-2">Limpiar datos</a>
        </form>
    </div>

    <?php include_once("./estructura/Footer.php"); ?>

    <!-- Bootstrap JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-cH8R13JcIqR8ZQ8B9aF7tbO5VTxp9ar6aF1X+10M6Q4m6zD8gUew+5U6RB4O2E6r" crossorigin="anonymous"></script>
</body>
</html>
