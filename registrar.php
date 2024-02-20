<?php
include("modelo/conexion.php"); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
   <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>Document</title>
</head>
<body>
    <div class="container ">

        <h2>Registrar Usuario</h2>
        <?php
            include("controlador/registrar_usuario.php"); 
        ?>
        <div class="login_content">

            <form action="" method="POST" class="formulario">
                <div class="input-div one">
                    <div class="div">
                        <h5>Nombre</h5>
                        <input id="nombre" type="text" class="input" name="nombre">
                    </div>
                </div>
                <div class="input-div one">
                    <div class="div">
                        <h5>Apellido</h5>
                        <input id="apellido" type="text" class="input" name="apellido">
                    </div>
                </div>
                <div class="input-div one">
                    <div class="div">
                        <h5>Usuario</h5>
                        <input id="usuario" type="text" class="input" name="usuario">
                    </div>
                </div>
                <div class="input-div pass">
                    <div class="i">
                        <i class="fas fa-lock"></i>
                    </div>
                    <div class="div">
                        <h5>Contraseña</h5>
                        <input type="password" id="input" class="input" name="clave">
                    </div>
                </div>
                <input name="btnregistrar" class="btn" type="submit" value="REGISTRAR">
            </form>
            <div class="text-center">
               <a class="font-italic isai5" href="./login.php">Iniciar Sesion</a>
            </div>
        </div>
        </div>
    </body>
    <script src="js/fontawesome.js"></script>
    <script src="js/main.js"></script>
    <script src="js/main2.js"></script>
   <script src="js/jquery.min.js"></script>
   <script src="js/bootstrap.js"></script>
   <script src="js/bootstrap.bundle.js"></script>
</html>