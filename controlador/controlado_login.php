<?php 
    session_start();
    if(!empty($_POST["btningresar"])){
        if(!empty($_POST["usuario"]) && !empty($_POST["password"])){
            $usuario = $_POST["usuario"];
            $password = md5($_POST["password"]);

            $sql=$conexion->query("SELECT * FROM usuario WHERE usuario='$usuario' AND clave='$password'");

            //si el usuario existe
            if($datos=$sql->fetch_object()){
                $_SESSION["id"] = $datos->id; // si se logea se guarda el id del usuario que esta en la BD
                $_SESSION["nombre"] = $datos->usuario; // si se logea se guarda el nombre del usuario que esta en la BD
                $_SESSION["apellido"] = $datos->apellido; // si se logea se guarda el apellido del usuario que esta en la BD
                
                header("location: inicio.php");
                
            }else{
                echo "El usuario no existe";
            }
        }
        else{
            echo "Los campos no pueden estar vacíos";
        }
    }

?>