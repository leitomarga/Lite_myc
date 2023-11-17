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
                <div class="main-header__title"><h1>¡<?php echo $username; ?>! Bienvenide a L.I.T.E</h1></div>
                <!--<div class="main-header__avatars">
                    <img class="main-header__avatar" src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1740&q=80" alt="avatar">
                    <img class="main-header__avatar" src="https://images.unsplash.com/photo-1683392969197-17547ac3e06e?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1587&q=80" alt="avatar">
                    <img class="main-header__avatar" src="https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1760&q=80" alt="avatar">-->
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v6m3-3H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                </svg></button>
                </div>
                 <!--<div class="card" style="width: 10rem; background-color:black; color:white;">
                    <img src="<?php //echo base_url('img/prueba.svg');?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>-->
                </div>
                </div>
                <div class="main-header-nav">
                    <a href="#" class="nav-item active">All</a>
                    <a href="#" class="nav-item">Videos</a>
                    <a href="#" class="nav-item">Notes</a>
                    <a href="#" class="nav-item">Music</a>
                    <a href="#" class="nav-item">To-do list</a>
                </div>
               

       


    </body>
    </html>

    
       
        