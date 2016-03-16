<?php
$nombre= $_POST["nombre"];
$pass= $_POST["contra"];


if($nombre == 'root' and $pass == '1234' ){
    echo 'Hola Bienvenido';
    }

else if($nombre != 'root' and $pass != '1234'){
     echo 'Error al iniciar sesion';
    // header("Location:Login.html");
     }

?>
