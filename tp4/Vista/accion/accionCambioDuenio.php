<?php

require_once("../../utils/functions.php");
require_once("../../../configuracion.php");
include_once("../../estructura/menu/menu_accion.php");

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
<<<<<<< HEAD

    require_once("../../utils/functions.php");
    require_once("../../Control/AbmAuto.php");
    require_once("../../Control/AbmPersona.php");
    require_once("../../Modelo/conector/BaseDatos.php");
    require_once("../../Modelo/Auto.php");
    require_once("../../Modelo/Persona.php");

    require_once("../../../configuracion.php");
    $rutalogo = "../assets/img/";
    include_once("../estructura/menu/menu_accion.php");
    include_once("../estructura/Navbar.php");
    require_once("../../../configuracion.php");
=======
    $rutalogo = "../img/";
    include_once("../../estructura/Navbar.php");
>>>>>>> ed9c2e95e90f7967572840cce7e5c716ba5af8ff
    ?>

<main class="container-fluid cont container text-light">

    <div class="card col-12 text-center" data-bs-theme="dark">
        <h2>Cambio de Dueño de Auto</h2>
        <div class="container text-center">
        <?php

            $datos = darDatosSubmitted();
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                $patente = $datos['patente'];
                $dni = $datos['nroDni'];

                $abmAuto = new AbmAuto();
                $abmPersona = new AbmPersona();

                // Verificar si el auto y la persona existen en la base de datos
                $autoExistente = $abmAuto->obtenerDatosAuto($patente);
                $personaExistente = $abmPersona->obtenerDatosPersona($dni);

                if ($autoExistente && $personaExistente) {
                    // Realizar el cambio de dueño del auto
                    $resultado = $abmAuto->modificarDuenioAuto($patente, $dni);

                    if (strpos($resultado, 'con éxito') !== false) {
                        echo "Cambio de dueño realizado con éxito.";
                    } else {
                        echo "Error: $resultado";
                    }
                } else {
                    echo "El auto o la persona no existen en la base de datos.";
                }
            }
            ?>
        </div>
    </div>
</main>
<div class="contenedor">
</div>
<?php include_once("../estructura/Footer.php"); ?>
</body>
</html>