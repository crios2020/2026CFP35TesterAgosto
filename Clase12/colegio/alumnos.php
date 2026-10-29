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
        <h1 class="bg-secondary-subtle text-primary text-center p-2">Mantenimiento de Alumnos</h1>

        <!-- Formulario de Alumnos -->
        <form class="p-4 bg-info-subtle">

            <!-- Nombre -->
            <div class="mb-3 row">
                <label for="nombre" class="col-sm-3 col-form-label text-primary">Nombre</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control text-primary" id="nombre"
                        name="nombre" value="">
                </div>
            </div>

            <!-- Apellido -->
            <div class="mb-3 row">
                <label for="apellido" class="col-sm-3 col-form-label text-primary">Apellido</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control text-primary" id="apellido"
                        name="apellido" value="">
                </div>
            </div>

            <!-- Edad -->
            <div class="mb-3 row">
                <label for="edad" class="col-sm-3 col-form-label text-primary">Edad</label>
                <div class="col-sm-9">
                    <input type="number" class="form-control text-primary" id="edad"
                        name="edad" value="18" min="18" max="120">
                </div>
            </div>

            <!-- Id_curso-->
            <div class="mb-3 row">
                <label for="curso" class="col-sm-3 col-form-label text-primary">Curso</label>
                <div class="col-sm-9">
                    <select id="curso" name="id_curso" class="form-select text-primary" aria-label="Default select example">
                        <?php include_once "php/front/cursosSelect.php"; ?>
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
                <label class="col-sm-3 col-form-label text-primary">Información</label>
                <div class="col-sm-9">
                    <div class="form-control text-primary" id="info">
                        <?php include_once "php/front/alumnosInsert.php"; ?>
                    </div>
                </div>
            </div>
        </form>
        <!-- Tabla de Alumnos -->
        <table class="table table-success table-striped table-hover">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Apellido</th>
                    <th scope="col">Edad</th>
                    <th scope="col">Curso</th>
                    <th scope="col">Borrar</th>
                </tr>
            </thead>
            <tbody>
                <?php include_once "php/front/alumnosTable.php"; ?>
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="js/reloj.js"></script>
    <script src="js/main.js"></script>
</body>

</html>