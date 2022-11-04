<?php
  //Hace conexión con conexión.php
  include("conexion.php");
  //Declara las variables nombre, apellido
  
  $venta_id= $_POST['venta_id'];
  $producto_id= $_POST['producto_id'];
  $cantidad= $_POST['cantidad'];
  //Inserta en la tabla "usuarios" el nombre, el apellido y el correo las variables declaradas anteriormente
  $query="INSERT INTO venta_producto(venta_id,producto_id,cantidad) VALUES('$venta_id','$producto_id','$cantidad')";
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
