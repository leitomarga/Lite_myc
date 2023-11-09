    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
           <!-- Customized Bootstrap Stylesheet -->
    <link href="<?php echo base_url('css/style3.css');?>" rel="stylesheet">
    <script src="<?php echo base_url('css/jiji2.js');?>"></script>
    </head>
    <body>
             <div class="app">
                <div class="sidebar">
                <div class="user">
                
                <div class="user-name"><p>Bienvenido, <?php echo $username; ?>!</p></div>
                </div>
                <?php 
            if(isset ($idUsuario))
            {
                echo $idUsuario;
            }

            if(session()->has('id_users'))
            {
                echo session('id_users');
            }
            else 
            {
                echo "no funciona";
            }

            if(session()->has('email'))
            {
                echo session('email');
            }
            else 
            {
                echo "no funciona";
            }
            
        ?>
        
        <a href="<?php echo base_url('casa')?>">Casa</a>
        <a href="logout">Cerrar sesión</a>
                <div class="sidebar-menu">
                <a href="#" class="sidebar-menu__link active">Design</a>
                <a href="#" class="sidebar-menu__link">Barbeque</a>
                <a href="#" class="sidebar-menu__link">Productivity</a>
                <a href="#" class="sidebar-menu__link">Workout</a>
                <a href="#" class="sidebar-menu__link">Book</a>
                <a href="#" class="sidebar-menu__link">Snack</a>
                </div>
                <label class="toggle">
                <input type="checkbox">
                <span class="slider"></span>
                </label>
                </div>
                <div class="main">
                <div class="main-header">
                <div class="main-header__title"><h1>Bienvenido a L.I.T.E</h1></div>
                <!--<div class="main-header__avatars">
                    <img class="main-header__avatar" src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1740&q=80" alt="avatar">
                    <img class="main-header__avatar" src="https://images.unsplash.com/photo-1683392969197-17547ac3e06e?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1587&q=80" alt="avatar">
                    <img class="main-header__avatar" src="https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1760&q=80" alt="avatar">-->
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v6m3-3H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                </svg></button>
                </div>
                
                </div>
                <div class="main-header-nav">
                    <a href="#" class="nav-item active">All</a>
                    <a href="#" class="nav-item">Videos</a>
                    <a href="#" class="nav-item">Notes</a>
                    <a href="#" class="nav-item">Music</a>
                    <a href="#" class="nav-item">To-do list</a>
                </div>
                <div class="main-content">
                <div class="card card-2 card-img"></div>
                <div class="card card-3 card-img"></div>
                    <div class="card card-img card-1 card-main"></div>
                <div class="card card-4 card-img"></div>
                <div class="card card-img card-5"></div>
                <div class="card card-6 card-img"></div>
                </div>
                </div>
                </div>

       


    </body>
    </html>

    
       
        