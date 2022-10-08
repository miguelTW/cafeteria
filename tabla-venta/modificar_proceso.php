<?php
  //Hace conexión con la base de datos
  include("conexion.php");
  //Declara las variables
  $proveedor_id= $_REQUEST['id'];
  $nombre= $_POST['nombre'];
  $apellido= $_POST['apellido'];
  $telefono= $_POST['telefono'];
  $ingrediente_id= $_POST['ingrediente_id'];
  
  //Acá nos dice básicamente: reemplaza los datos de la tabla "usuarios" donde el dato "nombre" sea "$nombre"(la variable que creeamos arriba, osea, que se reemplazara por esta, lo mismo con los demás.)
  $query="UPDATE proveedor SET nombre='$nombre', apellido='$apellido', telefono='$telefono', ingrediente_id='$ingrediente_id'  WHERE $proveedor_id='$proveedor_id'";
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
