<?php

require_once("../../configuracion.php");
include_once("../estructura/menu/menu.php");

use Control\AbmAuto;
use Control\AbmPersona;

?>

<!DOCTYPE html>
<html>
<head>
    <title>Ver Autos</title>
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/css/styles.css">
    <script type="text/javascript" src="./assets/js/bootstrap.bundle.min.js"></script>
<link rel="stylesheet" href="./assets/css/inicio.css">
     
</head>
<body class="bg-dark ">

<?php


<<<<<<< HEAD
    require_once("../../configuracion.php");
    $rutalogo = "./assets/img/";
    include_once("./estructura/menu/menu.php");
    include_once("./estructura/Navbar.php");
=======
    $rutalogo = "./img/";
    include_once("../estructura/Navbar.php");
>>>>>>> ed9c2e95e90f7967572840cce7e5c716ba5af8ff
?>

<main class="container-fluid cont container text-center text-light">
    <h1>Lista de Autos</h1>

    <?php
    // Crea instancias de las clases de la capa de control
    $abmAuto = new AbmAuto();
    $abmPersona = new AbmPersona();

    // Obtén la lista de autos desde la capa de control
    $autos = $abmAuto->obtenerTodosLosAutos();

    // Verifica si hay autos cargados
    if (count($autos) > 0) {
        $salida = <<<TABLA
        <table class="table table-dark">
        <tr><th>Patente</th><th>Marca</th><th>Modelo</th><th>Dueño</th></tr>
        TABLA;
        
        // Itera a través de la lista de autos y muestra los datos
        foreach ($autos as $auto) {
            $duenio =  $auto->getDuenio();
            $duenio->buscar();
            $salida.= <<<FILA
            <tr>
            <td> {$auto->getPatente()} </td>
            <td> {$auto->getMarca()} </td>
            <td> {$auto->getModelo()} </td>
            <td> {$duenio->getNombre()}  {$duenio->getApellido()} </td>
            </tr>
            FILA;
        }
        
        $salida.= "</table>";
    } else {
        $salida = "<p>No hay autos cargados.</p>";
    }

    echo $salida;
    ?>

</main>
<?php
    include_once("./estructura/Footer.php");
?>
</body>
</html>