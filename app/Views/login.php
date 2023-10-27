
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Inicio de sesíon | Lite</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

       <!-- Libraries Stylesheet -->
       <link href="<?php echo base_url('lib/owlcarousel/assets/owl.carousel.min.css');?>" rel="stylesheet">
    <link href="<?php echo base_url('lib/lightbox/css/lightbox.min.css');?>" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="<?php echo base_url('css/style2.css');?>" rel="stylesheet">
    <link href="<?php echo base_url('css/jiji2.css');?>" rel="stylesheet">
</head>

<body>
    <!-- Topbar Start 
    <div class="container-fluid bg-primary py-3 d-none d-md-block">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center text-lg-left mb-2 mb-lg-0">
                    <div class="d-inline-flex align-items-center">
                      
                    </div>
                </div>
                <div class="col-md-6 text-center text-lg-right">
                    <div class="d-inline-flex align-items-center">
                        <a class="text-white px-3" href="">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a class="text-white px-3" href="">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a class="text-white px-3" href="">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <a class="text-white px-3" href="">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a class="text-white pl-3" href="">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start 
    <div class="container-fluid position-relative nav-bar p-0">
        <div class="container-lg position-relative p-0 px-lg-3" style="z-index: 9;">
            <nav class="navbar navbar-expand-lg bg-white navbar-light shadow p-lg-0">
                <a href="<?php echo base_url('inicio.php');?>" class="navbar-brand d-block d-lg-none">
                    <h1 class="m-0 display-4 text-primary"><span class="text-secondary">L</span>ITE</h1>
                </a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                    <div class="navbar-nav ml-auto py-0">
                        <a href="<?php echo base_url('');?>"  class="nav-item nav-link">Home</a>
                        <a href="about.html" class="nav-item nav-link">About</a>
                        <a href="product.html" class="nav-item nav-link">Product</a>
                    </div>
                    <a href="<?php echo base_url('/');?>" class="navbar-brand mx-5 d-none d-lg-block">
                        <h1 class="m-0 display-4 text-primary"><span class="text-secondary">L</span>ITE</h1>
                    </a>
                    <div class="navbar-nav mr-auto py-0">
                        <a href="service.html" class="nav-item nav-link">Service</a>
                        <a href="<?php echo base_url('login');?>" class="nav-item nav-link">inicia sesion</a>
                        <a href="<?php echo base_url('registrar');?>" class="nav-item nav-link">Registrate</a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End 


    <!-- Header Start 
    <div class="jumbotron jumbotron-fluid page-header" style="margin-bottom: 90px;">
        <div class="container text-center py-5">
            <h1 class="text-white display-3 mt-lg-5">Tu usuario fue creado y estamos listos para comenzar</h1>
            <div class="d-inline-flex align-items-center text-white">
                <p class="m-0"><a class="text-white" href="">Home</a></p>
                <i class="fa fa-circle px-3"></i>
                <p class="m-0">Registro</p>
            </div>
        </div>
    </div>
    <!-- Header End -->

    <!-- Contact Start 
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row justify-content-center">
            
                <div class="col-lg-6">
                    <h1 class="section-title position-relative text-center mb-5">Vive tu propia experiencia</h1>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-9">
                    <div class="contact-form bg-light rounded p-5">
                        <div id="success"></div>
                        <h1>Inicia Sesión</h1>
                                <form method="POST" action="<?php echo base_url('login/verificar');?>">
                                        <div class="form-row">
                                                <div class="col-sm-6 control-group">
                                                    <label for="email">Email:</label>
                                                    <input type="email" id="mail" name="email" placeholder="Ingrese su email">
                                                </div>
                                                
                                                        <?php 
                                                        if(isset($validar)){
                                                            foreach($validar as $val){
                                                            echo $val;
                                                        }
                                                        }
                                                        if(isset($incorrecto))
                                                        {
                                                            foreach($incorrecto as $inc)
                                                            {
                                                                echo $inc;
                                                            }
                                                        }
                                                        ?>
                                                <div class="col-sm-6 control-group">
                                                    <label for="password">Contraseña: </label>
                                                    <input type="password" id="pass" name="password" placeholder="Ingrese su contraseña">
                                                </div>
                                                
                                                <input type="submit" class="btn btn-primary btn-block py-3 px-5" value="Enviar">
                                                
                                        </div>
                                </form>

                                <p><a href="login/recuperarPass">Olvidé mi contraseña</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->


   


    <!-- Back to Top 
    <a href="#" class="btn btn-secondary px-2 back-to-top"><i class="fa fa-angle-double-up"></i></a>-->
    <header>
        <a href="<?php echo base_url('registrar');?>" class="btnregistro"> Registrate</a>
    </header>
    <div class="login-box">
  <h2>Inicia Sesión</h2>
  <form method="POST" id="miformulario" action="<?php echo base_url('login/verificar');?>">
    <div class="user-box">
        <label for="email"></label>
        <input type="email" id="mail" name="email" placeholder="Ingrese su email">
    </div>
    
    <?php 
        if(isset($validar)){
                        foreach($validar as $val){
                        echo $val;
                        }
            }
        if(isset($incorrecto)){
                foreach($incorrecto as $inc)
                  {
                     echo $inc;
                  }
            }
         ?>                                                                                                                 
    <div class="user-box">
        <label for="password"> </label>
        <input type="password" id="pass" name="password" placeholder="Ingrese su contraseña">
    </div>
    <div class="user-box">
            <a href="#" id="miBoton">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            Ingresar
            <input type="submit" style="display: none;">
            </a>
    </div>
  </form>
</div>
        <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
        <script>
        $(document).ready(function() {
        $("#miBoton").on("click", function(e) {
            e.preventDefault();
            $("#miformulario").submit();
        });
        });
        </script>
    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/isotope/isotope.pkgd.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>

</body>
</html>
