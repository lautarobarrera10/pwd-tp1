<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 5</title>
    <link rel="stylesheet" href="./assets/css/style.css">
</head>
<body>
    <h1>Ejercicio 5</h1>
    <h2>Consigna</h2>
    <p>Modificar el formulario del ejercicio anterior solicitando, tal que usando componentes
    “radios buttons” se ingrese el nivel de estudio de la persona: 1-no tiene estudios, 2-
    estudios primarios, 3-estudios secundarios. Agregar el componente que crea más
    apropiado para solicitar el sexo. En la página que procesa el formulario mostrar además
    un mensaje que indique el tipo de estudios que posee y su sexo.
    </p>
    <h2>Solución</h2>
    <form action="./action/action-ej5.php" method="post">
        <h3>Programación Web Dinámica</h3>
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre" id="nombre" required>
        <label for="apellido">Apellido</label>
        <input type="text" name="apellido" id="apellido" required>
        <label for="edad">Edad</label>
        <input type="number" name="edad" id="edad" required>
        <label for="direccion">Dirección</label>
        <input type="text" name="direccion" id="direccion" required>

        <label for="estudios">Seleccione su nivel de estudios:</label>

        <div class="radio-container">
            <input type="radio" id="ninguno" name="estudios" value="ninguno">
            <label for="ninguno">No tiene estudios</label>
        </div>
        <div class="radio-container">
            <input type="radio" id="primario" name="estudios" value="primario">
            <label for="primario">Estudios primarios</label>
        </div>
        <div class="radio-container">
            <input type="radio" id="secundario" name="estudios" value="secundario">
            <label for="secundario">Estudios secundarios</label>
        </div>

        <label style="margin-top: 12px;" for="sexo">Seleccione su sexo:</label>

        <div class="radio-container">
            <input type="radio" id="masculino" name="sexo" value="masculino">
            <label for="masculino">Masculino</label>
        </div>
        <div class="radio-container">
            <input type="radio" id="femenino" name="sexo" value="femenino">
            <label for="femenino">Femenino</label>
        </div>
        <div class="radio-container">
            <input type="radio" id="otro" name="sexo" value="otro">
            <label for="otro">Prefiero no decirlo</label>
        </div>

        
        <button type="submit">Enviar</button>
    </form>
</body>
</html>