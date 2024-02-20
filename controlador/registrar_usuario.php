<?php 
    if(!empty($_POST["btnregistrar"])){
        if(empty($_POST["nombre"]) or empty($_POST["apellido"]) or empty($_POST["usuario"]) or empty($_POST["clave"])){
            echo "<div class='alert alert-danger' role='alert'>
            Todos los campos son obligatorios
            </div>";
        }else{
            $nombre = $_POST["nombre"];
            $apellido = $_POST["apellido"];
            $usuario = $_POST["usuario"];
            $clave = $_POST["clave"];
            $clave = md5($clave);
            $sql = "INSERT INTO usuario (nombre, apellido, usuario, clave) VALUES ('$nombre', '$apellido', '$usuario', '$clave')";
            $resultado = $conexion->query($sql);
            if($resultado){
                echo "<div class='alert alert-success' role='alert'>
                Usuario registrado con exito
                </div>";
            }else{
                echo "<div class='alert alert-danger' role='alert'>
                Error al registrar el usuario
                </div>";
            }
        }
    }

?>