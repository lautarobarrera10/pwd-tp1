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

        // Verificar el tamaño del archivo
        if ($file['size'] > 2 * 1024 * 1024) {
            echo "El archivo supera los 2MB permitidos.";
        } else {
            // Verificar la extensión del archivo
            $ext = strtolower(pathinfo($file['name'], PATHINFO_EXTENSION));
            if ($ext != 'doc' && $ext != 'pdf') {
                echo "El tipo de archivo no es válido. Solo se permiten .doc o .pdf.";
            } else {
                // Guardar el archivo

                $file = $_FILES['archivo']; // 'archivo' es el nombre del input en el formulario
                $uploadDir = '../../archivos/'; // Carpeta de destino
                $uploadFile = $uploadDir . basename($file['name']); // Ruta completa del archivo a subir

                if (move_uploaded_file($file['tmp_name'], $uploadFile)) {
                    echo "El archivo se subió correctamente.";
                } else {
                    echo "Hubo un error al subir el archivo.";
                }

            }
        }
    }
}
?>
