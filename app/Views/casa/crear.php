<!DOCTYPE html>
<html lang="en">

<head>
    <title>Agregar Habitación</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link href="<?php echo base_url('css/style3.css');?>" rel="stylesheet">
    <style>
        .form-style {
            max-width: 400px;
            margin: auto;
            margin-top: 50px; /* Ajusta el margen superior según sea necesario */
        }

        .form-style label {
            font-size: 16px;
            font-weight: bold;
            margin-bottom: 5px;
            display: block;
        }

        .form-style input[type="text"] {
            width: 100%;
            padding: 8px;
            margin-bottom: 15px;
            border: 1px solid #ced4da;
            border-radius: 10px;
            box-sizing: border-box;
        }

        .color-picker {
            display: block;
            width: 100%;
            padding: 8px;
            margin-bottom: 15px;
            box-sizing: border-box;
        }

        .form-style input[type="submit"] {
            background-color: #007bff;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }

        .form-style input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
    <!-- Spectrum CSS -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/spectrum/1.8.1/spectrum.min.css">

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Spectrum JS -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/spectrum/1.8.1/spectrum.min.js"></script>

    <script>
        $(document).ready(function () {
            $("#color_habitacion").spectrum({
                preferredFormat: "hex",
                showInput: true,
                showAlpha: false,
                allowEmpty: false,
                showPalette: true,
                palette: ["#007bff", "#28a745", "#dc3545", "#ffc107", "#17a2b8", "#6610f2", "#6c757d"]
            });
        });
    </script>
</head>

<body>
    <header>
        <h1 class="text-center">Agregar Habitación</h1>
    </header>
    <main class="app">
      <?php $idUsuario = session('id_users'); ?>
        <div class="container">
            <form method="POST" action="<?php echo base_url('casa/crear/habitacion'); ?>" class="form-style">
                <div class="mb-3">
                    <label for="nombre_habitacion" class="form-label">Nombre de habitación:</label>
                    <input type="text" id="nombre_habitacion" name="nombre_habitacion"
                        placeholder="Ingrese el nombre de la habitación">
                </div>
                <div class="mb-3">
                    <label for="color_habitacion" class="form-label">Color de la habitación:</label>
                    <input type="text" id="color_habitacion" name="color_habitacion" class="color-picker">
                </div>
                <input type="hidden" name="idUsuario" value=<?php echo $idUsuario; ?>>
                <input type="submit" name="boton" value="Crear" class="btn btn-primary">
            </form>
        </div>
    </main>
    <footer></footer>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
        integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz"
        crossorigin="anonymous"></script>
</body>

</html>