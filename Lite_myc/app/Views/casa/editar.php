<!doctype html>
<html lang="en">

<head>
  <title>Title</title>
  
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>
  <header>
  
  </header>
  <main>
  <form action="<?php echo base_url('casa/crear/habitacion'); ?>">
        <label for="nombre_habitacion">
          <p> Nombre de habitación: </p>
        </label>
        <input type="text" id="nombre_habitacion" name="nombre_habitacion" placeholder="Ingrese el nombre de la habitación">
        <label for="color_habitacion">
          <p> Color de la habitación: </p>
        </label>
        <input type="color" id="color_habitacion" name="color_habitacion" placeholder="Ingrese el color de su habitación">
      </form>
  </main>
  <footer>
  
  </footer>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>