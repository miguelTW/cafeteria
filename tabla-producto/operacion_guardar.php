<?php
  //Hace conexión con conexión.php
  include("conexion.php");
  //Declara las variables nombre, apellido
  $nombre= $_POST['nombre'];
  $precio= $_POST['precio'];
  $descripcion= $_POST['descripcion'];
  //Inserta en la tabla "usuarios" el nombre, el apellido y el correo las variables declaradas anteriormente
  $query="INSERT INTO producto(nombre,precio,descripcion) VALUES('$nombre','$precio','$descripcion')";
  //Abre conexión
  $resultado= $conexion->query($query);
  //Si hay conexión los datos se llevarán hacía el menu
  if($resultado){
    header("Location: /menu.html");
  }
  //Si no hay conexión aparecerá lo siguiente
  else{
    echo "Insercion no exitosa";
  }

?>
