<?php
  //Hace conexión con conexión.php
  include("conexion.php");
  //Declara las variables nombre, apellido
  $nombre= $_POST['nombre'];
  $existencias= $_POST['existencias'];
  $total_vendido= $_POST['total_vendido'];
  $unidad_medida= $_POST['unidad_medida'];
  //Inserta en la tabla "usuarios" el nombre, el apellido y el correo las variables declaradas anteriormente
  $query="INSERT INTO ingredientes(nombre,existencias,total_vendido,unidad_medida) VALUES('$nombre','$existencias','$total_vendido','$unidad_medida')";
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
