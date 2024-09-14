<?php

include_once("./estructura/menu/menu.php");
require_once("../../configuracion.php");

use Control\AbmPersona;

?>

<!DOCTYPE html>
<html>
<head>
    <title>Lista de Personas</title>
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/css/styles.css">
    <link rel="stylesheet" href="./assets/css/inicio.css">
    <script type="text/javascript" src="./assets/js/bootstrap.bundle.min.js"></script>

</head>
<body class="bg-dark">
    <?php
        $rutalogo = "./assets/img/";
        include_once("./estructura/Navbar.php");
    ?>
    <main class="container-fluid cont container text-light">
    <h1>Lista de Personas</h1>
    <?php

        // Crea una instancia de la capa de control AbmPersona
        $abmPersona = new AbmPersona();

        // Obtiene todas las personas
        $personas = $abmPersona->obtenerTodasLasPersonas();

        // Verifica si hay personas cargadas
        if (count($personas) > 0) {
            // Define el inicio del heredoc
            $salida = <<<TABLA
            <table class="table table-dark">
            <tr><th>Dni</th><th>Nombre</th><th>Apellido</th><th>Fecha Nac</th><th>Telefono</th><th>Domicilio</th></tr>
            TABLA;
            
            // Itera a través de la lista de personas y muestra los datos
            foreach ($personas as $persona) {
                $salida .= <<<FILA
                <tr>
                <td><a href="autosPersona.php?dni={$persona->getNroDni()}">{$persona->getNroDni()}</a></td>
                <td>{$persona->getNombre()}</td>
                <td>{$persona->getApellido()}</td>
                <td>{$persona->getFechaNac()}</td>
                <td>{$persona->getTelefono()}</td>
                <td>{$persona->getDomicilio()}</td>
                </tr>
                FILA;
            }
            
            // Cierra la tabla
            $salida .= "</table>";
        } else {
            $salida = "<p>No hay personas cargadas.</p>";
        }

        // Muestra el resultado
        echo $salida;

    ?>
    </main>
    <div >
    </div>
    <?php include_once("./estructura/Footer.php"); ?>
</body>
</html>