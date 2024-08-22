<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio A</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container ">
        <h1 class="text-secondary">Ejercicio A</h1>
        <h2 class="text-secondary">Consigna</h2>
        <p> Crear una nueva página php con un formulario HTML de login en la que solicitan el usuario
        y la password para loguearse. Los datos del formulario son enviados a un script
        verificaPass.php en el que contienen un arreglo asociativo por cada usuario del sistema. El
        arreglo asociativo tiene como claves: “usuario” y “clave”. El script debe visualizar un mensaje
        de bienvenida si los datos ingresados coinciden con alguno de los almacenados en el arreglo
        y en caso contrario un mensaje de error.
        </p>
        <h2 class="text-primary">Solución</h2>
        <form action="./action/action-ej-a.php" method="post" class="flex-col col-3">
            <label for="usuario">Usuario</label>
            <input class="mb-3 mt-1 form-control" type="text" name="usuario" id="usuario" placeholder="usario123" required>
            <label for="password">Contraseña</label>
            <input class="mb-3 mt-1 form-control" type="password" name="password" id="password" placeholder="********" required>
            <button class="mt-4 btn btn-outline-primary" type="submit">Ingresar</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>