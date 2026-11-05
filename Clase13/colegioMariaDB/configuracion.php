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
        <h1 class="bg-secondary-subtle text-primary text-center p-2">Configuración del sistema</h1>

        <!-- Formulario de configuración -->
        <form class="p-4 bg-info-subtle">

            <!-- php Versión -->
            <div class="mb-3 row">
                <label for="php" class="col-sm-3 col-form-label text-primary">PHP Versión</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control text-primary" id="php" readonly
                        value="<?php echo phpversion(); ?>">
                </div>
            </div>

            <!-- presentación -->
            <div class="mb-3 row">
                <label for="info" class="col-sm-3 col-form-label text-primary">Información</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control text-primary" id="info" readonly
                        value="Sistema de colegio - Curso Objetos - CFP 8 Octubre - 2024">
                </div>
            </div>

            <!-- fecha -->
            <div class="mb-3 row">
                <label for="fecha" class="col-sm-3 col-form-label text-primary">Fecha</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control text-primary" id="fecha" readonly
                    value="<?php echo date("Y-m-d") ?>">
                </div>
            </div>

            <!-- BD -->
            <div class="mb-3 row">
                <label for="bd" class="col-sm-3 col-form-label text-primary">Base de datos</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control text-primary" id="bd" readonly
                        value="<?php 
                                include_once "php/connectors/connector.php";
                                $connector = new Connector();
                                echo $connector->getData();
                            ?>">
                </div>
            </div>
        </form>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="js/reloj.js"></script>
    <script src="js/main.js"></script>
</body>

</html>