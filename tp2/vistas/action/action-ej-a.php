<?php

include_once "../../control/UsuarioController.php";
include_once "../../model/Usuario.php";
include_once "../../utils/funciones.php";

$datos = darDatosSubmitted();

$obj = new UsuarioController($datos);

$usuarioCorrecto = $obj->verificarUsuario();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3</title>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
    <h1>Ejercicio 3</h1>
    <h2>Consigna</h2>
    <p> Crear una nueva página php con un formulario HTML de login en la que solicitan el usuario
    y la password para loguearse. Los datos del formulario son enviados a un script
    verificaPass.php en el que contienen un arreglo asociativo por cada usuario del sistema. El
    arreglo asociativo tiene como claves: “usuario” y “clave”. El script debe visualizar un mensaje
    de bienvenida si los datos ingresados coinciden con alguno de los almacenados en el arreglo
    y en caso contrario un mensaje de error.
    </p>
    <h2>Solución</h2>
    <?php if ($usuarioCorrecto): ?>
        <h3 style="color: green;">Bienvenido!!!</h3>
    <?php else: ?>
        <form action="./action-ej-a.php" method="post">
            <label for="usuario">Usuario</label>
            <input type="text" name="usuario" id="usuario" placeholder="usario123" required>
            <label for="password">Contraseña</label>
            <input type="password" name="password" id="password" placeholder="********" required>
            <p style="color: red;">Usuario incorrecto</p>
            <button type="submit">Ingresar</button>
        </form>
    <?php endif; ?>
</body>
</html>