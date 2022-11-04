<?php
  //Hace conexión con conexión.php
  include("conexion.php");
  //Declara las variables nombre, apellido
  $fecha= $_POST['fecha'];
  $empleado_id= $_POST['empleado_id'];
  $cantidad_producto= $_POST['cantidad_producto'];
  $total_venta= $_POST['total_venta'];
  //Inserta en la tabla "usuarios" el nombre, el apellido y el correo las variables declaradas anteriormente
  $query="INSERT INTO ventas(fecha,empleado_id,cantidad_producto,total_venta) VALUES('$fecha','$empleado_id','$cantidad_producto','$total_venta')";
  //Abre conexión
  $resultado= $conexion->query($query);
  //Si hay conexión los datos se llevarán hacía el menu
  if($resultado){
    //header("Location: /menu.html"); //AQUI SE PONE LA RUTA PARA QUE VAYA DE TOQUE AL FORMULARIO A REGISTRAR LOS PRODUCTOS QUE SOLICITA EL CLIENTE
    header("Location: /menu.html"); //AQUI SE PONE LA RUTA PARA QUE VAYA DE TOQUE AL FORMULARIO A REGISTRAR LOS PRODUCTOS QUE SOLICITA EL CLIENTE
  }
  //Si no hay conexión aparecerá lo siguiente
  else{
    echo "Insercion no exitosa";
  }

?>
