<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Colegio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body onload="mueveReloj()">
<div class="container-lg">

        <!-- Menú de navegación -->
        <?php include_once "menu.php"; ?>

        <!-- Banner -->
        <h1 class="bg-secondary-subtle text-primary text-center p-2">Mantenimiento de cursos</h1>

        <!-- Formulario de cursos -->
        <form class="p-4 bg-info-subtle">

            <!-- Título -->
            <div class="mb-3 row">
                <label for="titulo" class="col-sm-3 col-form-label text-primary">Título</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control text-primary" id="titulo"
                        name="titulo" value="">
                </div>
            </div>

            <!-- Profesor -->
            <div class="mb-3 row">
                <label for="profesor" class="col-sm-3 col-form-label text-primary">Profesor</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control text-primary" id="profesor"
                        name="profesor" value="">
                </div>
            </div>

            <!-- Dia -->
            <div class="mb-3 row">
                <label for="dia" class="col-sm-3 col-form-label text-primary">Día</label>
                <div class="col-sm-9">
                    <select id="dia" name="dia" class="form-select text-primary" aria-label="Default select example">
                        <?php include_once "php/front/diasSelect.php"; ?>
                    </select>
                </div>
            </div>

            <!-- Turno-->
            <div class="mb-3 row">
                <label for="turno" class="col-sm-3 col-form-label text-primary">Turno</label>
                <div class="col-sm-9">
                    <select id="turno" name="turno" class="form-select text-primary" aria-label="Default select example">
                        <?php include_once "php/front/turnosSelect.php"; ?>
                    </select>
                </div>
            </div>

            <!-- Botones-->
            <div class="mb-3 row">
                <button type="submit" class="btn btn-success col-sm-3 m-2">Guardar</button>
                <button type="reset" class="btn btn-danger col-sm-3 m-2">Borrar</button>
            </div>

            <!-- Información -->
            <div class="mb-3 row">
                <label for="info" class="col-sm-3 col-form-label text-primary">Información</label>
                <div class="col-sm-9">
                    <div class="form-control text-primary" id="info">
                        <?php include_once "php/front/cursosInsert.php"; ?>
                    </div>
                </div>
            </div>
        </form>

        <!-- Tabla de Cursos -->
        <table class="table table-success table-striped table-hover">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Título</th>
                    <th scope="col">Profesor</th>
                    <th scope="col">Día</th>
                    <th scope="col">Turno</th>
                    <th scope="col">Borrar</th>
                </tr>
            </thead>
            <tbody>
                <?php include_once "php/front/cursosTable.php"; ?>       
            </tbody>
        </table>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="js/reloj.js"></script>
    <script src="js/main.js"></script>
</body>

</html>