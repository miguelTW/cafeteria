<?php
    #INCLUIMOS LA FUNCION "conexion"
    include("conexion.php");

    #CREAMOS UNA VARIABLE "conn" Y LE ASIGNAMOS LA FUNCION "conectar"
    $conn = conectar();
    #MOSTRAMOS EL MENSAJE 
    echo $conn;
    
?>
