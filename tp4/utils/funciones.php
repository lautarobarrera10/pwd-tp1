<?php


function darDatosSubmitted(){
    $datos = [];
    //piso el array de datos con los datos que vienen por POST para darles prioridad
    foreach($_GET as $key => $value){
        $datos[$key] = $value;
    }
    foreach($_POST as $key => $value){
        $datos[$key] = $value;
    }
    return $datos;
}

spl_autoload_register(function ($class_name) {
    $directorys = array(
        $_SESSION['ROOT'] . 'Modelo/',
        $_SESSION['ROOT'] . 'Modelo/conector/',
        $_SESSION['ROOT'] . 'Control/',
    );

    foreach ($directorys as $directory) {
        if (file_exists($directory . $class_name . '.php')) {
            require_once($directory . $class_name . '.php');
            return;
        }
    }
});