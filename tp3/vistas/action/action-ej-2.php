<?php
// Asegurarse de que el archivo PHP.ini permite la carga de archivos
ini_set('file_uploads', 'On');

// Configurar el tamaño máximo de archivo
ini_set('upload_max_filesize', '2M');

// Configurar el directorio temporal donde se almacenan los archivos antes de procesarlos
ini_set('upload_tmp_dir', '../../archivos');

// Procesar el archivo subido
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_FILES['archivo']) && $_FILES['archivo']['error'] == UPLOAD_ERR_OK) {
        $file = $_FILES['archivo'];
        $mensaje = "";
        // Verificar el tamaño del archivo
        if ($file['size'] > 2 * 1024 * 1024) {
            $mensaje = "El archivo supera los 2MB permitidos.";
        } else {
            // Verificar la extensión del archivo
            $ext = strtolower(pathinfo($file['name'], PATHINFO_EXTENSION));
            if ($ext != 'txt') {
                $mensaje = "El tipo de archivo no es válido. Solo se permiten .text";
            } else {
                // Guardar el archivo

                $file = $_FILES['archivo']; // 'archivo' es el nombre del input en el formulario
                $uploadDir = '../../archivos/'; // Carpeta de destino
                $uploadFile = $uploadDir . basename($file['name']); // Ruta completa del archivo a subir

                if (move_uploaded_file($file['tmp_name'], $uploadFile)) {
                    $mensaje = "El archivo se subió correctamente.";
                    
                    $filename = $uploadFile; // Especifica la ruta del archivo

                    $contenido = file_get_contents($filename);
                    
                } else {
                    $mensaje = "Hubo un error al subir el archivo.";
                }

            }
        }
    }
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Contenido del Archivo</title>
    <link rel="stylesheet" href="../assets/css/stylesIndex.css">
</head>
<body>
    <?php include_once("../estructura/NavbarAction.php"); ?>
    <div class="container mt-5 mb-5 pb-xl-5">
        <h1 class="mb-4">Resultado</h1>
        <p><?php echo $mensaje ?></p>
        <h2 class="mb-4">Contenido del Archivo:</h2>
        <textarea rows="20" cols="70"><?php echo htmlspecialchars($contenido); ?></textarea>
        <br>
        <a href="../eje2.php">Subir otro archivo</a>
    </div>
    
    
    <?php include_once("../estructura/Footer.php"); ?>
</body>
</html>