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
                <h2>Vincula tu dispositivo</h2>
                </div>
                <div class="btn-group-vertical">
                    
                        <a name="" id="" class="btn" href="<?php echo base_url('casa')?>" role="button">Tu hogar</a>
                        <a name="" id="" class="btn" href="logout" role="button">Cerrar sesión</a>
                        <a name="" id="" class="btn" href="<?php echo base_url('vinculacion')?>" role="button">Vincula tu dispositivo</a>
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
                <?php $idUsuario = session('id_users'); ?>
                <div class="main">
                <div class="main-header">
                <div class="main-header__title">
                <form action="<?php echo base_url('insertarDispositivo');?>" method="post">
                        <input type="text" name="id_chip" placeholder="ID del dispositivo">
                        <input type="hidden" value="<?php echo $idUsuario;?>" >
                <?php echo var_dump($consulta);?>
                        <input type="submit" value="Guardar">
                        </form>
                </div>
                
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v6m3-3H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                </svg></button>

</div>
                </div>
                </div>
            

    </body>
    </html>

    
       
        