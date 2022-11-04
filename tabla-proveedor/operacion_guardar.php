<?php
  //Hace conexión con conexión.php
  include("conexion.php");
  //Declara las variables nombre, apellido
  $nombre= $_POST['nombre'];
  $apellido= $_POST['apellido'];
  $telefono= $_POST['telefono'];
  $ingrediente_id= $_POST['ingrediente_id'];
  //Inserta en la tabla "usuarios" el nombre, el apellido y el correo las variables declaradas anteriormente
  $query="INSERT INTO proveedor(nombre,apellido,telefono,ingrediente_id) VALUES('$nombre','$apellido','$telefono','$ingrediente_id')";
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
