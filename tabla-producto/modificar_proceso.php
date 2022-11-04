<?php
  //Hace conexión con la base de datos
  include("conexion.php");
  //Declara las variables
  $producto_id= $_REQUEST['id'];
  $nombre= $_POST['nombre'];
  $precio= $_POST['precio'];
  $descripcion= $_POST['descripcion'];
  
  

  //Acá nos dice básicamente: reemplaza los datos de la tabla "usuarios" donde el dato "nombre" sea "$nombre"(la variable que creeamos arriba, osea, que se reemplazara por esta, lo mismo con los demás.)
  $query="UPDATE producto SET nombre='$nombre', precio='$precio', descripcion='$descripcion' WHERE producto_id='$producto_id'";
  $resultado= $conexion->query($query);
  //Si tiene exito nos llevara a tabla.php donde estaran los datos modificados
  if($resultado){
    header("Location: /menu.html");
  }
  //Sino nos dará el siguiente error
  else{
    echo "Insercion no exitosa";
  }
?>
