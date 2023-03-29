<?php

    // Importar archivos
    require __DIR__ . '/vendor/autoload.php';
    require __DIR__ . '/controller.php';

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Premios Numericco</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">

    <!-- Syles -->
    <link rel="stylesheet" href="/assets/css/styles.css">
    <link rel="stylesheet" href="//cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="/assets/vendor/bootstrap-5.3.0-alpha2-dist/css/bootstrap.min.css">

</head>
<body>
    
    <div class="wrap">

    
        <!-- Alerts -->
        <?php if (!is_null($_ERROR)) : ?>

            <div class="alert alert-danger" role="alert"><?= $_ERROR ?></div>

        <?php endif; if (!is_null($_SUCCESS)) : ?>

            <div class="alert alert-success" role="alert"><?= $_SUCCESS ?></div>

        <?php endif; ?>


        <!-- Header -->
        <div class="header">
            <div class="header-title">
                <h1>Premios <?= $_YEAR ?></h1>
            </div>
            <div class="header-filter">
                <button id="import_csv" class="btn btn-primary">Importar CSV</button>
                <button id="change_year" class="btn btn-secondary">Cambiar año</button>
            </div>
        </div>


        <!-- Importar CSV -->
        <div class="card mb-5" id="import_csv_box" style="display: none">
            <div class="card-body">
                <form action="/" method="POST" id="import_csv_form" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <label for="file" class="form-label">Archivo CSV</label>
                            <input class="form-control" type="file" id="file" name="file">
                        </div>
                        <div class="col-12 col-md-6">
                            <label for="year" class="form-label">Año</label>
                            <input type="number" class="form-control" id="year" name="year" placeholder="1980 - 2300">
                            <small>Si el año ya está importado, será reemplazado</small>
                        </div>
                    </div>
                </form>
            </div>
            <div class="card-footer">
                <button class="btn-success float-end btn" onclick="$('#import_csv_form').submit()">Importar</button>
            </div>
        </div>


        <!-- Cambiar año -->
        <div class="card mb-5" id="change_year_box" style="display: none">
            <div class="card-body">
                <form action="/" method="GET" id="change_year_form">
                    <label for="year" class="form-label">Año</label>
                    <input type="number" class="form-control" id="year" name="year" placeholder="1980 - 2300">
                </form>
            </div>
            <div class="card-footer">
                <button class="btn-success float-end btn" onclick="$('#change_year_form').submit()">Cambiar</button>
            </div>
        </div>


        <!-- Table -->
        <table id="premios" class="display" style="width:100%">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Premio</th>
                    <th>Importe</th>
                    <th>Año</th>
                </tr>
            </thead>
            <tbody>

                <?php foreach ($premios as $key => $premio) : ?>

                    <tr>
                        <td><?= $premio['id'] ?></td>
                        <td><?= $premio['premio'] ?></td>
                        <td><?= number_format($premio['importe'], 2, ',', '.') ?>€</td>
                        <td><?= $premio['año'] ?></td>
                    </tr>
                    
                <?php endforeach; ?>

            </tbody>
        </table>


    </div>


    <!-- Scripts -->
    <script src="/assets/vendor/jquery/jquery-3.6.4.min.js"></script>
    <script src="//cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script src="/assets/vendor/bootstrap-5.3.0-alpha2-dist/js/bootstrap.min.js"></script>
    <script src="/assets/js/main.js"></script>

</body>
</html>