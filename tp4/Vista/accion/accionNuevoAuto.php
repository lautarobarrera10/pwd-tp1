<?php

require_once("../../utils/functions.php");
require_once("../../../configuracion.php");
include_once("../estructura/menu/menu_accion.php");

use Control\AbmAuto;
use Control\AbmPersona;

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Actualizar Datos de Persona</title>
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/styles.css">
    <link rel="stylesheet" href="../assets/css/inicio.css">
    <script type="text/javascript" src="../assets/js/bootstrap.bundle.min.js"></script>
</head>
<body class="bg-dark">
    <?php
    $rutalogo = "../assets/img/";
    include_once("../estructura/Navbar.php");
    ?>

<main class="container-fluid cont container text-light">

    <div class="card col-12 text-center" data-bs-theme="dark">
        <h2>Agregar Auto Nuevo</h2>
        <div class="container text-center">
        <?php

            $datos = darDatosSubmitted();
            if ($_SERVER["REQUEST_METHOD"] === "POST") {
                $patente = $datos["patente"];
                $marca = $datos["marca"];
                $modelo = $datos["modelo"];
                $dniDuenio = $datos["dniDuenio"];

                
                $abmPersona = new AbmPersona();
                $persona = $abmPersona->obtenerDatosPersona($dniDuenio);

                if ($persona === null) {
                    
                    echo "La persona no está registrada. <a href='../NuevaPersona.php'>Registrar Nueva Persona</a>";
                } else {
                    
                    $abmAuto = new AbmAuto();
                    $resultado = $abmAuto->agregarNuevoAuto($patente, $marca, $modelo, $dniDuenio);
                    
                    echo $resultado;
                }
            }
            ?>
        </div>
    </div>
</main>

<?php include_once("../estructura/Footer.php"); ?>
</body>
</html>