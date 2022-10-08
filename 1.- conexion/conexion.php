<?php
#HACER UNA FUNCION PARA CREAR LA CONEXION A MYSQL
function conectar(){
    $conexion = new mysqli("localhost","root","12345","proyecto");

    if($conexion->connect_error){
        return "No conectado";
    } else{
        return "Usted se ha conectado de forma satisfactoria UwU";
    }
}
?>
