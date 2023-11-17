    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

           <!-- Customized Bootstrap Stylesheet -->
    <link href="<?php echo base_url('css/style3.css');?>" rel="stylesheet">
    <script src="<?php echo base_url('css/jiji2.js');?>"></script>
    </head>
    <body>
             <div class="app">
                <div class="sidebar">
                <div class="user">
                <h2>¡<?php echo $username; ?>! Bienvenido a L.I.T.E</h2>
                <!-- <div class="user-name"><p>Bienvenido, <?php // echo $username; ?>!</p></div> -->
                </div>
                <div class="btn-group-vertical">
                    
                        <a name="" id="" class="btn" href="<?php echo base_url('casa')?>" role="button">Tu hogar</a>
                        <a name="" id="" class="btn" href="logout" role="button">Cerrar sesión</a>
                        <a name="" id="" class="btn" href="#" role="button">Vincula tu dispositivo</a>
                        <a name="" id="" class="btn" href="#" role="button">Sobre el producto</a>
                        <a name="" id="" class="btn" href="#" role="button">Manual de usuario</a>

                </div>
                 

                <div class="sidebar-menu">
                <a href="#" class="sidebar-menu__link active"></a>
                <a href="#" class="sidebar-menu__link"></a>
                <a href="#" class="sidebar-menu__link"></a>
                
                </div>
                <label class="toggle">
                <input type="checkbox">
                <!--
                <span class="slider"></span>-->
                </label>
                </div>
                <div class="main">
                <div class="main-header">
                <div class="main-header__title"></div>
                <!--<div class="main-header__avatars">
                    <img class="main-header__avatar" src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1740&q=80" alt="avatar">
                    <img class="main-header__avatar" src="https://images.unsplash.com/photo-1683392969197-17547ac3e06e?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1587&q=80" alt="avatar">
                    <img class="main-header__avatar" src="https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1760&q=80" alt="avatar">-->
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v6m3-3H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                </svg></button>
                </div>
                <div class="row">
  <div class="col-md-6">
    <div class="card" style="width: 30rem; height:35rem; color:white; background-color:black; padding:10px;">
      <img src="<?php echo base_url('img/prueba.svg');?>" class="img-thumbnail" style="width:18rem; background-color:black; border-color:black; float:right;" alt="...">
      <div class="card-body">
        <h5 class="card-title">Hagamos un cambio!</h5>
        <p class="card-text">¿Sabias que un 80% de la energía que consumimos viene de combustibles fosiles? Y estos son responsables de la mayor cantidad de emisión de CO2</p>
        <a href="#" class="btn btn-outline-light">Cuentame más</a>
      </div>
    </div>
  </div>
  <div class="col-md-6">
    <div class="card" style="width: 50rem; color:white; background-color:black; padding:10px;"">
      <div class="card-header" style="color:#109786;">
        20% OFF en tu primera compra
      </div>
      <div class="card-body">
        <h5 class="card-title">Accedé a nuestros servicios y cuida tu bolsillo $$$</h5>
        <img src="<?php echo base_url('img/prueba2.svg');?>" class="img-thumbnail" style="width:10rem; background-color:black; border-color:black; float:right;" alt="...">
        <p class="card-text">Con nuestro dispositivo, puedes reducir tu consumo de energía hasta en un 20%. Esto significa que estarás contribuyendo a la protección del medioambiente y ahorrando dinero en tus facturas. </p>
        <a href="#" class="btn btn-outline-success">Go somewhere</a>
      </div>
    </div>
  </div>
</div>
                    
                

       


    </body>
    </html>

    
       
        