<?php
//Ejercicio1
// Investigue y pruebe la validación de formularios usando alguna librería o framework
// javaScript (JQuery, Mootools, Dojo, Prototype, etc)
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/stylesIndex.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>TPS PWD 2024 grupo 10 </title>
</head>
<body>
    <?php include_once("./estructura/Navbar.php"); ?>
    <main class="container mt-4">
        <header class=" text-black py-3">
            <div class="container">
                <h1 class="mb-0">Ejercicio 1</h1>
            </div>
        </header>
        <section class="mb-4">
            <h2>Consigna</h2>
            <p>
                Investigue y pruebe la validación de formularios usando alguna librería o framework
                JavaScript (jQuery, MooTools, Dojo, Prototype, etc.).
            </p>
        </section>
        
        <section>
            <h2>Solución</h2>

            <article class="mb-4">
                <h3>1. Seleccionar una Librería o Framework</h3>
                <p>Puedes elegir entre varias opciones populares para validar formularios en JavaScript, tales como:</p>
            </article>
            
            <article class="mb-4">
                <h2>jQuery</h2>
                <ul>
                    <li><strong>Descripción:</strong> jQuery es una de las librerías más populares y ampliamente utilizadas en el desarrollo web. Ofrece una sintaxis simple que facilita la manipulación del DOM, la gestión de eventos y, por supuesto, la validación de formularios.</li>
                    <li><strong>Ventajas:</strong>
                        <ul>
                            <li>Gran cantidad de plugins disponibles para ampliar sus capacidades, como <code>jQuery Validation</code> para validación de formularios.</li>
                            <li>Excelente documentación y una gran comunidad de desarrolladores.</li>
                            <li>Compatible con la mayoría de los navegadores.</li>
                        </ul>
                    </li>
                </ul>
            </article>

            <article class="mb-4">
                <h2>MooTools</h2>
                <ul>
                    <li><strong>Descripción:</strong> MooTools es un framework ligero que facilita la manipulación del DOM, el manejo de eventos, y la creación de efectos visuales. También incluye herramientas para la validación de formularios.</li>
                    <li><strong>Ventajas:</strong>
                        <ul>
                            <li>Ofrece una sintaxis limpia y orientada a objetos.</li>
                            <li>Buena integración con otras bibliotecas y frameworks.</li>
                            <li>Útil para desarrolladores que buscan una solución ligera.</li>
                        </ul>
                    </li>
                </ul>
            </article>

            <article class="mb-4">
                <h2>Dojo</h2>
                <ul>
                    <li><strong>Descripción:</strong> Dojo es un framework JavaScript robusto que ofrece una amplia gama de funcionalidades, incluyendo herramientas para la validación de formularios. Es conocido por su modularidad y escalabilidad.</li>
                    <li><strong>Ventajas:</strong>
                        <ul>
                            <li>Permite la creación de aplicaciones web complejas y ricas en funcionalidades.</li>
                            <li>Ofrece validación de formularios integrada.</li>
                            <li>Incluye herramientas avanzadas para el desarrollo de interfaces de usuario.</li>
                        </ul>
                    </li>
                </ul>
            </article>

            <article class="mb-4">
                <h2>Prototype</h2>
                <ul>
                    <li><strong>Descripción:</strong> Prototype es una librería JavaScript que facilita la manipulación del DOM y el manejo de eventos. Aunque es menos popular hoy en día, sigue siendo útil para quienes buscan una solución simple y efectiva.</li>
                    <li><strong>Ventajas:</strong>
                        <ul>
                            <li>Sintaxis sencilla que simplifica la manipulación del DOM.</li>
                            <li>Soporte para características avanzadas como AJAX.</li>
                            <li>Compatible con otras bibliotecas y frameworks.</li>
                        </ul>
                    </li>
                </ul>
            </article>
        </section>
    </main>
    <?php include_once("./estructura/Footer.php"); ?>
</body>
</html>