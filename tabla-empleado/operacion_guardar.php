<?php
  //Hace conexión con conexión.php
  include("conexion.php");
  //Declara las variables nombre, apellido
  $nombre= $_POST['nombre'];
  $apellido= $_POST['apellido'];
  $edad= $_POST['edad'];
  $direccion= $_POST['direccion'];
  $telefono= $_POST['telefono'];
  $puesto= $_POST['puesto'];
  //Inserta en la tabla "usuarios" el nombre, el apellido y el correo las variables declaradas anteriormente
  $query="INSERT INTO empleado(nombre,apellido,edad,direccion,telefono,puesto) VALUES('$nombre','$apellido','$edad','$direccion','$telefono','$puesto')";
  //Abre conexión
  $resultado= $conexion->query($query);
  //Si hay conexión los datos se llevarán hacía la tabla
  if($resultado){
    header("Location: /menu.html");
  }
  //Si no hay conexión aparecerá lo siguiente
  else{
    echo "Insercion no exitosa";
  }

?>
