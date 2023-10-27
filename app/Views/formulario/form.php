<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Registro | Lite</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">
    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

       <!-- Libraries Stylesheet -->
       <link href="<?php echo base_url('lib/owlcarousel/assets/owl.carousel.min.css');?>" rel="stylesheet">
    <link href="<?php echo base_url('lib/lightbox/css/lightbox.min.css');?>" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
   <link href="<?php echo base_url('css/styleform.css');?>" rel="stylesheet">
</head>

<body>
   
<div class="main">
        <div class="container a-container" id="a-container">
            
                         <form method="POST" action="<?php echo base_url('prueba');?>">
                            <div class="form-row">
                                <div class="col-sm-6 form-label">
                                    <label for="email">Email:</label>
                                    <input type="email" id="mail" class="form-control" name="email" placeholder="Ingrese su email">
                                     <div class="error-container">
                                    </div>
                                </div>
                                
                                <div class="col-sm-6 control-group">
                                        <label for="password">Contraseña:</label>
                                        <input type="password" id="pass" class="form-control" name="password" placeholder="Ingrese su contraseña">
                                        <div class="error-container">
                                        </div>
                                </div>
                               
                                 <input class="btn btn-outline-primary" type="submit" value="Enviar">
                               
                            </div>
                           
                        </form>
        </div>
        <div class="container b-container" id="b-container">
                        
        </div>
        <div class="switch" id="switch-cnt">
            <div class="switch__circle"></div>
            <div class="switch__circle switch__circle--t"></div>
            <div class="switch__container" id="switch-c1">
                <h2 class="switch__title title">Welcome Back!</h2>
                <p class="switch__description description">To keep connected with us please login with your personal info</p>
                <button class="switch__button button switch-btn">SIGN IN</button>
            </div>
            <div class="switch__container is-hidden" id="switch-c2">
                <h2 class="switch__title title">Hello Friend!</h2>
                <p class="switch__description description">Enter your personal details and start the journey with us</p>
                <button class="switch__button button switch-btn">SIGN UP</button>
            </div>
        </div>
    </div>
    <script src="main.js"></script>
    <!-- Tu código JavaScript -->
<script>
    /*
        Designed by: SELECTO
        Original image: https://dribbble.com/shots/5311359-Diprella-Login
    */

    let switchCtn = document.querySelector("#switch-cnt");
    let switchC1 = document.querySelector("#switch-c1");
    let switchC2 = document.querySelector("#switch-c2");
    let switchCircle = document.querySelectorAll(".switch__circle");
    let switchBtn = document.querySelectorAll(".switch-btn");
    let aContainer = document.querySelector("#a-container");
    let bContainer = document.querySelector("#b-container");
    let allButtons = document.querySelectorAll(".submit");

    let getButtons = (e) => e.preventDefault();

    let changeForm = (e) => {
        switchCtn.classList.add("is-gx");
        setTimeout(function () {
            switchCtn.classList.remove("is-gx");
        }, 1500);

        switchCtn.classList.toggle("is-txr");
        switchCircle[0].classList.toggle("is-txr");
        switchCircle[1].classList.toggle("is-txr");

        switchC1.classList.toggle("is-hidden");
        switchC2.classList.toggle("is-hidden");
        aContainer.classList.toggle("is-txl");
        bContainer.classList.toggle("is-txl");
        bContainer.classList.toggle("is-z200");
    };

    let mainF = (e) => {
        for (var i = 0; i < allButtons.length; i++)
            allButtons[i].addEventListener("click", getButtons);
        for (var i = 0; i < switchBtn.length; i++)
            switchBtn[i].addEventListener("click", changeForm);
    };

    window.addEventListener("load", mainF);
</script>
<!-- Fin de tu código JavaScript -->
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
     <!-- Bootstrap JavaScript Libraries -->
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
            integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
        </script>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
            integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
</body>

</html>

</body>
</html>

        
        