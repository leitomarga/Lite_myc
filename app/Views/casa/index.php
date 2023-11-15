<!DOCTYPE html>
<html lang="en">

<head>
    <title>Tu casa</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">


    <link href="<?php echo base_url('css/style3.css');?>" rel="stylesheet">
    <script src="<?php echo base_url('css/jiji2.js');?>"></script>

 
    <style>
        .habitacion-button {
            border: none;
            padding: 50px 70px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
            display: inline-block;
            transition: transform 0.2s;
        }

        .habitacion-button:hover {
            transform: scale(1.1);
        }

        .text-center {
            text-align: center;
            margin-top: 20px;
        }

        .button-container {
            margin-top: 20px;
        }
    </style>

<h1>Tu casa</h1>

</head>

<body>
    
    <div class="app">
    <div class="container text-center">
        <div class="button-container">
            <a href="casa/crear" class="btn btn-info">Agregar habitación</a>
        </div>
        <div>
            <?php if (isset($mensaje)): ?>
                <p><?php echo $mensaje; ?></p>
            <?php else: ?>
                <?php foreach ($habitaciones as $habitacion): ?>
                    <button class="habitacion-button" style="background-color: <?php echo $habitacion->color; ?>;">
                        <?php echo $habitacion->nombre; ?>
                    </button>
                    <a href="<?php echo base_url("casa_update") ?>" style="margin-bottom: 10px;">Editar nombre</a>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
    </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
        crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
        integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz"
        crossorigin="anonymous"></script>
</body>

</html>