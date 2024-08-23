<?php
class SubirImagen {
    private $directorioDestino;

    public function __construct() {
        // Directorio donde se almacenarán las imágenes
        $this->directorioDestino = __DIR__ . '/archivos_imagen/'; // Ruta absoluta al directorio
    }

    public function subir($archivo) {
        var_dump($archivo);
        $nombreArchivo = $archivo["imagen_form"]['name'];

        // Verifica si es una imagen (puedes agregar más validaciones aquí)
        $tipoImagen = exif_imagetype($archivo["imagen_form"]['tmp_name']);
        if ($tipoImagen !== false) {
            // Genera un nombre único para la imagen
            $nombreUnico = uniqid() . '_' . $nombreArchivo;
            $rutaDestino = $this->directorioDestino . $nombreUnico;

            // Mueve la imagen al directorio de destino
            if (move_uploaded_file($archivo["imagen_form"]['tmp_name'], $rutaDestino)) {
                return $nombreUnico; // Éxito: Devuelve el nombre único de la imagen
            } else {
                return false; // Error al subir la imagen
            }
        } else {
            return false; // No es una imagen válida
        }
    }
    public function cargarImagen($datosImg)
    {
        var_dump($datosImg);
        if ($datosImg['imagen_form']['error'] <= 0) {
            $nombre = $datosImg['imagen_form']['name'];
            $dir = '../../../archivos/';
            $exito = false;

            if (!copy($datosImg['imagen_form']['tmp_name'], $dir . $datosImg['imagen_form']['name'])) {
                $retorno = "ERROR: No se pudo cargar el archivo";
            } else {
                $exito = true;
                $retorno = "El archivo: " . $datosImg['imagen_form']['name'] . " se ha copiado con exito <br/>";
            }
        } else {
            $retorno = "ERROR: No se pudo cargar el archivo. No se pudo acceder al archivo Temporal";
        }

        if ($exito) {
            $dir .= $nombre;
            $retorno = "<img alt=$nombre src='$dir'>";
        }
        return $retorno;
    }
}
?>