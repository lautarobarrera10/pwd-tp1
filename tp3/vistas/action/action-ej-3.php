<?php

include_once "../../utils/funciones.php";
include_once "../../control/PeliculaController.php";
include_once "../../control/SubirImagen.php";




// $datos["imagen_form"] == $_FILES;
// var_dump($datos);


if ($_POST) {
    $datos = data_submitted(); // Obtener datos del formulario
    $subirImagen = new SubirImagen();

    // Subir la imagen y obtener el nombre único
    $imagenNombreUnico = $subirImagen->subir($_FILES);
    // var_dump($imagenNombreUnico);
    $obj = new PeliculaController($datos); // Crear el objeto controlador
    // Subir la imagen
    // Crear una instancia de la clase SubirImagen
    

   

    
    // if ($imagenNombreUnico) {
    //     // La imagen se subió correctamente, puedes guardar $imagenNombreUnico en la base de datos si es necesario
    //     $pelicula->setImagen($imagenNombreUnico);
    // } else {
    //     // Manejar errores en caso de que la subida de la imagen falle
    //     $errorMensaje = "Hubo un error al subir la imagen. Por favor, inténtalo de nuevo.";
    //     header("Location: formulario.php?error=" . urlencode($errorMensaje));
    //     exit;
    // }


}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3</title>
    <link rel="stylesheet" href="../assets/css/stylesIndex.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <?php include_once("../estructura/NavbarAction.php"); ?>
    <div class="d-flex flex-column align-items-center justify-content-center vh-100 bg-dark">
        <p class="mt-3"><a href="../eje3.php" class="link-light link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">Volver atrás</a></p>

        <div class="bg-light p-5 rounded">
            <h1 class="h2 text-primary" style="width: fit-content;">La pelicula introducida es</h1>
            <?php echo $obj; ?>
            <h3 class="text-success"></h3>
            <img src="../../control/archivos_imagen/<?php echo $imagenNombreUnico; ?>" alt="Imagen de la película" class="img-fluid">
        </div>
    </div>
    <?php include_once("../estructura/Footer.php"); ?>
</body>
</html>