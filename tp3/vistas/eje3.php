<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 4</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1 class="bg-light bg-gradient shadow bg-gradient text-primary h6 p-2 m-0 mt-5">
            <svg style="    transform: translateY(-2px);" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/>
            </svg>
            Cinem@s
        </h1>
        <form id="formulario" class="container shadow d-flex pt-4 flex-wrap mb-5" action="./action/action-ej-3.php" enctype="multipart/form-data" method="post">
            <div class="w-50 p-3">
                <label for="titulo" class="form-label">Título</label>
                <input name="titulo" type="text" class="form-control" id="titulo" placeholder="Título" required>
            </div>
            <div class="w-50 p-3">
                <label for="actores" class="form-label">Actores</label>
                <input name="actores" type="text" class="form-control" id="actores" placeholder="Actores" required>
            </div>
            <div class="w-50 p-3">
                <label for="director" class="form-label">Director</label>
                <input name="director" type="text" class="form-control" id="director" placeholder="Director" required>
            </div>
            <div class="w-50 p-3">
                <label for="guion" class="form-label">Guión</label>
                <input name="guion" type="text" class="form-control" id="guion" placeholder="Guión" required>
            </div>
            <div class="w-50 p-3">
                <label for="produccion" class="form-label">Producción</label>
                <input name="produccion" type="text" class="form-control" id="produccion" required>
            </div>
            <div class="w-25 p-3">
                <label for="year" class="form-label">Año</label>
                <input name="year" type="number" maxlength="4" class="form-control" id="year" required>
                <p class="year-error"></p>
            </div>
            <div class="w-50 p-3">
                <label for="nacionalidad" class="form-label">Nacionalidad</label>
                <input name="nacionalidad" type="text" class="form-control" id="nacionalidad" required>
            </div>
            <div class="w-50 p-3">
                <label for="genero" class="form-label">Género</label>
                <select class="form-select" name="genero" id="genero">
                    <option value="comedia">Comedia</option>
                    <option value="drama">Drama</option>
                    <option value="terror">Terror</option>
                    <option value="romanticas">Románticas</option>
                    <option value="suspenso">Suspenso</option>
                    <option value="otra">Otra</option>
                </select>
            </div>
            <div class="w-25 p-3">
                <label for="duracion" class="form-label">Duración</label>
                <input name="duracion" type="number" class="form-control" id="duracion" required>
                <div class="form-text">En minutos.</div>
            </div>
            <div class="w-75 p-3 d-flex flex-wrap justify-self-end">
                <label for="edad" class="form-label w-100">Restricciones de edad</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="edad" id="edad-atp" value="atp" checked>
                    <label class="form-check-label" for="edad-atp">
                        Todo público
                    </label>
                </div>
                <div class="form-check ms-3">
                    <input class="form-check-input" type="radio" name="edad" id="edad+7" value="+7">
                    <label class="form-check-label" for="edad+7">
                        Mayores de 7 años
                    </label>
                </div>
                <div class="form-check ms-3">
                    <input class="form-check-input" type="radio" name="edad" id="edad+18" value="+18">
                    <label class="form-check-label" for="edad+18">
                        Mayores de 18 años
                    </label>
                </div>
            </div>
            <div class="w-100 p-3">
                <label for="sinapsis" class="form-label">Sinapsis</label>
                <textarea class="form-control" id="sinapsis" style="height: 100px" required></textarea>
            </div>
            <div class="mb-3">
                <label for="imagen_form" class="form-label cusLabel">Imagen:</label>
                <input type="file" class="form-control" name="imagen_form" id="imagen_form" accept=".jpg, .jpeg, .png" required>
            </div>
            <div class="my-4 w-100 d-flex justify-content-end gap-1" role="group" aria-label="Basic example">
                <button type="submit" class="btn btn-primary rounded">Enviar</button>
                <button id="reset-button" type="button" class="btn btn-light rounded">Borrar</button>
            </div>
        </form>
    </div>
    
    <script src="./assets/js/ej-3.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>