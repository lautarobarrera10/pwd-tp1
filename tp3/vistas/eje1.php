<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Consigna</h1>
    <p>Ejercicio 1 – Crear un formulario HTML que permita subir un archivo. En el servidor se deberá
        controlar, antes de guardar el archivo, que los tipos validos son .doc o pdf y además el tamaño
        máximo permitido es de 2mb. En caso que se cumplan las condiciones mostrar un link al archivo
        cargado, en caso contrario mostrar un mensaje indicando el problema. </p>

    <h1>Solucion</h1>
    <p>Subir archivo </p>
    <form action="eje1.php" method="post" enctype="multipart/form-data">
        <input type="file" name="archivo" id="archivo">
        <input type="submit" value="Subir archivo" name="submit">
    </form>

</body>

</html>