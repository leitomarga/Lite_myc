<!doctype html>
<html lang="en">

<head>
  <title>Title</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <style>

.hola {
    font-family: arial;
}

.button {
  border: none;
  color: white;
  padding: 50px 70px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  transition-duration: 0.4s;
  cursor: pointer;

}

.button1 {
  background-color: white;
  color: black;
  border: 2px solid #7C8691;
  text-center
}

.button1:hover {
  background-color: #7C8691;
  color: white;
}

.text-center {
      text-align: center;
      margin-top: 20px;
    }


</style>

</head>

<body>
  <header>
    <br>
    <h1>Tu casa</h1>
  </header>
  <main>
    
  <div class="text-center">
  <button class="button button1">Habitación</button>
  <a href="casa/editar" class="btn btn-info">Editar habitación</a> 
</div>
   
<br>
<div class="text-center">
    
</div>

    <!-- sintaxis del foreach -->
    <?php 
      //foreach ($casas as $casa):
        ?>
  <div>
    <h1><?php //echo $casa['nombre']; ?></h1>
  </div>
  <?php //endforeach; ?>

  </main>
  <footer>
    <!-- place footer here -->
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